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

    public function edit($id)
    {
        $edit = Home2Link::find($id);
        $headerLinks = HeaderLink::all();
        return view('backoffice/pages/editHome2', compact('edit', 'headerLinks'));
    }

    public function update(Request $request, $id)
    {
        $update = Home2Link::find($id);

        $update->icon = $request->icon;
        $update->link = $request->link;

        $update->save();
        return redirect('/show-linkHome2/'.$update->id);
    }

    public function show($id)
    {
        $show = Home2Link::find($id);
        $headerLinks = HeaderLink::all();
        return view('backoffice/pages/showHome2', compact('show', 'headerLinks'));
    }

    public function destroy($id)
    {
        $destroy = Home2Link::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
