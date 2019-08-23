<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

/*
 * 网站配置模型
 * */
class Config extends Model
{
    public $timestamps=true;
    protected $fillable=['title','name','config'];

    //网站配置验证信息
    protected $doSiteConfigVildateMes=[
        'rules'=>[
            'webName'=>'required',
            'webDomain'=>'required|url',
            'webKeyword'=>'required',
            'webDesc'=>'required',
        ],
        'message'=>[
            'webName.required'=>'网站名称不能为空',
            'webDomain.required'=>'网站域名不能为空',
            'webDomain.url'=>'网站域名不合法',
            'webDesc.required'=>'网站描述不能为空',
            'webKeyword.required'=>'网站关键字不能为空',

        ]
    ];

    //基础配置验证信息
    protected $doBaseConfigVildateMes=[
        'rules'=>[
            'baseCompanyName'=>'required',
            'baseCompanyAddr'=>'required',
            'baseCompanyTel'=>'required',
            'baseCompanyNum'=>'required',
        ],
        'message'=>[
            'baseCompanyName.required'=>'公司名称不能为空',
            'baseCompanyAddr.required'=>'公司地址不能为空',
            'baseCompanyTel.required'=>'公司热线不能为空',
            'baseCompanyNum.required'=>'公司备案号不能为空',
        ]
    ];

    /*
     * 添加或者更新网站配置信息验证
     * */
    public function doSiteConfigVildate($data){
        $val = Validator::make(json_decode($data,true),$this->doSiteConfigVildateMes['rules'],$this->doSiteConfigVildateMes['message']);
        if($val->passes()){
             return 1;
        }else{
           return $val->errors()->all();
        }
    }

   /*
    * 添加或者更新网站配置信息
    *
    * */
    public function doSiteConfig($baseInfo,$configParams){
        $validateRes=$this->doSiteConfigVildate($configParams);
        if($validateRes ==1){
            $info = $this->where('name','=',$baseInfo['name'])->first();
            //有数据就表示需要更新操作，没有就写入
            if($info){
                $info->config=$configParams;
                return $info->save();
            }else{
                $this->name=$baseInfo['name'];
                $this->title=$baseInfo['title'];
                $this->config=$configParams;
                return $this->save();
            }
        }else{
                session()->flash('doConfigValidateErr',$validateRes);
                return 0;
        }
    }


    /*
   * 添加或者更新基础配置信息验证
   * */
    public function doBaseConfigVildate($data){
        $val = Validator::make(json_decode($data,true),$this->doBaseConfigVildateMes['rules'],$this->doBaseConfigVildateMes['message']);
        if($val->passes()){
            return 1;
        }else{
            return $val->errors()->all();
        }
    }

    /*
    * 添加或者更新基础配置信息
    *
    * */
    public function doBaseConfig($baseInfo,$configParams){
        $validateRes=$this->doBaseConfigVildate($configParams);
        if($validateRes ==1){
            $info = $this->where('name','=',$baseInfo['name'])->first();
            //有数据就表示需要更新操作，没有就写入
            if($info){
                $info->config=$configParams;
                return $info->save();
            }else{
                $this->name=$baseInfo['name'];
                $this->title=$baseInfo['title'];
                $this->config=$configParams;
                return $this->save();
            }
        }else{
            session()->flash('doConfigValidateErr',$validateRes);
            return 0;
        }
    }
}
