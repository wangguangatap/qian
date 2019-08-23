<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Config;
use App\Banner;

/*
 * 前台产品详情
 * */
class ArticleController extends Controller
{
    public function index(Article $article){
        $banner = Banner::where('flag',2)->where('isshow',1)->first();
        return view('home.article.index')
            ->with('article',$article)
            ->with('banner',$banner);
    }

    public function list(){
        $article = Article::OrderBy('created_at','desc')->paginate(6);;
        return view('home.article.list')
            ->with('article',$article);

    }


}
