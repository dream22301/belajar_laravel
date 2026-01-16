<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $aray = [
            "Andhika" => "Rp.50000",
            "Billy" => "Rp.20000",
        ];
        return view('home', compact('aray'));
    }
}
