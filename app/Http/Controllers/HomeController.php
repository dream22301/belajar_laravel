<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $name = "Saya billy";
        $angka = 1 + 2;
        $text = $name . " dan " . $angka;
        return view('home', compact('name', 'angka', 'text'));
    }
}
