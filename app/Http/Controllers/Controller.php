<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Recharge;
use App\Models\RechargeType;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Crypt;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function home()
    {
        $games = Game::all();
        return view('home', compact('games'));
    }

    function details()
    {
        return view('details');
    }

    function details2($id)
    {
        $id = Crypt::decrypt($id);
        $game = Game::find($id);
        $rechargeTypes = RechargeType::where('game_id', $id)->get();

        return view('details2', compact('rechargeTypes', 'game'));
    }

    function pofile(Request $request) : View
    {
        $user = $request->user();
        return view('client.profile', compact('user'));
    }

    function login(Request $request)
    {
        if($request->user()){

            $permissions = $request->user()->permissions;
            $permissions = explode(",", $permissions);

            if(in_array('admin', $permissions) || in_array('viewer', $permissions) || in_array('creator', $permissions) || in_array('editor', $permissions) ||
            in_array('deletor', $permissions))
            {
                return redirect()->intended(RouteServiceProvider::ADMIN);
            }

            if(in_array('client', $permissions))
            {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }
        return view('client.login');
    }

    function signup()
    {
        return view('client.signup');
    }

    function payment()
    {
        return view('payment');
    }

}
