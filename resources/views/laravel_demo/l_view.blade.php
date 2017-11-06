@extends('layouts.app')

@section('content')
<div class="container">
    <div class="blog-header">
        <h1 class="blog-title">2018 WEB技术试验场</h1>
        <p class="lead blog-description">view 实验</p>
    </div>
    <div class="row">
        <div class="col-sm-8 blog-main">
            <ol>
            <li>    模板继承
                @@section 命令定义了视图的一部分内容，而 @@yield 指令是用来显示指定部分的内容
                @yield('title')

                @section('sidebar')
                    这是主布局的侧边栏。
                @show

                @yield('content')


            </li>
            <li>    定义布局</li>
            <li>    继承布局</li>
            <li>    Components & Slots
                @component('alert')
                    @slot('title')
                        Forbidden
                    @endslot

                    你没有权限访问这个资源！
                    这是获取 alert.blade.php 中的组件 通过
                @endcomponent
            </li>
            <li>    显示数据
                Hello, {{ $name }}.
                The current UNIX timestamp is {{ time() }}.
                显示未转义的数据 Hello, {!! $name !!}.

                    var app = @json($ary)

                <?php echo json_encode($ary); ?>


                不转译显示
                <h1>Laravel</h1>

                Hello, @{{ name }}.

                @verbatim
                    <div class="container">
                        Hello, {{ name }}.
                    </div>
                @endverbatim

            </li>
            <li>    Blade & JavaScript 框架</li>
            <li>    流程控制</li>
            <li>    If 语句
                @if (count($records) === 1)
                    我有一条记录！
                @elseif (count($records) > 1)
                    我有多条记录！
                @else
                    我没有任何记录！
                @endif
            </li>
            <li>    Switch 语句</li>
            <li>    循环</li>
            <li>    循环变量</li>
            <li>    注释</li>
            <li>    PHP</li>
            <li>    引入子视图</li>
            <li>    为集合渲染视图</li>
            <li>    堆栈</li>
            <li>    服务注入</li>
            <li>    Blade 扩展</li>
            <li>    自定义 If 语句</li>
            </ol>


        </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            @include('block.all')

        </div>
    </div>
</div>
@stop
