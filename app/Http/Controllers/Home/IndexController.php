<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Banner;
use App\Aboutus;
use App\Category;
use App\Article;
use App\Designer;
use App\Config;
/*
 * 首页控制器
 * */
class IndexController extends Controller
{
    public function index(){
        $banner = Banner::OrderBy('sort','asc')->where('flag',0)->where('isshow',1)->get();
        $about  = Aboutus::where('flag',0)->first();
        $service = Aboutus::where('flag',1)->first();
        $category = Category::OrderBy('sort','asc')->limit(3)->get();
        $article = Article::OrderBy('created_at','desc')->limit(3)->get();
        $design= Aboutus::where('flag',2)->first();
        $designer2 = Designer::where('id','<=',2)->get();
        $designer4 = Designer::where('id','>',2)->where('id','<=',6)->get();
        $designer4l = Designer::where('id','>',6)->where('id','<=',10)->get();

        return view('home.index.index')
            ->with('banner',$banner)
            ->with('about',$about)
            ->with('category',$category)
            ->with('service',$service)
            ->with('article',$article)
            ->with('design',$design)
            ->with('designer2',$designer2)
            ->with('designer4',$designer4)
            ->with('designer4l',$designer4l);
    }
}
