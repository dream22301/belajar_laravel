<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function kasih(Request $request) {
        
        $request->validate([
            'nama' => 'required|min:2|max:20'
            
        ]);

        return redirect()
        ->route('form')
        ->with('success', 'data sudah terkirim');
    }
}
