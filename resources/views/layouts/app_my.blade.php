<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '试验田') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .fixednav {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: 1;
        }
    </style>
</head>
<body>
<div id="app">
    <nav  class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">开启导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/doc') }}">
                    {{ trans('app.title') }}
                </a>
            </div>


            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <!-- Left Side Of Navbar -->

                <ul class="nav navbar-nav">
                    <li><a href="{{ asset('doc')}}">试验场 <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ url('notes')}}">笔记本</a></li>
                    <li><a href="{{ url('web2018')}}">WEB 2018</a></li>
                    <li><a href="{{ url('app2018')}}">APP 2018</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">发现 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">提问</a></li>
                            <li><a href="#">工作</a></li>
                            <li><a href="#">成员</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">认证</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">友情链接</a></li>
                        </ul>
                    </li>


                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="问点什么呢">
                    </div>
                    <button type="submit" class="btn btn-default">搜索笔记</button>
                </form>


                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">语言 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('doc/?local=zh_cn')}}">中文</a></li>
                                <li><a href="{{url('doc/?local=en')}}">EN</a></li>
                            </ul>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="text-muted">2018 QGame</p>
    </div>
</footer>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    $(function(){
        //导航栏置顶
        var nav=$(".navbar"); //得到导航对象
        var win=$(window); //得到窗口对象
        var sc=$(document);//得到document文档对象。
        win.scroll(function(){
            if(sc.scrollTop()>=100){
                nav.addClass("fixednav");
                $(".navTmp").fadeIn();
            }else{
                nav.removeClass("fixednav");
                $(".navTmp").fadeOut();
            }
        })
    })
</script>
</body>
</html>
