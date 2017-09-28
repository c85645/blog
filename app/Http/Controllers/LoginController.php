<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // dd(bcrypt('1234'));
        return view('auth.login');
    }

    public function authenticate()
    {
        $email = request()->input('email');
        $password = request()->input('password');

        // dd(request()->input());
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->to('/task');
            // return 'loggin success';
        } else {
            return '失敗';
        }
    }

    public function logout()
    {
      Auth::logout();
      return redirect()->to('/login');
    }
}
