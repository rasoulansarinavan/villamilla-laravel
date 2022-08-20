<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

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
}
