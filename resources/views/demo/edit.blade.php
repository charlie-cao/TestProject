@extends('demo.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-sm-6">
                <form>
                    <div class="row"> < 返回 </div>

                    <div class="form-group">
                        <label for="title">标题</label>
                        <input type="text" class="form-control" id="title" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label for="content">内容 文本／MD</label>
                        <textarea class="form-control" rows="20"></textarea>
                    </div>

                </form>

            </div>
            <div class="col-sm-3">
                <form>
                    <div class="form-group">
                        <label for="exampleInputFile">添加文件</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">可以上传文件 可以选择文本还是mackdown模式</p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 私有
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">发布文章</button>
                </form>
            </div>
        </div>
    </div>
@stop
