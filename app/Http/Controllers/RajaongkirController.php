<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RajaongkirController extends Controller
{
    public function index() {
        return view('rajaongkir.index');
    }
}
