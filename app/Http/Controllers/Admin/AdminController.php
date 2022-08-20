<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function LoginStore(Request $request)
    {
        $user = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($user)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->back()->with('error', 'نام کاربری یا رمز عبور اشتباه است');
        }
    }
}
