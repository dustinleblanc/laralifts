<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('user.profile', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }
}
