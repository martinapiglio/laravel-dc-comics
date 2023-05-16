<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        $comics = config('comics');
        $navbarLinks = config('navbar');
        $footerLinks = config('footer');
        $icons = config('icons');

        $data = [
            'comics' => $comics,
            'navbarLinks' => $navbarLinks,
            'footerLinks' => $footerLinks,
            'icons' => $icons
        ];

        return view('home', compact('data'));
    }
}
