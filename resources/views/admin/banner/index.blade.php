@extends('admin.layout')
@section('title','轮播器管理')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                轮播器
            </h1>
        </div>
    </div>
    <div class="row" style="margin-bottom: 5px">
        <div class="col-md-12">
            <a href="{{url('admin/banner/create')}}" class="btn btn-success">添加轮播图</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            @if (session()->has('data'))
                <div class="alert alert-{{session('data')['class']}}">
                    {{session('data')['msg']}}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>所属位置</th>
                                <th>标题</th>
                                <th>描述</th>
                                <th>链接</th>
                                <th>图片</th>
                                <th>是否显示</th>
                                <th>排序</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banner as $v)
                                <tr class="odd gradeX">
                                    <td>{{$v->id}}</td>
                                    <td>
                                        @if($v->flag==0)
                                            首页轮播图
                                        @elseif($v->flag==1)
                                            列表页巨幕
                                        @elseif($v->flag==2)
                                            详情页巨幕
                                        @endif
                                    </td>
                                    <td>{{$v->title}}</td>
                                    <td>{{$v->desc}}</td>
                                    <td>{{$v->href}}</td>
                                    <td><img src="{{url('/')."/uploads/".$v->pic}}" style="height:50px"></td>
                                    <td>{{$v->isshow==0?'不显示':'显示'}}</td>
                                    <td>{{$v->sort}}</td>
                                    <td class="center">
                                        <a href='{{url("admin/banner/{$v->id}/edit")}}' class="btn btn-success btn-sm">编辑</a>
                                        <a href='{{url("admin/banner/{$v->id}/del")}}' class="btn btn-danger btn-sm">删除</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
@endsection
