<!DOCTYPE html>
<html>
<head>
    <title>Froala Design Blocks - Footers</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>

    <script src="http://localhost:35729/livereload.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link type="text/css" rel="stylesheet" href="{{asset('css/froala_blocks.css')}}">

    <style>
        .fdb-block {
            border-bottom: solid 1px #EEE;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md no-gutters">
    <div class="col-3 text-left">
        <a class="nav-link" href="{{url('/')}}">HOME</a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse-2"
            aria-controls="navbarNav7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav3">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/web2018')}}">WEB 2018</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/web2018')}}">APP 2018</a>
            </li>
        </ul>
    </div>


</nav>
<section class="fdb-block" style="background-image: url({{asset('imgs/bg_c_2.svg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-8">
                <div class="fdb-box fdb-touch">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <h1>WEB 2018 开发指南</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="fdb-block">
    <div class="container">
        <div class="row">
            <div class="col text-left">
                <pre>

        开发一个内容不多的网站可以使用静态网站生成器，比如hugo
        优点完全静态话的内容很方便部署到cdn上。省去了部署，数据库，性能也最大化了
        开发流程
        1 使用 desing-block 之类的模版库创建模版
        2 创建 github上的版本仓库，并设定部署钩子
        3 编辑内容并提交

        开发一个偏向于内容分发的新系统
        开发流程
        1 使用 sketch 设计高精度模型 设计 用户交互模式
        2 使用 ant.design 之类的 react 前端库构建系统原型
        3 创建 api 服务
        4 衔接 并测试
        整个过程通过git进行版本控制

        开发一个偏向于后端数据管理的系统
        开发流程
        1 使用 sketch 设计高精度模型
        2 创建 api 服务
        3 使用 pro.ant.design 之类的 react 完整后台前端库构建
        4 衔接 并测试
        整个过程通过git进行版本控制

        React 的学习应当从ali的ant design开始，就可以避免瞎找资源和教程了，阿里的文档写的很好，
                    一边修改 antdesing一边看阿里的文档，再找本基本的react教程看看，效果最好。
                    不至于瞎忙。

        开发一个api
        可以使用 laravel 快速创建 对应表的api
        设计好表，直接生成数据结构

        开发一个爬虫
        可以使用nodejs 或者 python 的相关成熟框架。
        使用 mongdb 或者 mysql 实现存储。
        如果数据也不太在意可以直接使用web上的开放存储，对象存储之类的服务。

                </pre>
            </div>
        </div>
    </div>
</section>


<footer class="fdb-block footer-large bg-dark">
    <div class="container">
        <div class="row align-items-top text-center text-md-left">
            <div class="col-12 col-sm-6 col-md-4">
                <h3><strong>联系</strong></h3>
                <p>在网络上爬了很久的程序员.</p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-4 mt-sm-0">
                <h3><strong>更多</strong></h3>
                <p>在网络上爬了很久的程序员.</p>
            </div>

            <div class="col-12 col-md-4 mt-5 mt-md-0 text-md-left">
                <h3><strong>关于</strong></h3>
                <p>在网络上爬了很久的程序员.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col text-center">
                &copy; 2018  All Rights Reserved
            </div>
        </div>
    </div>
</footer>

</body>
</html>