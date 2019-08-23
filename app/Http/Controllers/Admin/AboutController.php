<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aboutus;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * 关于我们列表页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = Aboutus::orderBy('id','asc')->get();
        return view('admin.about.index')->with('about',$about);
    }

    /**
     * 关于我们添加页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            $info=$request->all();
            if($request->file("pic")){
                $info['pic']= $request->file('pic')->store('about');;
            }
            $NewsModel = new Aboutus();
            $dataInfo=$NewsModel->validateCreateAbout($info);
            if($dataInfo==1){
                $NewsModel->title = $info['title'];
                $NewsModel->content =  $info['contents'];
                $NewsModel->pic=isset($info['pic'])?$info['pic']:'';
                $NewsModel->flag=$info['flag'];
                if($NewsModel->save()){
                    session()->flash('data',['class'=>'success','msg'=>'添加成功!']);
                }else{
                    session()->flash('data',['class'=>'danger','msg'=>'添加失败!']);
                }
            }else{
                session()->flash('doConfigValidateErr',$dataInfo);
                return back();
            }
        }
        return redirect(url('admin/about'));
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
    public function edit(Aboutus $about)
    {
        return view('admin.about.edit')->with('about',$about);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutus $about)
    {
        //
        $data =[
            'title'=>$request->title,
            'content'=>$request->contents,
            'flag'=>$request->flag
        ];
        if($request->file("pic")){
            $data['pic'] = $request->file('pic')->store('about');
            //删除旧图片
            Storage::delete($about->pic);
        }
        $NewsModel = new Aboutus();
        $result = $NewsModel::where('id','=',$about->id)->update($data);
        if($result>0){
            session()->flash('data',['class'=>'success','msg'=>'修改成功!']);
        }else{
            session()->flash('data',['class'=>'danger','msg'=>'修改失败!']);
        }
        return redirect(url('admin/about'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutus $about)
    {
        $result = $about->delete();
        Storage::delete($about->pic);
        if($result){
            session()->flash('data',['class'=>'success','msg'=>'删除成功!']);
        }else{
            session()->flash('data',['class'=>'danger','msg'=>'删除失败!']);
        }
        return redirect(url('admin/about'));
    }
}
