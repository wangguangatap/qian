<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * 文章列表页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->paginate(10);
        return view('admin.article.index')->with('article',$articles);
    }

    /**
     * 文章添加页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
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
                $info['pic']= $request->file('pic')->store('article');;
                $NewsModel = new Article();
                $dataInfo=$NewsModel->validateCreateArticle($info);
                if($dataInfo==1){
                    $NewsModel->title = $info['title'];
                    $NewsModel->content =  $info['contents'];
                    $NewsModel->pic=$info['pic'];
                    if($NewsModel->save()){
                        session()->flash('data',['class'=>'success','msg'=>'添加文章成功!']);
                    }else{
                        session()->flash('data',['class'=>'danger','msg'=>'添加文章失败!']);
                    }
                }else{
                    session()->flash('doConfigValidateErr',$dataInfo);
                    return back();
                }
            }else{
                session()->flash('data',['class'=>'danger','msg'=>'请选择上传图片']);
                return back();
            }
        }
        return redirect(url('admin/article'));
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
    public function edit(Article $article)
    {
        return view('admin.article.edit')->with('article',$article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        $data =[
            'title'=>$request->title,
            'content'=>$request->contents,
        ];
        if($request->file("pic")){
            $data['pic'] = $request->file('pic')->store('article');
            //删除旧图片
            Storage::delete($article->pic);
        }
        $NewsModel = new Article();
        $result = $NewsModel::where('id','=',$article->id)->update($data);
        if($result>0){
            session()->flash('data',['class'=>'success','msg'=>'修改文章成功!']);
        }else{
            session()->flash('data',['class'=>'danger','msg'=>'修改文章失败!']);
        }
        return redirect(url('admin/article'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $result = $article->delete();
        Storage::delete($article->pic);
        if($result){
            session()->flash('data',['class'=>'success','msg'=>'删除文章成功!']);
        }else{
            session()->flash('data',['class'=>'danger','msg'=>'删除文章失败!']);
        }
        return redirect(url('admin/article'));
    }
}
