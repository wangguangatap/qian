@extends('admin.layout')
@section('title','报价')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                报价
            </h1>
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
                                <th>姓名</th>
                                <th>手机号</th>
                                <th>邮箱</th>
                                <th>咨询时间</th>
                                <th>留言</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($offer as $v)
                                <tr class="odd gradeX">
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->name}}</td>
                                    <td>{{$v->tel}}</td>
                                    <td>{{$v->email}}</td>
                                    <td class="center">{{$v->created_at}}</td>
                                    <td class="center">{{$v->message}}</td>
                                    <td class="center">
                                        <a href='{{url("admin/offer/{$v->id}/del")}}' class="btn btn-danger btn-sm">删除</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$offer->links()}}
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
@endsection
