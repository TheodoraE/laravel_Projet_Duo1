<?php

namespace App\Http\Controllers;

use App\Models\ContactButton;
use App\Models\ContactCard;
use App\Models\ContactForm;
use App\Models\ContactHead;
use App\Models\FooterCopy;
use App\Models\FooterIcon;
use App\Models\HeaderLink;
use App\Models\HeaderTitle;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        // Contact
        $contactHead = ContactHead::all();
        $contactCards = ContactCard::all();
        $contactForm = ContactForm::all();
        $contactButtons = ContactButton::all();

        // Header
        $headerTitle = HeaderTitle::all();
        $headerLinks = HeaderLink::all();
        // Footer
        $footerCopy = FooterCopy::all();
        $footerIcons = FooterIcon::all();


        return view('pages.contact', compact('contactHead', 'contactCards', 'contactForm', 'contactButtons', 'headerTitle', 'headerLinks', 'footerCopy', 'footerIcons'));
    }
}
