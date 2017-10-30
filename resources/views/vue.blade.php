<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="https://unpkg.com/vue"></script>
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

</head>
<body>
<div class="flex-center position-ref full-height">
    <div>
        <a href="https://cn.vuejs.org/v2/guide/syntax.html">vue 文档</a>

    </div>

    <div id="app">
        站点测试
        @{{ message }}<br/>

        username: @{{ username }}

        {{$username}}

        loop
        @foreach ($users as $u)
            <h2>{{$u->name}}</h2>
        @endforeach
    </div>
</div>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!',
            username: '{{$username}}'

        }
    })
</script>

</body>
</html>
