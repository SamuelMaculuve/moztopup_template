<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Recharge;
use App\Models\RechargeType;
use Brian2694\Toastr\Facades\Toastr;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    private $client_id;
    private $client_secret;
    private $wallet_mpesa;

    function __construct()
    {
        $this->client_id = config('app.client_id');
        $this->client_secret = config('app.client_secret');
        $this->wallet_mpesa = config('app.wallet_mpesa');
        ini_set('max_execution_time', 55);
    }

    function payment(Request $request)
    {

        $game = Crypt::decrypt($request->game);
        $rechargeType = Crypt::decrypt($request->rechargeType);

        $game = Game::find($game);
        $rechargeType = RechargeType::find($rechargeType);

        $recharge = Recharge::where(['recharge_type_id'=>$rechargeType->id, 'user_id'=>null, 'game_id'=>$game->id, 'state'=> 'AVALIABLE'])->first();

        $method = $request->method;

        $user = $request->user();

        return view('payment', compact('user','game','rechargeType','recharge', 'method'));
    }

    function buyRecharge(Request $request)
    {

        $user = $request->user();

        $validation = Validator::make($request->all(), [
            'phone' => 'required|min:9|max:9',
            'rechargeType' => 'required'
        ], $messages = [
            'min'   => 'Numero de telefone invalido',
            'max'   => 'Numero de telefone invalido'
        ]);

        if($validation->fails()){
            $errors = $validation->errors();
            $message = '';
            //Check and get the first error of the field "title"
            if ($errors->has('phone')) {
                $message .= $errors->first('phone');
            }

            //Check and get the first error of the field "body"
            if ($errors->has('rechargeType')) {
                $message .= "\n".$errors->first('rechargeType');
            }


            Toastr()->error("Erro ao cadatrar dados", $message);
            return back();
        }

        $phone = $request->phone;
        $recharge_type = RechargeType::find($request->rechargeType)->first();
        $amount = (string) $recharge_type->price;

        $token = $this->requestToken();

        $recharge = Recharge::where(['user_id'=> null, 'recharge_type_id'=> $request->rechargeType])->first();

        if(!$recharge)
        {
            return back()->withErrors('status',"Recargas Esgotadas");
        }

        $res = $this->requestPayment($amount, $phone ,"recharge", $token);
        
        if($res->success)
        {
            
            $recharge->user_id = $user->id;

            $recharge->save();

            Toastr::success('Recarga comprada com sucesso.');
            return redirect(route('purchased.recharge', ['recharge'=> $recharge->id]));
        }

        Toastr::error('Ocorreu um erro ao comprar a recarga');
        return back();


    }


    function requestToken()
    {
        $curl = curl_init();

        $data = [
            "grant_type"=> "client_credentials",
            "client_id"=> $this->client_id,
            "client_secret"=> $this->client_secret
        ];
        
        $data = json_encode($data);

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://e2payments.explicador.co.mz/oauth/token',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>$data,
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $res = json_decode($response);

        return $res->access_token;
    }


    function requestPayment($amount, $phone, $ref, $token)
    {
        $data = [
            "client_id"=> $this->client_id,
            "amount"=> $amount,
            "phone"=> $phone,
            "reference"=> $ref
        ];

        $data = json_encode($data);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://e2payments.explicador.co.mz/v1/c2b/mpesa-payment/'.$this->wallet_mpesa,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>$data,
            CURLOPT_HTTPHEADER => array(
              "Accept: application/json",
              'Content-Type: application/json',
              'Authorization: Bearer '. $token
            ),
          ));
          
          $response = curl_exec($curl);
          
          curl_close($curl);

          return json_decode($response);

    }


    function purchasedRecharge(Request $request, $recharge)
    {   
        $user = $request->user();

        $recharge = Recharge::where(['id'=>$recharge, 'user_id'=>$user->id])->first();

        return view('client.purchased', compact('recharge', 'user'));
    }
}
