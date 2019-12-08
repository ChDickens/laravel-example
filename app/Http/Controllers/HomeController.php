<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Домашняя';
        return view('post.index', compact('title'));
    }

    public function dashboard()
    {
        return view('back.dashboard');
    }
}
