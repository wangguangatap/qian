<?php

namespace App\Http\Controllers\Admin;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::OrderBy('sort','asc')->OrderBy('id','asc')->get();
        return view('admin.category.index')->with('cate',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.category.create');
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
                $info['pic'] = $request->file('pic')->store('category');
                $NewsModel = new Category();
                $dataInfo=$NewsModel->validateCreateCategory($info);
                if($dataInfo==1){
                    $NewsModel->title = $info['title'];
                    $NewsModel->name=$info['name'];
                    $NewsModel->pic =  $info['pic'];
                    $NewsModel->sort =  $info['sort'];
                    if($NewsModel->save()){
                        session()->flash('data',['class'=>'success','msg'=>'添加分类成功!']);
                    }else{
                        session()->flash('data',['class'=>'danger','msg'=>'添加分类失败!']);
                    }
                }else{
                    session()->flash('doConfigValidateErr',$dataInfo);
                    return redirect(url('admin/category/create'));
                }
            }else{
                session()->flash('data',['class'=>'danger','msg'=>'请选择上传图片']);
                return back();
            }
        }
        return redirect(url('admin/category'));
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
    public function edit(Category $category)
    {
        return view('admin.category.edit')->with('cate',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $NewsModel = new Category();
        $dataInfo=$NewsModel->validateCreateCategory($request->all());
        if($dataInfo==1){
            $data =[
                'title' => $request->title,
                'name'=> $request->name,
                'sort' => $request->sort,
            ];
            if($request->file("pic")){
                $data['pic'] = $request->file('pic')->store('category');
                //删除旧图片
                Storage::delete($category->pic);
            }
            $NewsModel = new Category();
            $result = $NewsModel::where('id','=',$category->id)->update($data);
            if($result>0){
                session()->flash('data',['class'=>'success','msg'=>'修改分类成功!']);
            }else{
                session()->flash('data',['class'=>'danger','msg'=>'修改分类失败!']);
            }
        }else{
            session()->flash('doConfigValidateErr',$dataInfo);
            return back();
        }
        return redirect(url('admin/category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $res = Product::where('cid',$category->id)->get();
        if(!($res->isEmpty())){
            session()->flash('data',['class'=>'danger','msg'=>'分类下有产品无法删除，请先删除分类下的产品数据!']);
            return redirect(url('admin/category'));
        }
        $result = $category->delete();
        Storage::delete($category->pic);
        if($result){
            session()->flash('data',['class'=>'success','msg'=>'删除分类成功!']);
        }else{
            session()->flash('data',['class'=>'danger','msg'=>'删除分类失败!']);
        }
        return redirect(url('admin/category'));
    }
}
