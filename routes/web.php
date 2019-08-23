<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//后台路由
Route::get('admin/login','Admin\LoginController@login');                              //管理员登陆
Route::post('admin/login/dologin','Admin\LoginController@dologin');                   //管理员登陆动作
Route::get('admin/logout','Admin\LoginController@logout');                            //登出

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['loginverify']],function(){
    Route::get('/','IndexController@index');                               //后台首页
    Route::get('config/site','ConfigController@site');                     //基础配置页面
    Route::get('config/base','ConfigController@base');                     //基础配置页面
    Route::post('config/sitestore','ConfigController@siteStore');          //添加网站配置动作
    Route::post('config/basestore','ConfigController@baseStore');          //添加基本配置动作
    Route::resource('article','ArticleController')->except('destroy');     //文章路由
    Route::get('article/{article}/del','ArticleController@destroy');       //删除文章
    Route::resource('about','AboutController')->except('destroy');         //关于我们路由
    Route::get('about/{about}/del','AboutController@destroy');             //删除关于我们
    Route::post('upload','IndexController@imgupload');                     //图片上传
    Route::resource('category','CategoryController')->except('destroy');   //分类
    Route::get('category/{category}/del','CategoryController@destroy');    //删除产品
    Route::resource('product','ProductController')->except('destroy');     //产品
    Route::get('product/{product}/del','ProductController@destroy');       //删除产品
    Route::resource('designer','DesignerController')->except('destroy');   //设计师
    Route::get('designer/{designer}/del','DesignerController@destroy');    //删除设计师
    Route::resource('banner','BannerController')->except('destroy');       //轮播图
    Route::get('banner/{banner}/del','BannerController@destroy');          //删除设计师
    Route::resource('manager','ManagerController')->except('destroy');     //管理员
    Route::get('manager/{manager}/del','ManagerController@destroy');       //管理员删除
    Route::get('offer','OfferController@index');                           //报价列表
    Route::get('offer/{offer}/del','OfferController@destroy');             //删除报价
    Route::post('contact/add','ContactController@index');                  //联系我们列表
    Route::get('contact/{contact}/del','ContactController@destroy');       //删除报价
    Route::get('contact','ContactController@list');

});

/*
 * 前端路由
 * */
Route::get('/','Home\IndexController@index');
Route::group(['prefix'=>'home','namespace'=>'Home'],function(){
    Route::get('/','IndexController@index');                               //首页路由
    Route::get('about','AboutController@index');                           //关于我们
    Route::get('product/{category}/list','ProductController@list');        //列表
    Route::get('product/{product}/show','ProductController@show');        //产品详情
    Route::get('article','ArticleController@list');            //文章详情页
    Route::get('article/{article}','ArticleController@index');            //文章详情页
    Route::get('category/index','CategoryController@index');               //分类列表
    Route::get('contact','ContactusController@index');                  //联系我们
    Route::post('offer/add','OfferController@index');                   //报价添加
    Route::post('search','SearchController@index');                     //搜索
});
