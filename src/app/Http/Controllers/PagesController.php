<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        // $title = 'Welcome to Laravel aaaa';
        // return view('pages.index')->with('title', $title);
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        $data = [
            'title' => 'Services page',
            'services' => ['Web Design', 'SEO', 'App Development']
        ];


        return view('pages.services', $data);
    }
}
