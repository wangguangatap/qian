@extends('admin.layout')
@section('title','文章列表')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            文章列表
        </h1>
    </div>
</div>
<div class="row">
    <a class="btn btn-success" href="{{url('admin/article/create')}}" style="margin:0 0 10px 15px">添加文章</a>
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
                            <th>标题</th>
                            <th>封面图片</th>
                            <th>发布时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($article as $v)
                        <tr class="odd gradeX">
                            <td>{{$v->id}}</td>
                            <td>{{$v->title}}</td>
                            <td><img src="{{url('/')."/uploads/".$v->pic}}" style="height:50px"></td>
                            <td class="center">{{$v->created_at}}</td>
                            <td class="center">
                                <a href='{{url("admin/article/{$v->id}/edit")}}' class="btn btn-success btn-sm">编辑</a>
                                <a href='{{url("admin/article/{$v->id}/del")}}' class="btn btn-danger btn-sm">删除</a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$article->links()}}
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
    @endsection
