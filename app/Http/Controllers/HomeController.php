<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Seja bem-vindo!';
        return view('home.index', compact('title'));
    }
}
