<?php

namespace App\Http\Controllers;

use App\Models\HeaderLink;
use App\Models\HeaderTitle;
use App\Models\Home1;
use App\Models\Home1Link;
use App\Models\HomeButton;
use Illuminate\Http\Request;

class BoHome1Controller extends Controller
{
    public function index(){
        // Home 1
        $home1content = Home1::all();
        $home1Links = Home1Link::all();
        $homeButtons = HomeButton::all();

        // Header
        $headerTitle = HeaderTitle::all();
        $headerLinks = HeaderLink::all();

        return view('backoffice/pages/boHome1', compact('home1content', 'home1Links', 'homeButtons', 'headerTitle', 'headerLinks'));
    }

    
}