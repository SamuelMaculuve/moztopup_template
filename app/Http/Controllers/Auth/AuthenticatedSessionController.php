<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('client.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
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

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
