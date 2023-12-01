<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        return redirect('/dashboard');
    }

    public function register(RegisterRequest $request)
    {
        return redirect('/dashboard');
    }
}
