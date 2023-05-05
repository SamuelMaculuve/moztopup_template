<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Recharge;
use App\Models\RechargeType;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function admin(Request $request)
    {
        $user = $request->user();

        $recentUsers = User::limit(4)->orderBy('id', 'DESC')->get();

        return view('admin.home', compact('user', 'recentUsers'));
    }

    function recharge(Request $request)
    {
        $games = Game::all();
        $rechargeTypes = RechargeType::all();
        $user = $request->user();
        return view('admin.pages.recargas.create-recharge', compact('user', 'games', 'rechargeTypes'));
    }

    function rechargeTypes(Request $request)
    {
        $games = Game::all();
        $user = $request->user();
        $rechargeType = null;
        return view('admin.pages.recargas.create-rechargeType', compact('user', 'games', 'rechargeType'));
    }

    function listRecharge(Request $request)
    {
        $recharges = Recharge::all();
        $games = Game::all();
        $rechargeTypes = RechargeType::all();
        $user = $request->user();

        return view('admin.pages.recargas.recharge-list', compact('user', 'recharges', 'games', 'rechargeTypes'));
    }

    function listGames(Request $request)
    {
        $games = Game::all();
        $user = $request->user();
        return view('admin.pages.games.game-list', compact('user', 'games'));
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

    function users(Request $request)
    {
        $users = User::all();
        $user = $request->user();
        return view('admin.pages.user.users', compact('user', 'users'));
    }

    function userProfile(Request $request)
    {
        $user = $request->user();
        return view('admin.pages.user.profile', compact('user'));
    }

    function changePermission(Request $request)
    {
        $permission = $request->permission;

        $user = User::find($request->user);

        $user->permissions = $permission;

        $user->save();

        Toastr::success('Permissao actualizada com sucesso para '. $user->name);

        return back();
    }
}
