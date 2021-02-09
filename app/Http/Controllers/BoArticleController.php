<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\HeaderLink;
use App\Models\HeaderTitle;
use Illuminate\Http\Request;

class BoArticleController extends Controller
{
    public function index(){
        // Article
        $articleData = Article::all();

        // Header
        $headerTitle = HeaderTitle::all();
        $headerLinks = HeaderLink::all();
        
        return view('backoffice/pages/boArticle', compact('articleData', 'headerTitle', 'headerLinks'));
    }
}
