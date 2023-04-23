<?php

namespace App\Http\Controllers;

use App\Models\RechargeType;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDO;

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
            'title' => 'required',
            'price' => 'required|numeric',
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

        $rechargeType = $this->rechargeType;
        $rechargeType->title = $request->title;
        $rechargeType->game_id = $request->game_id;
        $rechargeType->price = $request->price;
        $rechargeType->description = $request->description;
        $rechargeType->promotion = $request->promotion=='true' ? true : false;
        $rechargeType->start_date = $request->start_date;
        $rechargeType->end_date = $request->end_date;
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
    public function edit(RechargeType $rechargeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RechargeType $rechargeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RechargeType $rechargeType)
    {
        //
    }
}
