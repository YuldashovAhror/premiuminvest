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

        if(session()->get('locale') == ''){
            session()->put('locale', 'ru');
            app()->setLocale('ru');
        }else{
            app()->setLocale(session()->get('locale'));
        }  
        $lang = session()->get('locale');
        return view('front.news-single', ['news'=>$news, 'all_news'=>$all_news, 'count'=>$count, 'lang'=>$lang]);
    }
}
