<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Config;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $companyInfo = json_decode((Config::where('name','baseConfig')->first())->config,true);
        $webSiteInfo = json_decode((Config::where('name','siteConfig')->first())->config,true);
        View::share('webName',$webSiteInfo['webName']);        //网站名称
        View::share('webKeyword',$webSiteInfo['webKeyword']);   //网站关键字
        View::share('webDesc',$webSiteInfo['webDesc']);         //网站描述
        View::share('baseCompanyName',$companyInfo['baseCompanyName']);    //公司名字
        View::share('baseCompanyAddr',$companyInfo['baseCompanyAddr']);    //公司地址
        View::share('baseCompanyEmail',$companyInfo['baseCompanyEmail']);    //公司邮箱
        View::share('baseCompanyTel',$companyInfo['baseCompanyTel']);    //公司电话
        View::share('baseCompanyNum',$companyInfo['baseCompanyNum']);    //公司备案号
        Schema::defaultStringLength(191);
    }
}
