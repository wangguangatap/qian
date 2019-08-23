@extends('admin.layout')
@section('title','首页')

@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                首页
            </h1>
        </div>
    </div>
    <h3 style="color:#32C2CD;margin-bottom: 20px;">管理员信息</h3>
    <table class="table">
        <tbody>
        <tr>
            <th scope="row">管理员:</th>
            <td>{{session('loginManagerInfo')['username']}}</td>
        </tr>
        <tr>
            <th scope="row">上次登录时间:</th>
            <td>{{session('loginManagerInfo')['created_at']}}</td>
        </tr>
        <tr>
            <th scope="row">上次登录IP:</th>
            <td>{{session('loginManagerInfo')['ip']}}</td>
        </tr>
        </tbody>
    </table>

    <h3 style="color:#32C2CD;margin-bottom: 20px;">服务器信息</h3>
    <table class="table">
        <tbody>
        <tr>
            <th scope="row">系统类型及版本号:</th>
            <td>{{ php_uname() }}</td>
        </tr>
        <tr>
            <th scope="row">PHP运行方式:</th>
            <td>{{ php_sapi_name() }}</td>
        </tr>
        <tr>
            <th scope="row">PHP版本:</th>
            <td>{{PHP_VERSION}}</td>
        </tr>
        <tr>
            <th scope="row">Zend版本:</th>
            <td>{{Zend_Version()}}</td>
        </tr>
        <tr>
            <th scope="row">服务器IP:</th>
            <td>{{ GetHostByName($_SERVER['SERVER_NAME'])}}</td>
        </tr>
        <tr>
            <th scope="row">服务器域名:</th>
            <td>{{ $_SERVER['HTTP_HOST']}}</td>
        </tr>
        <tr>
            <th scope="row">服务器Web端口:</th>
            <td>{{$_SERVER['SERVER_PORT']}}</td>
        </tr>
        <tr>
            <th scope="row">服务器系统目录:</th>
            <td>{{ $_SERVER['SystemRoot']}}</td>
        </tr>
        </tbody>
    </table>
</div>
@endsection
