<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function home()
    {
        return view('home');
    }

    function details()
    {
        return view('details');
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

}
