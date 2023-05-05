<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\RechargeType;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Ramsey\Uuid\Nonstandard\Uuid;

class RechargeTypeController extends Controller
{
    private $rechargeType;

    function __construct(RechargeType $rechargeType)
    {
        $this->rechargeType = $rechargeType;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rechargeTypes = RechargeType::all();
        $user = $request->user();
        return view('admin.pages.recargas.rechargeType-list', compact('rechargeTypes', 'user'));
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
            'title' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|mimes:jpg,jpeg,png|max:3048'
        ], $messages = [
            'mimes' => 'Formato de imagem invalido',
            'max'   => 'Tamanho de imagem invalido a imagem deve ter menos de 3 MB'
        ]);

        if ($validation->fails()){
            $errors = $validation->errors();
            $message = '';
            //Check and get the first error of the field "title"
            if ($errors->has('title')) {
                $message .= $errors->first('title');
            }

            //Check and get the first error of the field "body"
            if ($errors->has('price')) {
                $message .= "\n".$errors->first('price');
            }


            Toastr()->error("kdgnkdfjgnkd", "Erro ao cadatrar dados");
            return back();
        }

        if($request->promotion == "true"){
            if($request->start_date == null || $request->end_date == null)
            {
                Toastr::warning("Data de inicio e fim da promocao invalida");
                return back();
            }
        }

        if ($request->hasFile('image')) {

            $game = Game::find($request->game_id);

            $path = explode("/", $game->image)[0];

            $newFileName = Uuid::uuid1();

            $image      = $request->file('image');
            $fileName   = $newFileName."_type" . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->stream(); // <-- Key point

            Storage::disk('local')->put("public/images/games/$path".'/'.$fileName, $img, 'public');
        }

        $rechargeType = $this->rechargeType;
        $rechargeType->title = $request->title;
        $rechargeType->game_id = $request->game_id;
        $rechargeType->price = $request->price;
        $rechargeType->description = $request->description;
        $rechargeType->promotion = $request->promotion=='true' ? true : false;
        $rechargeType->start_date = date('Y-m-d H:i:s', strtotime($request->start_date));
        $rechargeType->end_date = date('Y-m-d H:i:s', strtotime($request->end_date));
        $rechargeType->image = $path."/".$fileName;
        $rechargeType->save();

        Toastr::success("Tipo de Recarga Criada com sucesso");
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(RechargeType $rechargeType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'title' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|mimes:jpg,jpeg,png|max:3048'
        ], $messages = [
            'mimes' => 'Formato de imagem invalido',
            'max'   => 'Tamanho de imagem invalido a imagem deve ter menos de 3 MB'
        ]);

        if ($validation->fails()){
            $errors = $validation->errors();
            $message = '';
            //Check and get the first error of the field "title"
            if ($errors->has('title')) {
                $message .= $errors->first('title');
            }

            //Check and get the first error of the field "body"
            if ($errors->has('price')) {
                $message .= "\n".$errors->first('price');
            }


            Toastr()->error("kdgnkdfjgnkd", "Erro ao cadatrar dados");
            return back();
        }

        if($request->promotion == "true"){
            if($request->start_date == null || $request->end_date == null)
            {
                Toastr::warning("Data de inicio e fim da promocao invalida");
                return back();
            }
        }

        if ($request->hasFile('image')) {

            $game = Game::find($request->game_id);

            $path = explode("/", $game->image)[0];

            $newFileName = Uuid::uuid1();

            $image      = $request->file('image');
            $fileName   = $newFileName."_type" . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->stream(); // <-- Key point

            Storage::disk('local')->put("public/images/games/$path".'/'.$fileName, $img, 'public');
        }

        $rechargeType = $this->rechargeType;
        $rechargeType->title = $request->title;
        $rechargeType->game_id = $request->game_id;
        $rechargeType->price = $request->price;
        $rechargeType->description = $request->description;
        $rechargeType->promotion = $request->promotion=='true' ? true : false;
        $rechargeType->start_date = $request->start_date;
        $rechargeType->end_date = $request->end_date;
        $rechargeType->image = $path."/".$fileName;
        $rechargeType->save();

        Toastr::success("Tipo de Recarga Criada com sucesso");
        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($rchtype)
    {
        dd($rchtype);
        $games = Game::all();
        $user = Request::user();
        return view('admin.pages.recargas.create-rechargeType', compact('user', 'games', 'rechargeType'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id = Crypt::decrypt($id);

        $rechargeType = $this->rechargeType->find($id);

        $rechargeTypeCount = $this->rechargeType::where(['id' => $id, 'user_id'=>null])->count();

        if($rechargeTypeCount)
        {
            $rechargeType->delete();
            return Toastr()->success('Recarga removida com sucesso.');
        }else{
            return Toastr()->warning('Nao foi possivel remover o tipo de recarga pois existem recargas associadas');
        }

    }
}
