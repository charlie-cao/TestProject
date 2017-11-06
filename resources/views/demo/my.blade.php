@extends('demo.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                    <a href="{{url('doc/my')}}" class="list-group-item active">文章</a>
                    <a href="{{url('doc/myf')}}" class="list-group-item">收藏</a>

                    <a href="#" class="list-group-item">收藏</a>
                    <a href="#" class="list-group-item">收藏</a>
                    <a href="#" class="list-group-item">收藏</a>
                    <a href="#" class="list-group-item">收藏</a>
                </div>

            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-md-6">我的 - 文章</div>
                    <div class="col-md-6 text-right"><button type="button" class="btn btn-default btn-xs">新建文章</button></div>


                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th class="col-md-6 text-center">标题</th>
                        <th class="col-md-3 text-center">日期</th>
                        <th class="col-md-3 text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>做一个可以跨越平台的还好用的记事本</td>
                        <td>2017年12月12日</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-default btn-xs">修改</button>
                            <button type="button" class="btn btn-default btn-xs">删除</button>
                            <button type="button" class="btn btn-default btn-xs">分享</button>
                        </td>
                    </tr>
                    <tr>
                        <td>做一个可以跨越平台的还好用的记事本</td>
                        <td>2017年12月12日</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-default btn-xs">修改</button>
                            <button type="button" class="btn btn-default btn-xs">删除</button>
                            <button type="button" class="btn btn-default btn-xs">分享</button>
                        </td>
                    </tr>
                    <tr>
                        <td>做一个可以跨越平台的还好用的记事本</td>
                        <td>2017年12月12日</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-default btn-xs">修改</button>
                            <button type="button" class="btn btn-default btn-xs">删除</button>
                            <button type="button" class="btn btn-default btn-xs">分享</button>
                        </td>
                    </tr>
                    <tr>
                        <td>做一个可以跨越平台的还好用的记事本</td>
                        <td>2017年12月12日</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-default btn-xs">修改</button>
                            <button type="button" class="btn btn-default btn-xs">删除</button>
                            <button type="button" class="btn btn-default btn-xs">分享</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>

        </div>
    </div>
@stop
