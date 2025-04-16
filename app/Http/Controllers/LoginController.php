<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    {
       
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == 'aya' && $password == 'ayaaya') {
            
            return redirect('/appointments');
        } elseif ($username == 'lama' && $password == 'lamalama') {
            
            return redirect('/approved-appointments');
        } else {

            return redirect()->route('login')->with('error', 'Invalid username or password.');
        }
    }

    public function logout()
    {
        Auth::logout();  
        return redirect()->route('login');     }
}