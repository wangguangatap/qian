<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Manager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manager = Manager::OrderBy('id','asc')->get();
        return view('admin.manager.index')->with('manager',$manager);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manager.create');
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
            $model= new Manager();
           $info = $model->createManager($request->all());
           if($info >0){
                return redirect('admin/manager');
           }else{
                return back();
           }
        }
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
    public function edit(Manager $manager)
    {
        return view('admin.manager.edit')->with('manager',$manager);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manager $manager)
    {
        if($request->password!=$request->repassword){
            session()->flash('data',['class'=>'danger','msg'=>'两次密码不一致!']);
            return back();
        }
        $request->password==null?$data['password']=$manager->password:$data['password']=Crypt::encrypt($request->password);
        $data['username']=$request->username;
        $data['email']=$request->email;
        $data['tel']=$request->tel;
        $data['status']=$request->status;
        $result = Manager::where('id',$manager->id)->update($data);
        if($result>0){
            session()->flash('data',['class'=>'success','msg'=>'修改成功!']);
        }else{
            session()->flash('data',['class'=>'danger','msg'=>'修改失败!']);
        }
        return redirect('admin/manager');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manager $manager)
    {
        if($manager->id==1){
            session()->flash('data',['class'=>'danger','msg'=>'超级管理员不能删除!']);
            return back();
        }
        $result = $manager->delete();
        if($result){
            session()->flash('data',['class'=>'success','msg'=>'删除管理员成功!']);
        }else{
            session()->flash('data',['class'=>'danger','msg'=>'删除管理员失败!']);
        }
        return redirect(url('admin/manager'));
    }
}
