<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('admin.admin_register');
    }

    public function store (){
        $validate = request()->validate([
            'name' => 'required',
            'email' => 'email|unique:users,email',
            'password' => 'required',
        ]);

        User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password'])
        ]);

        return redirect()->route('dashboard')->with('success', "welcome, you have successfully registered");
    }



    public function login(){
        return view('admin.admin_login');
    }

    public function valid(){
        $validate = request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($validate)){
          request()->session()->regenerate();

          return redirect()->route('dashboard')->with('success', "welcome, you have successfully logged in");
        } else{
            return redirect()->route('login')->withErrors([
                'email' => 'No matching user found with the provided email and password']);
        }
    }


    public function logout(){
        Auth::logout();

        request()->session()->regenerateToken();
        request()->session()->invalidate();

        return redirect()->route('login')->with('success', "you have successfully logout");
    }
    }