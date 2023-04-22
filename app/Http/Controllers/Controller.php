<?php

namespace App\Http\Controllers;

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

    function login()
    {
        return view('client.login');
    }

    function signup()
    {
        return view('client.signup');
    }

    function admin()
    {
        return view('admin.home');
    }
}
