<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($id){
        $news = News::find($id);
        $all_news = News::all();
        $count = 0;
        return view('front.news-single', ['news'=>$news, 'all_news'=>$all_news, 'count'=>$count]);
    }
}
