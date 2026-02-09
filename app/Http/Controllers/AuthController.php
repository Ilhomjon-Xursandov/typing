<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginReqest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
        ]);

        Auth::login($user);

        return redirect()->route('order.index')->with('success', 'Xush kelibsiz');
    }
    public function showLogin()
    {
        return view('auth.login');
    }
    public function login(LoginReqest $reqest)
    {
        $credentials = $reqest->validated();
        $remember = $reqest->boolean('remember');

        if (!Auth::attempt($credentials, $remember)){
            return back()->withErrors([
                'email'=>'Email yoki parol noto\'g\'iri',
            ])->onlyInput('email');
        }
        $reqest->session()->regenerate();

        return redirect()->intended(route('order.index'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Chiqildi');

    }
}
