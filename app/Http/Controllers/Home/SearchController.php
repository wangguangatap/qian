<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Article;
use App\Banner;
/*
 * 搜索模块
 * */
class SearchController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('post')){
            $data= $request->all();
            if($data['searchName']==0 && $data['searchContent']){
                //取出服务案例
                $article=Article::where('title','like',"%{$data['searchContent']}%")->paginate(6);
                if($article->isEmpty()) {
                    return view('home.search.err');
                }
                return view('home.article.list')->with('article',$article);;
            }
            if($data['searchName']==1 && $data['searchContent']){
                $productTabNum =(integer) ceil((count(Product::where('title','like',"%{$data['searchContent']}%")->get()))/7);
                $product = Product::where('title','like',"%{$data['searchContent']}%")->get();
                $banner = Banner::where('flag',1)->where('isshow',1)->first();
                if($product->isEmpty()) {
                    return view('home.search.err');
                }
                return view('home.product.list')
                    ->with('banner',$banner)
                    ->with('productTabNum',$productTabNum)
                    ->with('product',$product);
            }
            return view('home.search.err');
        }
        return back();
    }

    public function searcherror(){
        return view('home.search.err');
    }
}
