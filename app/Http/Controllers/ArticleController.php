<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\FooterCopy;
use App\Models\FooterIcon;
use App\Models\HeaderLink;
use App\Models\HeaderTitle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        // Article
        $articleData = Article::all();

        // Header
        $headerTitle = HeaderTitle::all();
        $headerLinks = HeaderLink::all();
        // Footer
        $footerCopy = FooterCopy::all();
        $footerIcons = FooterIcon::all();

        return view('pages.article', compact('articleData', 'headerTitle', 'headerLinks', 'footerCopy', 'footerIcons'));
    }
}
