<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Product extends Model
{
    public $timestamps=true;


    protected $validateCreateProductMeg=[
        'rules'=>[
            'title'=>'required',
            'cid'=>'required',

        ],
        'message'=>[
            'title.required'=>'产品名不能为空',
            'cid.required'=>'所属分类没有数据请先添加分类',
        ]
    ];

    public function category(){
        return $this->belongsTo('App\Category','cid','id');
    }

    public function validateCreateProduct($data){
        $vali=Validator::make($data,$this->validateCreateProductMeg['rules'],$this->validateCreateProductMeg['message']);
        if($vali->passes()){
            return 1;
        }else{
            return $vali->errors()->all();
        }
    }
}
