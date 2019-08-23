@extends('admin.layout')
@section('title','分类')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                分类列表
            </h1>
        </div>
    </div>
    <div class="row" style="margin-bottom: 5px">
        <div class="col-md-12">
            <a href="{{url('admin/category/create')}}" class="btn btn-success">添加分类</a>
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
                                <th>名称</th>
                                <th>英文名称</th>
                                <th>封面图片</th>
                                <th>排序</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cate as $v)
                                <tr class="odd gradeX">
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->name}}</td>
                                    <td>{{$v->title}}</td>
                                    <td><img src="{{url('/')."/uploads/".$v->pic}}" style="height:50px"></td>
                                    <td>{{$v->sort}}</td>
                                    <td class="center">
                                        <a href='{{url("admin/category/{$v->id}/edit")}}' class="btn btn-success btn-sm">编辑</a>
                                        <a href='{{url("admin/category/{$v->id}/del")}}' class="btn btn-danger btn-sm">删除</a>
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
