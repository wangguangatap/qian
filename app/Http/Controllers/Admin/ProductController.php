<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('id','asc')->paginate(10);
        return view('admin.product.index')->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate=Category::orderBy('sort')->get();
        return view('admin.product.create')->with('cate',$cate);
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
                $info['pic'] = $request->file('pic')->store('product');
                $NewsModel = new Product();
                $dataInfo=$NewsModel->validateCreateProduct($info);
                isset($info['tuijian'])?$info['tuijian']=1:$info['tuijian']=0;
                if($dataInfo==1){
                    $NewsModel->title = $info['title'];
                    $NewsModel->cid=$info['cid'];
                    $NewsModel->content =  $info['contents'];
                    $NewsModel->pic=$info['pic'];
                    $NewsModel->tuijian=$info['tuijian'];
                    $NewsModel->flag = $info['flag'];
                    if($NewsModel->save()){
                        session()->flash('data',['class'=>'success','msg'=>'添加产品成功!']);
                    }else{
                        session()->flash('data',['class'=>'danger','msg'=>'添加产品失败!']);
                    }
                }else{
                    session()->flash('doConfigValidateErr',$dataInfo);
                    return redirect(url('admin/product/create'));
                }
            }else{
                session()->flash('data',['class'=>'danger','msg'=>'请选择上传图片']);
                return back();
            }
        }
        return redirect(url('admin/product'));
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
    public function edit(Product $product)
    {
        $cate=Category::orderBy('sort')->get();
        return view('admin.product.edit')->with('product',$product)->with('cate',$cate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $NewsModel = new Product();
        $dataInfo=$NewsModel->validateCreateProduct($request->all());
        if($dataInfo==1){
            $data=[];
            isset($request->tuijian)?$data['tuijian']=$request->tuijian:$data['tuijian']=0;
            isset($request->contents)?$data['content']=$request->contents:$data['content']='';
            $data =[
                'title' => $request->title,
                'cid'=> $request->cid,
                'flag'=>$request->flag,
                'content' =>  $request->contents,
                'tuijian'=> $request->tuijian
            ];
            if($request->file("pic")){
                $data['pic'] = $request->file('pic')->store('product');
                //删除旧图片
                Storage::delete($product->pic);
            }
            $NewsModel = new Product();
            $result = $NewsModel::where('id','=',$product->id)->update($data);
            if($result>0){
                session()->flash('data',['class'=>'success','msg'=>'修改产品成功!']);
            }else{
                session()->flash('data',['class'=>'danger','msg'=>'修改产品失败!']);
            }
        }else{
            session()->flash('doConfigValidateErr',$dataInfo);
            return back();
        }
        return redirect(url('admin/product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $result = $product->delete();
        Storage::delete($product->pic);
        if($result){
            session()->flash('data',['class'=>'success','msg'=>'删除产品成功!']);
        }else{
            session()->flash('data',['class'=>'danger','msg'=>'删除产品失败!']);
        }
        return redirect(url('admin/product'));
    }
}
