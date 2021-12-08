<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()==true)
        {
            return view(view: 'dashboard');
        }
        return redirect()->route (route: 'login');
    }
    public function showLoginform()
    {
        return view(view: 'formLogin');
    }

}

