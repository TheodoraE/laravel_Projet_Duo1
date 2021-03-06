<?php

namespace App\Http\Controllers;

use App\Models\FooterCopy;
use App\Models\FooterIcon;
use App\Models\HeaderLink;
use App\Models\HeaderTitle;
use App\Models\Home1;
use App\Models\Home1Link;
use App\Models\Home2;
use App\Models\Home2Link;
use App\Models\HomeButton;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // Home 1
        $home1content = Home1::all();
        $home1Links = Home1Link::all();
        $homeButtons = HomeButton::all();
        //  Home 2
        $home2content = Home2::all();
        $home2Links = Home2Link::all();

        // Header
        $headerTitle = HeaderTitle::all();
        $headerLinks = HeaderLink::all();
        // Footer
        $footerCopy = FooterCopy::all();
        $footerIcons = FooterIcon::all();

        return view('welcome', compact('home1content', 'home1Links', 'homeButtons', 'home2content', 'home2Links', 'headerTitle', 'headerLinks', 'footerCopy', 'footerIcons'));
    }
}
