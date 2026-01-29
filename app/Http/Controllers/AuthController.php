<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class AuthController extends Controller
{
    public function auth_control(Request $minta) {

        $minta->validate([
            'nama' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min_digits:8',
        ]);

        User::create([
            'nama' => $minta->nama,
            'email' => $minta->email,
            'password' => $minta->password,
        ]);

        return redirect()
            ->route('users.index');
    }

}
