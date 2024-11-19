<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensagersController extends Controller
{
    public function index()
    {
        return view('mensagers.contatos');
    }
}
