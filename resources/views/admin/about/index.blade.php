@extends('admin.layout')
@section('title','关于我们')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            关于我们
        </h1>
    </div>
</div>
<div class="row">
    <a class="btn btn-success" href="{{url('admin/about/create')}}" style="margin:0 0 10px 15px">添加关于我们</a>
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
                            <th>所属板块</th>
                            <th>发布时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($about as $v)
                        <tr class="odd gradeX">
                            <td>{{$v->id}}</td>
                            <td>{{$v->title}}</td>
                            <td>
                                @if($v->pic)
                                    <img src="{{url('/')."/uploads/".$v->pic}}" style="height:50px">
                                @endif
                            </td>
                            <th>
                                @if($v->flag==0)
                                    关于我们栏目简介
                                @elseif($v->flag==1)
                                    首页服务栏目简介
                                @elseif($v->flag==2)
                                    首页设计团队栏目简介
                                @endif
                            </th>
                            <td class="center">{{$v->created_at}}</td>
                            <td class="center">
                                <a href='{{url("admin/about/{$v->id}/edit")}}' class="btn btn-success btn-sm">编辑</a>
                                <a href='{{url("admin/about/{$v->id}/del")}}' class="btn btn-danger btn-sm">删除</a>
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
