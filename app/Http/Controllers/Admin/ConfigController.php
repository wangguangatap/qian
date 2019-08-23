<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Config;
/*
 * 网站配置控制器
 * */
class ConfigController extends Controller
{
    /*
     * 网站配置页面
     * url: admin/config/site
     * method: get
     * */
    public function site(){
        $data=Config::where('name','siteConfig')->first();
        $siteConfigData=[];
        if($data){
            $siteConfigData = json_decode($data->config,true);
        }
        return view('admin.config.site')->with('siteConfigData',$siteConfigData);
    }

    /*
     * 基础配置页面
     * url: admin/config/base
     * method: get
     * */
    public function base(){
        $data=Config::where('name','baseConfig')->first();
        $baseConfigData=[];
        if($data){
            $baseConfigData = json_decode($data->config,true);
        }
        return view('admin.config.base')->with('baseConfigData',$baseConfigData);
    }

    /*
     * 添加网站配置动作
     * url: /admin/config/store
     * method: post
     * */
    public function siteStore(Request $request){
        if($request->isMethod('post')){
            $model =new Config();
            $baseInfo = $request->only(['title','name']);
            $configParams = json_encode($request->except(['title','name','_token']));
            $info=$model->doSiteConfig($baseInfo,$configParams);
            if($info > 0 || $info===true){
                session()->flash('data',['class'=>'success','msg'=>'更新成功!']);
            }else{
                session()->flash('data',['class'=>'danger','msg'=>'更新失败!']);
            }
            return redirect(url('admin/config/site'));
        }
    }

    /*
     * 添加基础配置动作
     * */
    public function baseStore(Request $request){
        if($request->isMethod('post')){
            $model =new Config();
            $baseInfo = $request->only(['title','name']);
            $configParams = json_encode($request->except(['title','name','_token']));
            $info=$model->doBaseConfig($baseInfo,$configParams);
            if($info > 0 || $info===true){
                session()->flash('data',['class'=>'success','msg'=>'更新成功!']);
            }else{
                session()->flash('data',['class'=>'danger','msg'=>'更新失败!']);
            }
            return redirect(url('admin/config/base'));
        }
    }

}
