<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        // return view('pages.index', compact('title'));
        return view('pages.index');

    }

    public function men()
    {
        // return view('pages.about');
        return view('pages.men');
    }

    public function women()
    {
        // return view('pages.about');
        return view('pages.women');
    }

    public function contact()
    {
        // return view('pages.about');
        return view('pages.contact');
    }
}
