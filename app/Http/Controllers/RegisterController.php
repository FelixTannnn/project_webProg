<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required','min:5'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password'=>['required', 'min:6', 'alpha_num','confirmed'],
            'password_confirmation'=> ['required']

        ]);
            
         $validatedData['password'] = Hash::make($validatedData['password']);
         User::create($validatedData);
        // $request->session()->flash('success', 'Registration Succesfull ! Please login');
         return redirect('/login')->with('success', 'Registration Succesfull ! Please login');
    }
}
