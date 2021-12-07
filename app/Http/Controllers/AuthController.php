<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class AuthController extends Controller
{
    public function dashboard()
    {
/*         if (Auth::check()==true)
        {
            return view('home');
        }
        else
        {
            return redirect()->route ('login.post');
        } */
        return view('formLogin');

    }
    public function log(Request $request)
    {
        $request->validate
        ([
            'email'=>'email|required',
            'password'=>'required|min:8'
        ]);
        $info = $request->only('email','password');

        if(Auth::attempt($info))
        {
            return redirect()->route('menu');
        }
        else
        {
            return redirect()->route('login');
        }
    }



    public function showLoginform()
    {
        return view('formLogin');
    }

}

