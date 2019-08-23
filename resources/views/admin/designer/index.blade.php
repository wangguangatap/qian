@extends('admin.layout')
@section('title','设计师')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                设计师列表
            </h1>
        </div>
    </div>
    <div class="row" style="margin-bottom: 5px">
        <div class="col-md-12">
            <a href="{{url('admin/designer/create')}}" class="btn btn-success">添加设计师</a>
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
                                <th>名字</th>
                                <th>头衔</th>
                                <th>照片</th>
                                <th>排序</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($designer as $v)
                                <tr class="odd gradeX">
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->name}}</td>
                                    <td>{{$v->subtitle}}</td>
                                    <td><img src="{{url('/')."/uploads/".$v->pic}}" style="height:50px"></td>
                                    <td>{{$v->sort}}</td>
                                    <td class="center">
                                        <a href='{{url("admin/designer/{$v->id}/edit")}}' class="btn btn-success btn-sm">编辑</a>
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
