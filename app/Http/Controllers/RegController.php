<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function index()
    {

        return view('registro');

        // return redirect()->route('register');
    }
    public function registro(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'email|required',
            'password'=>'min:8|required',
            'password_confirmation'=>'required_with:password|same:password'
        ]);
        $request['password']=Hash::make($request['password']);
        User::create($request->all());

        return redirect()->route('menu');
    }
}
