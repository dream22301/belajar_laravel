<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function kasih(Request $request) {
        $nama = $request->input('nama');

        $request->validate([
            'nama' => 'required|min:2|max:20'
        ]);

        return view('form-submit', [
            'nama' => $request->nama
        ]);
    }
}
