<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('Frontend.index');
    }
    public function mentors()
    {
        return view('Frontend.mentors');
    }

    public function courses()
    {
        return view('Frontend.courses');
    }

}
