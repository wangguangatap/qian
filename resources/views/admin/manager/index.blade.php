@extends('admin.layout')
@section('title','管理员')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                管理员
            </h1>
        </div>
    </div>
    <div class="row" style="margin-bottom: 5px">
        <div class="col-md-12">
            <a href="{{url('admin/manager/create')}}" class="btn btn-success">添加管理员</a>
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
                                <th>管理员账号</th>
                                <th>管理员状态</th>
                                <th>邮箱</th>
                                <th>手机</th>
                                <th>上次登陆IP</th>
                                <th>上次登陆时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($manager as $v)
                                <tr class="odd gradeX">
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->username}}</td>
                                    <td>{{$v->status==0?'禁用':'正常'}}</td>
                                    <td>{{$v->email}}</td>
                                    <td>{{$v->tel}}</td>
                                    <td>{{$v->ip}}</td>
                                    <td>{{$v->updated_at}}</td>
                                    <td class="center">

                                            <a href='{{url("admin/manager/{$v->id}/edit")}}' class="btn btn-success btn-sm">编辑</a>
                                            @if($v->id!=1)
                                                <a href='{{url("admin/manager/{$v->id}/del")}}' class="btn btn-danger btn-sm">删除</a>
                                            @endif

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
