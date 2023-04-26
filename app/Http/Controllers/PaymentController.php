<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Recharge;
use App\Models\RechargeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PaymentController extends Controller
{
    function payment(Request $request)
    {

        $game = Crypt::decrypt($request->game);
        $rechargeType = Crypt::decrypt($request->rechargeType);

        $game = Game::find($game);
        $rechargeType = RechargeType::find($rechargeType);

        $recharge = Recharge::where(['recharge_type_id'=>$rechargeType->id, 'user_id'=>null, 'game_id'=>$game->id, 'state'=> 'AVALIABLE'])->first();

        $method = $request->method;

        return view('payment', compact('game','rechargeType','recharge', 'method'));
    }

    function buyRecharge(Request $request)
    {

    }

}
