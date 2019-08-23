<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class Manager extends Model
{
    //
    public $timestamps=true;
    protected $validateManagerMsg =[
        'rules'=>[
            'username'=>'required|between:8,20',
            'password'=>'required|between:8,20',
            'repassword'=>'same:password',
            'email'=>'email',
            'tel'=>'required'
        ],
        'message'=>[
            'username.required'=>'用户名不能为空',
            'password.required'=>'密码不能为空',
            'username.between'=>'用户名必须为8-20个字符',
            'password.between'=>'密码必须为8-20个字符',
            'repassword.same'=>'两次输入的密码不一致',
            'email.email'=>'邮箱格式不正确',
            'tel.required'=>'手机号码不能为空'
        ]
    ];

    public function validateManager($data){
        $vail = Validator::make($data,$this->validateManagerMsg['rules'],$this->validateManagerMsg['message']);
        if($vail->passes()){
            return 1;
        }else{
            return $vail->errors()->all();
        }
    }
    public function createManager($data){
        $info = $this->validateManager($data);
        if($info==1){
            $this->username=$data['username'];
            $this->password=Crypt::encrypt($data['password']);
            $this->tel=$data['tel'];
            $this->email=$data['email'];
            $this->status=$data['status'];
            if($this->save()){
                session()->flash('data',['class'=>'success','msg'=>'添加管理员成功!']);
                return 1;
            }else{
                session()->flash('data',['class'=>'success','msg'=>'添加管理员失败!']);
                return 2;
            }
        }else{
            session()->flash('doConfigValidateErr',$info);
            return 0;
        }
    }
}
