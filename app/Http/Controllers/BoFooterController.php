<?php

namespace App\Http\Controllers;

use App\Models\FooterCopy;
use App\Models\FooterIcon;
use App\Models\HeaderLink;
use App\Models\HeaderTitle;
use Illuminate\Http\Request;

class BoFooterController extends Controller
{
    public function index(){
        // Header
        $headerTitle = HeaderTitle::all();
        $headerLinks = HeaderLink::all();
        // Footer
        $footerCopy = FooterCopy::all();
        $footerIcons = FooterIcon::all();

        return view('backoffice/pages/boFooter', compact('headerTitle', 'headerLinks', 'footerCopy', 'footerIcons'));
    }

    public function store(Request $request){
        $store = new FooterIcon;

        $store->name = $request->name;
        $store->class = $request->class;

        $store->save();
        return redirect()->back();
    }
}
