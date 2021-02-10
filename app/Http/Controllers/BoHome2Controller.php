<?php

namespace App\Http\Controllers;

use App\Models\HeaderLink;
use App\Models\HeaderTitle;
use App\Models\Home2;
use App\Models\Home2Link;
use Illuminate\Http\Request;

class BoHome2Controller extends Controller
{
    public function index(){
        // Header
        $headerTitle = HeaderTitle::all();
        $headerLinks = HeaderLink::all();

        //  Home 2
        $home2content = Home2::all();
        $home2Links = Home2Link::all();

        return view('backoffice/pages/boHome2', compact('headerTitle', 'headerLinks', 'home2content', 'home2Links'));
    }

    public function store(Request $request){
        $store = new Home2Link;

        $store->icon = $request->icon;
        $store->link = $request->link;

        $store->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Home2Link::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
