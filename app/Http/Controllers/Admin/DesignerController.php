<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Designer;


class DesignerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designer =Designer::OrderBy('sort','asc')->OrderBy('id','asc')->get();
        return view('admin.designer.index')->with('designer',$designer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.designer.create');
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
                $info['pic'] = $request->file('pic')->store('designer');
                $NewsModel = new Designer();
                $dataInfo=$NewsModel->validateCreateDesigner($info);
                if($dataInfo==1){
                    $NewsModel->name=$info['name'];
                    $NewsModel->subtitle =  $info['subtitle'];
                    $NewsModel->sort =  $info['sort'];
                    $NewsModel->pic = $info['pic'];
                    if($NewsModel->save()){
                        session()->flash('data',['class'=>'success','msg'=>'添加设计师成功!']);
                    }else{
                        session()->flash('data',['class'=>'danger','msg'=>'添加设计师失败!']);
                    }
                }else{
                    session()->flash('doConfigValidateErr',$dataInfo);
                    return redirect(url('admin/designer/create'));
                }
            }else{
                session()->flash('data',['class'=>'danger','msg'=>'请选择上传图片']);
                return back();
            }
        }
        return redirect(url('admin/designer'));
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
    public function edit(Designer $designer)
    {
        return view('admin.designer.edit')->with('designer',$designer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Designer $designer)
    {
        $NewsModel = new Designer();
        $dataInfo=$NewsModel->validateCreateDesigner($request->all());
        if($dataInfo==1){
            $data =[
                'subtitle' => $request->subtitle,
                'name'=> $request->name,
                'sort' => $request->sort,
            ];
            if($request->file("pic")){
                $data['pic'] = $request->file('pic')->store('designer');
                //删除旧图片
                Storage::delete($designer->pic);
            }
            $NewsModel = new Designer();
            $result = $NewsModel::where('id','=',$designer->id)->update($data);
            if($result>0){
                session()->flash('data',['class'=>'success','msg'=>'修改设计师成功!']);
            }else{
                session()->flash('data',['class'=>'danger','msg'=>'修改设计师失败!']);
            }
        }else{
            session()->flash('doConfigValidateErr',$dataInfo);
            return back();
        }
        return redirect(url('admin/designer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designer $designer)
    {
        $result = $designer->delete();
        Storage::delete($designer->pic);
        if($result){
            session()->flash('data',['class'=>'success','msg'=>'删除设计师成功!']);
        }else{
            session()->flash('data',['class'=>'danger','msg'=>'删除设计师失败!']);
        }
        return redirect(url('admin/designer'));
    }
}
