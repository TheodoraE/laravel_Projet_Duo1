<?php

namespace App\Http\Controllers;

use App\Models\FooterCopy;
use App\Models\FooterIcon;
use App\Models\HeaderLink;
use App\Models\HeaderTitle;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        // Contact
        // $contactData = Contact::all();

        // Header
        $headerTitle = HeaderTitle::all();
        $headerLinks = HeaderLink::all();
        // Footer
        $footerCopy = FooterCopy::all();
        $footerIcons = FooterIcon::all();


        return view('pages.contact', compact('headerTitle', 'headerLinks', 'footerCopy', 'footerIcons'));
    }
}
