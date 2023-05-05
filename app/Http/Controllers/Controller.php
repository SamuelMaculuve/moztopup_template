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

    function home(Request $request)
    {
        $user = null;
        if($request->user())
        {
            $user = $request->user();
        }

        $games = Game::all();
        $promotions = RechargeType::where(['promotion'=> true])->get();
        $promotions = collect($promotions)->unique('game_id');

        return view('home', compact('games', 'user', 'promotions'));
    }

    function details()
    {
        return view('details');
    }

    function details2(Request $request,$id)
    {
        $id = Crypt::decrypt($id);
        $game = Game::find($id);
        $user = $request->user();

        $rechargeTypes = RechargeType::where('game_id', $id)->get();

        $rechargeTypes = Recharge::where(['game_id'=> $id, 'user_id'=> null])->get();

        $rechargeTypes = collect($rechargeTypes)->unique('recharge_type_id');

        return view('details2', compact('user','rechargeTypes', 'game'));
    }

    function pofile(Request $request) : View
    {
        $user = $request->user();
        $recharges = Recharge::where('user_id', $user->id)->get();
        $own_recharges = Recharge::where('user_id', $user->id)->count();
        return view('client.profile', compact('user', 'recharges', 'own_recharges'));
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

    function signup(Request $request)
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

        return view('client.signup');
    }

    function verifyEmail(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }



        $email = $request->user()->email;
        return view('client.email-verify', compact('email'));
    }

    function resetPassword(Request $request)
    {

        return view('client.forgot-password');
    }

}
