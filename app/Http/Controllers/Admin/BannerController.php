<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::OrderBy('flag','asc')->OrderBy('sort','asc')->get();
        return view('admin.banner.index')->with('banner',$banner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            if($request->file("pic")){
                $info=$request->all();
                $info['pic'] = $request->file('pic')->store('banner');
                $NewsModel = new Banner();
                $dataInfo=$NewsModel->validateCreateBanner($info);
                if($dataInfo==1){
                    $NewsModel->title =$info['title'];
                    $NewsModel->desc =  $info['desc'];
                    $NewsModel->sort =  $info['sort'];
                    $NewsModel->pic = $info['pic'];
                    $NewsModel->href = $info['href'];
                    $NewsModel->flag = $info['flag'];
                    $NewsModel->isshow = $info['isshow'];
                    if($NewsModel->save()){
                        session()->flash('data',['class'=>'success','msg'=>'添加轮播图成功!']);
                    }else{
                        session()->flash('data',['class'=>'danger','msg'=>'添加轮播图失败!']);
                    }
                }else{
                    session()->flash('doConfigValidateErr',$dataInfo);
                    return redirect(url('admin/banner/create'));
                }
            }else{
                session()->flash('data',['class'=>'danger','msg'=>'请选择上传图片']);
                return back();
            }
        }
        return redirect(url('admin/banner'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit')->with('banner',$banner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner){
        $NewsModel = new Banner();
        $dataInfo=$NewsModel->validateCreateBanner($request->all());
        if($dataInfo==1){
            $data =[
                "title" =>$request->title,
                "desc" =>  $request->desc,
                "sort" =>  $request->sort,
                "href" => $request->href,
                "flag" => $request->flag,
                "isshow" => $request->isshow
            ];
            if($request->file("pic")){
                $data['pic'] = $request->file('pic')->store('banner');
                //删除旧图片
                Storage::delete($banner->pic);
            }
            $NewsModel = new Banner();
            $result = $NewsModel::where('id','=',$banner->id)->update($data);
            if($result>0){
                session()->flash('data',['class'=>'success','msg'=>'修改轮播图成功!']);
            }else{
                session()->flash('data',['class'=>'danger','msg'=>'修改轮播图失败!']);
            }
        }else{
            session()->flash('doConfigValidateErr',$dataInfo);
            return back();
        }
        return redirect(url('admin/banner'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $result = $banner->delete();
        Storage::delete($banner->pic);
        if($result){
            session()->flash('data',['class'=>'success','msg'=>'删除轮播图成功!']);
        }else{
            session()->flash('data',['class'=>'danger','msg'=>'删除轮播图失败!']);
        }
        return redirect(url('admin/banner'));
    }
}
