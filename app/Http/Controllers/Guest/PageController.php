<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        $navbarLinks = config('navbar');
        $footerLinks = config('footer');
        $icons = config('icons');
        $buyComicsLinks = config('links');

        return view('home', compact('navbarLinks', 'footerLinks', 'icons', 'buyComicsLinks'));
    }
}
