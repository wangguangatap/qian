@extends('admin.layout')
@section('title','产品列表')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
           产品列表
        </h1>
    </div>
</div>
<div class="row" style="margin:0 0 10px 0">
    <a class="btn btn-success" href="{{url('admin/product/create')}}">添加产品</a>
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
                            <th class="center">ID</th>
                            <th class="center">产品名</th>
                            <th class="center">所属分类</th>
                            <th class="center">占用网格大小</th>
                            <th class="center">是否推荐</th>
                            <th class="center">图片</th>
                            <th class="center">发布时间</th>
                            <th class="center">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $v)
                        <tr class="odd gradeX">
                            <td class="center">{{$v->id}}</td>
                            <td class="center">{{$v->title}}</td>
                            <td class="center">{{$v->category->name}}</td>
                            <td class="center">
                                @if($v->flag==0)
                                    正常网格大小
                                @elseif($v->flag==1)
                                    横向占用两个网格
                                @elseif($v->flag==2)
                                    纵向占用两个网格
                                @elseif($v->flag==3)
                                    最后两个正常网格大小
                                @endif
                            </td>
                            <td class="center">{!!  $v->tuijian==1?'<span style="color:green">是</span>':'<span style="color:red">否</span>'!!} </td>
                            <td class="center"><img src="{{url('/')."/uploads/".$v->pic}}" style="height:50px"></td>
                            <td class="center">{{$v->created_at}}</td>
                            <td class="center">
                                <a href='{{url("admin/product/{$v->id}/edit")}}' class="btn btn-success btn-sm">编辑</a>
                                <a href='{{url("admin/product/{$v->id}/del")}}' class="btn btn-danger btn-sm">删除</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$product->links()}}
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
    @endsection
