@extends('layouts.app')

@section('content')
<div class="container">
    <div class="blog-header">
        <h1 class="blog-title">2018 WEB技术试验场</h1>
        <p class="lead blog-description">laravel数据层 实验</p>
    </div>
    <div class="row">
        <div class="col-sm-8 blog-main">
<pre>
Laravel 默认支持 MySQL Postgres SQLite SQL Server。
支持三个层面的数据使用方法，1 直接SQL，2 查询生成器，3 ORM（Eloquent ORM），
下面逐一实验

直接查询
<div class="container">
    @foreach ($userss as $user)
        {{ $user->name }}
    @endforeach
</div>


</pre>
            {{ $userss->links() }}
        </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            @include('block.doclist')
            @include('block.suggest')
        </div>
    </div>
</div>
@stop
