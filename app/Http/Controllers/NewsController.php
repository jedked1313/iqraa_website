<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;


class NewsController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view
    
        $news = News::all()->sortByDesc('title_ar');
        return view('news.news',compact('news'));
    }
}
