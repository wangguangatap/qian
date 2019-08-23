<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Manager;

/*
 * 管理员登陆控制器
 * */
class LoginController extends Controller
{
    /*
     * 登陆页视图
     * */
    public function login(){
        return view('admin.login.login');
    }

    /*
     * 登陆处理
     * */
    public function dologin(Request $request){
        $username = $request->username;
        $password = $request->password;
        $result = Manager::where('username',$username)->first();
        if($result || (Crypt::decrypt($result->password))!=$password){
            session()->flash('data',['class'=>'danger','msg'=>'用户名或者密码不正确!']);
        }
        if($result->status==0){
            session()->flash('data',['class'=>'danger','msg'=>'账号已被锁定，请联系管理员']);
        }
        if($result && (Crypt::decrypt($result->password))==$password){
            session(['loginManagerInfo'=>$result]);
            $result->updated_at=date('Y-m-d H:i:s',time());
            $result->ip=$request->getClientIp();
            $result->save();
            return redirect('admin');
        }
        return back();
    }

    /*
     * 注销
     * */
    public function logout(){
        session(['loginManagerInfo'=>null]);
        return redirect('admin/login');
    }
}
