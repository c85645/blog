<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    // 登入頁
    public function showLoginForm()
    {
        // dd(bcrypt('1234'));
        return view('auth.login');
    }

    // 登入
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

    // 登出並導頁
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }

    // 註冊頁面
    public function showRegistrationForm()
    {
        return view('auth.regist');
    }

    // 註冊
    public function createUser()
    {
        $name = request()->input('name');
        $email = request()->input('email');
        $password = request()->input('password');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        Auth::attempt([
            'email' => $email,
            'password' => $password
        ]);

        return redirect()->to('/task');
    }
}
