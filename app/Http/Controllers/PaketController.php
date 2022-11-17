<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function paket()
    {
        return view('paket', [
            'title' => 'Paket | WisataKuy'
        ]);
    }
}
