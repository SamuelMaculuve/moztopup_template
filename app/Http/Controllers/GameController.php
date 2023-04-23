<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

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
            'image' => 'required|file'
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

            Toastr::error("$message", "Erro ao cadatrar dados");
            return;
        }

        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $game = trim($request->name);
            $fileName   = $game."_cover" . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->stream(); // <-- Key point

            //dd();
            Storage::disk('local')->put("images/games/$game".'/'.$fileName, $img, 'public');
        }

        $game = $this->game;
        $game->name = trim($request->name);
        $game->image = $fileName;
        $game->description = trim($request->description);
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
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
