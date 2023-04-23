<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function admin(Request $request)
    {
        $user = $request->user();

        return view('admin.home', compact('user'));
    }

    function recharge(Request $request)
    {
        $user = $request->user();
        return view('admin.pages.recargas.create-recharge', compact('user'));
    }

    function rechargeTypes(Request $request)
    {
        $user = $request->user();
        return view('admin.pages.recargas.create-rechargeType', compact('user'));
    }

    function listRecharge(Request $request)
    {
        $user = $request->user();
        return view('admin.pages.recargas.recharge-list', compact('user'));
    }

    function listGames(Request $request)
    {
        $user = $request->user();
        return view('admin.pages.games.game-list', compact('user'));
    }

    function createGame(Request $request)
    {
        $user = $request->user();
        return view('admin.pages.games.create-game', compact('user'));
    }

    function loginPage(Request $request)
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

        return view('admin.pages.authentication.basic-login');
    }
}
