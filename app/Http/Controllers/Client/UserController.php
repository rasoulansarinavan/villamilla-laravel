<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function LoginForm()
    {
        return view('client.auth.login');
    }

    public function RegisterForm()
    {
        return view('client.auth.register');
    }

    public function RegisterStore(RegisterRequest $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $mobile = $request->get('mobile');
        $password = bcrypt($request->get('password'));

        $user = User::query()->create([
            'name' => $name,
            'mobile' => $mobile,
            'email' => $email,
            'password' => $password
        ]);
        auth()->login($user);

        return redirect('/');
    }

    public function LoginStore(Request $request)
    {
        $user = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($user)) {
            return redirect()->route('user.home');
        } else {
            return redirect()->back()->with('error', 'نام کاربری یا رمز عبور اشتباه است');
        }
    }
}
