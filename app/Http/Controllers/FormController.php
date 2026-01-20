<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function kasih(Request $request) {
        $nama = $request->input('nama');

        return $nama;
    }
}
