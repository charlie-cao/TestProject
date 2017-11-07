@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">2018 WEB技术试验场</h1>
            <p class="lead blog-description">前后端最新开发技术试验场，以及最佳实践。</p>
        </div>
        <div class="row">
            <div class="col-sm-8 blog-main">
                <h4>首页规划</h4>
                <pre>
首页三大区块，1 本项目目的区域，2 文档区域，3，解决的问题区域
【目的】
1。使用了最新的开发技术和流程进行开发。实验了各种新特性和新理念。
2。提供各种文档的快捷链接，方便国内开发者
3。提供各种新技术的试验文档。
4。创建讨论区，讨论一套真正开放和便捷的开发辅助站点。
</pre>
                <div class="row">
                    <div class="col-sm-4">
                        <h4>Laravel特性</h4>
                        <ol>
                            <li>工作流</li>
                            <li><a target="_blank" href="{{ asset('laraveldemo/l_view') }}">模版</a></li>
                            <li><a target="_blank" href="laraveldemo/l_route">路由</a></li>
                            <li>控制器</li>
                            <li><a target="_blank" href="laraveldemo/l_db">数据层</a></li>
                            <li><a target="_blank" href="laraveldemo/l_cache">Cache</a></li>

                            <li><a target="_blank" href="laraveldemo/l_cache">自动生成用户授权</a></li>

                            <li><a target="_blank" href="http://labs.infyom.com/">自动生成增删改查</a></li>
                            <li><a target="_blank" href="{{url('/apples')}}">增删改查例子</a></li>
                            <li><a target="_blank" href="laraveldemo/l_cache">组装更多的特性</a></li>
                            <li><a target="_blank" href="doc/home">MDEveryDemo</a></li>

                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>前端特性</h4>
                        <ol>
                            <li>前端工作流</li>
                            <li><a target="_blank" href="laraveldemo/l_vue">VUE单页程序</a></li>
                            <li>好用的模版</li>
                            <li>php7上传进度</li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>重点话题</h4>
                        <ol>
                            <li>持续集成</li>
                            <li>自动化测试</li>
                            <li>文档自动分析</li>
                            <li>系统日志</li>
                            <li>分布式系统</li>
                            <li>大数据接口</li>
                            <li>人工智能接口</li>
                            <li>IDE使用</li>
                            <li>团队管理技巧</li>
                            <li>源码管理技巧</li>
                            <li>已有资源接入</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h4>待解决问题</h4>
                        <ol>
                            <li>Session使用和跨域</li>
                            <li>curd后的修改</li>
                            <li>发布命令详解</li>
                            <li>运行环境的配置</li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>静态页面生成器</h4>
                        <ol>
                            <li>hugo</li>
                            <li>hexo</li>
                            <li>jekyll</li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>持续集成</h4>
                        <ol>
                            <li>Git Hub</li>
                            <li>Git Book</li>
                            <li>Git CI</li>
                        </ol>
                    </div>
                </div>

                <a href="{{url('/notes/create')}}">添加笔记</a>

                @foreach ($notes as $note)
                    <h4>{{$note->title}}
                        <small>{{ $note->auth }}</small>
                        {{$note->created_at}}
                    </h4>
                    <pre style="">{{$note->content}}</pre>
                @endforeach
            </div>
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                @include('block.all')
            </div>
        </div>
    </div>
@stop
