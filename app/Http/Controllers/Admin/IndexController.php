<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/*
 * 后台框架控制器
 */
class IndexController extends Controller
{
    /*
     * 后台首页
     * */
    public function index(){
        return view('admin.index.index');
    }

    public function imgupload(Request $request){
        $info = [
            'code'=>200,
            "url"=>''
        ];
        if($request->file("file")){
            $info['url'] = asset('uploads').'/'.$request->file("file")->store("img");
        }else{
            $info['code']=400;
        }
        return $info;
    }


}
