<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Recharge;
use App\Models\RechargeType;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Ramsey\Uuid\Nonstandard\Uuid;

class GameController extends Controller
{
    private $game;

    function __construct(Game $game)
    {
        $this->game = $game;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.games.game-list');
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
        $validation = Validator::make($request->all(), [
            'name' => 'required|unique:games,name',
            'image' => 'required|mimes:jpg,jpeg,png|max:3048'
        ], $messages = [
            'mimes' => 'Formato de imagem invalido',
            'max'   => 'Tamanho de imagem invalido a imagem deve ter menos de 3 MB'
        ]);

        if($validation->fails()){
            $errors = $validation->errors();
            $message = '';
            //Check and get the first error of the field "title"
            if ($errors->has('name')) {
                $message .= $errors->first('name');
            }

            //Check and get the first error of the field "body"
            if ($errors->has('image')) {
                $message .= "\n".$errors->first('image');
            }


            Toastr()->error("kdgnkdfjgnkd", "Erro ao cadatrar dados");
            return back();
        }

        if ($request->hasFile('image')) {
            $newFileName = Uuid::uuid1();

            $image      = $request->file('image');
            $fileName   = $newFileName."_cover" . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->stream(); // <-- Key point

            Storage::disk('local')->put("public/images/games/$newFileName".'/'.$fileName, $img, 'public');
        }

        $game = $this->game;
        $game->name = trim($request->name);
        $game->image = $newFileName."/".$fileName;
        $game->description = trim($request->description);
        $game->produced_by = trim($request->produced_by);
        $game->save();

        Toastr::success("Jogo Cadastrado com sucesso");
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game, Request $request)
    {
        $user = $request->user();

        return view('admin.pages.games.details', compact('user', 'game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'game' => 'required',
            'name' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:3048'
        ], $messages = [
            'mimes' => 'Formato de imagem invalido',
            'max'   => 'Tamanho de imagem invalido a imagem deve ter menos de 3 MB'
        ]);

        if($validation->fails()){
            $errors = $validation->errors();
            $message = '';
            //Check and get the first error of the field "title"
            if ($errors->has('name')) {
                $message .= $errors->first('name');
            }

            //Check and get the first error of the field "body"
            if ($errors->has('image')) {
                $message .= "\n".$errors->first('image');
            }


            Toastr()->error("Erro ao atualizar jogo", $message);
            return back();
        }

        $game = $this->game->find($request->game);

        if ($request->hasFile('image')) {
            $newFileName = Uuid::uuid1();
            $path = explode("/", $game->image)[0];
            $image      = $request->file('image');
            $fileName   = $newFileName."_cover" . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->stream(); // <-- Key point

            Storage::disk('local')->put("public/images/games/$path".'/'.$fileName, $img, 'public');
        }

        $game->name = trim($request->name);
        $game->image = $request->hasFile('image') ? $path."/".$fileName : $game->image;
        $game->description = trim($request->description);
        $game->produced_by = trim($request->produced_by);
        $game->save();

        Toastr::success("Jogo Atualizado com sucesso");
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id = Crypt::decrypt($id);

        $game = $this->game->find($id);

        $recharge_type = RechargeType::where('game_id', "=", $game->id)->count();
        $recharge = Recharge::where('game_id', "=", $game->id)->count();

        if($recharge_type > 0) {
             Toastr()->warning("O jogo nao pode ser removido pois exitem tipos de recargas associadas");
             return back();
        }

        if($recharge > 0) {

            Toastr()->warning("O jogo nao pode ser removido pois exitem recargas associadas");
            return back();
        }

        $game->delete();

        return Toastr()->success('Jogo removido com sucesso');

    }
}
