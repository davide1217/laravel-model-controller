<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControlle extends Controller
{
    public function index() {
        return view('home')->name('home');
    }

    public function about() {
        return view('about')->name('chi siamo');
    }

    public function contacts() {
        return view('contacts')->name('contatti');
    }
}
