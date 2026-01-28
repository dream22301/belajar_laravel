<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function auth_control(Request $minta) {
        $nama = $minta->input('nama');
        $email = $minta->input('email');
        $pw = $minta->input('password');

        $list_pw = [
            '0916',
            '0186',
        ];

        $minta->validate([
            'nama' => 'required|min:5',
            'email' => 'required|email',
            'password' => [
                'required',
                Rule::in($list_pw)
            ],
        ]);



        return redirect()
            ->route('htua')
            ->with('bis', 'Sudah bisa e masuk');
    }

}
