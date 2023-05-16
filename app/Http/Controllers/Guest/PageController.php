<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        $comics = Comic::all();
        $navbarLinks = config('navbar');
        $footerLinks = config('footer');
        $icons = config('icons');
        $buyComicsLinks = config('links');

        $data = [
            'comics' => $comics,
            'navbarLinks' => $navbarLinks,
            'footerLinks' => $footerLinks,
            'icons' => $icons,
            'buyComicsLinks' => $buyComicsLinks
        ];

        return view('home', compact('data'));
    }
}
