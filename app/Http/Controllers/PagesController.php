<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.welcome')
            ->with('title', 'About us ~ Tilde')
            ->with('class', 'class="active"');
    }
    public function consulting()
    {
        return view('pages.consulting')->with('title', 'Consulting ~ Tilde');
    }
    public function training()
    {
        return view('pages.training')->with('title', 'Training ~ Tilde');
    }
    public function contact()
    {
        return view('pages.contact')->withTitle('Contact ~ Tilde');
    }
}