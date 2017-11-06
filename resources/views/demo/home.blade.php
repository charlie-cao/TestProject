@extends('demo.app')

@section('content')

    <div class="container">
        <div id="app"></div>
        <div class="row">
            <div class="col-sm-9">
                <div class="col-xs-12 col-lg-12">
                    <h2>Heading
                        <small>美食</small>
                    </h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna mollis euismod. Donec sed odio dui.
                        <a class="btn btn-sm" href="{{url('doc/read')}}" role="button">查看全文（1元） »</a>
                    </p>
                    <p>
                        阅读（345）不错（12）不好（5）收藏（10）转发（15）赞赏（18）评论（18）
                        <a class="btn_togdiv">展开评论</a>
                    </p>

                    <div class="comment">
                        <p>曹垒头像:这篇文章写的很好. 21:20
                            <button>删除评论</button>
                        <p>曹垒头像:这篇文章写的很好. 21:20
                            <button>删除评论</button>
                        <p>曹垒头像:这篇文章写的很好. 21:20
                            <button>删除评论</button>
                        <form>
                            <textarea class="form-control" rows="3"></textarea>
                        </form>
                        <button>保存评论</button>
                    </div>
                </div><!--/.col-xs-12.col-lg-12-->
                <div class="col-xs-12 col-lg-12">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="{{url('doc/read')}}" role="button">View details »</a></p>
                </div><!--/.col-xs-12.col-lg-12-->
                <div class="col-xs-12 col-lg-12">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="{{url('doc/read')}}" role="button">View details »</a></p>
                </div><!--/.col-xs-12.col-lg-12-->
                <div class="col-xs-12 col-lg-12">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="{{url('doc/read')}}" role="button">View details »</a></p>
                </div><!--/.col-xs-12.col-lg-12-->
                <div class="col-xs-12 col-lg-12">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="{{url('doc/read')}}" role="button">View details »</a></p>
                </div><!--/.col-xs-12.col-lg-12-->
                <div class="col-xs-12 col-lg-12">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="{{url('doc/read')}}" role="button">View details »</a></p>
                </div><!--/.col-xs-12.col-lg-12-->
            </div>
            <div class="col-sm-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active">美食</a>
                    <a href="#" class="list-group-item">旅游</a>
                    <a href="#" class="list-group-item">编程</a>
                    <a href="#" class="list-group-item">资源</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                </div>
            </div>
        </div>
    </div>
    <script
            src="http://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>


    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script>
        $(function () {
            $(".comment").hide();
            $(".btn_togdiv").click(function () {
                $(".comment").toggle();
            })

        })
//
//        var app = new Vue({
//            el: '#app',
//            data: {
//                message: 'Hello Vue!'
//            },
//            ready: function () {
//                alert("加载完成");
//            }
//        })
        //        var vue = new Vue({
        //            ready: function () {
        //                alert("加载完成");
        //            }
        //        })

    </script>
@stop
