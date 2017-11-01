@extends('layouts.app')

@section('content')
<div class="container">
    <div class="blog-header">
        <h1 class="blog-title">2018 WEB技术试验场</h1>
        <p class="lead blog-description">vue 实验</p>
    </div>
    <div class="row">
        <div class="col-sm-8 blog-main">

        </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            @include('block.doclist')
            @include('block.suggest')
        </div>
    </div>
</div>
@stop
