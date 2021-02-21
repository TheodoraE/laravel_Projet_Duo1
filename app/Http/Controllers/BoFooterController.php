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

    public function show($id)
    {
        $show = FooterIcon::find($id);
        $headerLinks = HeaderLink::all();
        return view('backoffice/pages/showFooter', compact('show', 'headerLinks'));
    }
    
    public function edit($id)
    {
        $edit = FooterIcon::find($id);
        $headerLinks = HeaderLink::all();
        return view('backoffice/pages/editFooter', compact('edit', 'headerLinks'));
    }

    public function update(Request $request, $id)
    {
        $update = FooterIcon::find($id);

        $update->icon = $request->icon;
        $update->link = $request->link;

        $update->save();
        return redirect('/show-linkFooter/'.$update->id);
    }

    public function destroy($id)
    {
        $destroy = FooterIcon::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}