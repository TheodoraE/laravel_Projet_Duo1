<?php

namespace App\Http\Controllers;

use App\Models\FooterCopy;
use App\Models\FooterIcon;
use App\Models\HeaderLink;
use App\Models\HeaderTitle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // Home
        // $homeData = Home::all();


        // Header
        $headerTitle = HeaderTitle::all();
        $headerLinks = HeaderLink::all();
        // Footer
        $footerCopy = FooterCopy::all();
        $footerIcons = FooterIcon::all();

        return view('welcome', compact('headerTitle', 'headerLinks', 'footerCopy', 'footerIcons'));
    }
}
