<?php

namespace App\Http\Controllers;

use App\Models\Recharge;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RechargeController extends Controller
{

    private $recharge;

    function __construct(Recharge $recharge)
    {
        $this->recharge = $recharge;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'game_id' => 'required',
            'recharge_type_id' => 'required',
            'code' => 'required',
        ]);

        if ($validation->fails()){
            $errors = $validation->errors();
            $message = '';
            //Check and get the first error of the field "title"
            if ($errors->has('code')) {
                $message .= $errors->first('code');
            }

            //Check and get the first error of the field "body"
            if ($errors->has('game_id')) {
                $message .= "\n".$errors->first('game_id');
            }


            Toastr()->error("$message", "Erro ao cadatrar dados");
            return back();
        }


        $recharge = $this->recharge;
        $recharge->game_id = $request->game_id;
        $recharge->recharge_type_id = $request->recharge_type_id;
        $recharge->code = trim($request->code);
        $recharge->description = $request->description;
        $recharge->save();

        Toastr::success("Recarga Criada com sucesso");
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Recharge $recharge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recharge $recharge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recharge $recharge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recharge $recharge)
    {
        //
    }
}
