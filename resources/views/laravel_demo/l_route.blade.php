@extends('layouts.app')

@section('content')
<div class="container">
    <div class="blog-header">
        <h1 class="blog-title">2018 WEB技术试验场</h1>
        <p class="lead blog-description">Route 实验</p>
    </div>
    <div class="row">
        <div class="col-sm-8 blog-main">
            基本路由
<pre>
Route::get('foo', function () {
    return 'Hello World';
});
web 中间件组，它提供了会话状态和 CSRF 保护等功能
Route::get('/user', 'UsersController@index');

Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);

Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('foo', function () {
    //
});

<form method="POST" action="/profile">
    {{ csrf_field() }}
    ...
</form>
重定向路由
Route::redirect('/here', '/there', 301);
视图路由
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
路由参数
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
必填参数
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});
可选参数
Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});
正则表达式约束
Route::get('user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
命名路由
Route::get('user/profile', function () {
    //
})->name('profile');
Route::get('user/profile', 'UserController@showProfile')->name('profile');
为路由指定了名称后，就可以使用全局辅助函数 route 来生成链接或者重定向到该路由
// 生成 URL...
$url = route('profile');

// 生成重定向...
return redirect()->route('profile');
如果是有定义参数的命名路由，可以把参数作为 route 函数的第二个参数传入，指定的参数将会自动插入到 URL 中对应的位置：
Route::get('user/{id}/profile', function ($id) {
    //
})->name('profile');

$url = route('profile', ['id' => 1]);

检查当前路由
public function handle($request, Closure $next)
{
    if ($request->route()->named('profile')) {
        //
    }

    return $next($request);
}
路由组
路由组允许你在大量路由之间共享路由属性，
    例如中间件或命名空间，
    而不需要为每个路由单独定义这些属性。
    共享属性应该以数组的形式传入 Route::group 方法的第一个参数中。
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // 使用 first 和 second 中间件
    });

    Route::get('user/profile', function () {
        // 使用 first 和 second 中间件
    });
});
命名空间
Route::namespace('Admin')->group(function () {
    // 在 "App\Http\Controllers\Admin" 命名空间下的控制器
});
子域名路由
路由组也可以用来处理子域名。子域名可以像路由 URI 一样被分配路由参数，允许你获取一部分子域名作为参数给路由或控制器使用。可以在 group 之前调用 domain 方法来指定子域名：
Route::domain('{account}.myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});
路由前缀
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // 匹配包含 "/admin/users" 的 URL
    });
});
路由模型绑定
隐式绑定#
Laravel 会自动解析定义在路由或控制器行为中与类型提示的变量名匹配的路由段名称的 Eloquent 模型。例如：

Route::get('api/users/{user}', function (App\User $user) {
    return $user->email;
});
在这个例子中，由于 $user 变量被类型提示为 Eloquent 模型 App\User，变量名称又与 URI 中的 {user} 匹配，因此，Laravel 会自动注入与请求 URI 中传入的 ID 匹配的用户模型实例。如果在数据库中找不到对应的模型实例，将会自动生成 404 异常。
自定义键名


    显式绑定
public function boot()
{
    parent::boot();

    Route::model('user', App\User::class);
}

自定义解析逻辑#

如果你想要使用自定义的解析逻辑，就使用 Route::bind 方法。传递到 bind 方法的闭包会接受 URI 中大括号对应的值，并且返回你想要在该路由中注入的类的实例：

public function boot()
{
    parent::boot();

    Route::bind('user', function ($value) {
        return App\User::where('name', $value)->first();
    });
}

表单方法伪造#
HTML 表单不支持 PUT、PATCH 或 DELETE 行为。所以当你要从 HTML 表单中调用定义了 PUT、PATCH 或 DELETE 路由时，你将需要在表单中增加隐藏的 _method 输入标签。使用 _method 字段的值作为 HTTP 的请求方法：

<form action="/foo/bar" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
你也可以使用辅助函数 method_field 来生成隐藏的 _method 输入标签：

    {{ method_field('PUT') }}

    访问当前路由
你可以使用 Route Facade 上的 current、currentRouteName 和 currentRouteAction 方法来访问处理传入请求的路由的信息：

$route = Route::current();

$name = Route::currentRouteName();

$action = Route::currentRouteAction();
</pre>




            return redirect('home');
            正则表达式约束

中间件：Laravel 中间件提供了一种方便的机制来过滤进入应用的 HTTP 请求
            route 中间件 控制器 中间件
            1 创建中间件
            2 改写
            3 注册
            4 在路由中或者全局中使用。或者在路由组中使用


            资源控制器#
            Laravel 资源路由可以将典型的「CRUD」路由指定到一个控制器上，仅需一行代码即可实现。比如，你可能希望创建一个控制器来处理所有应用保存的「相片」的 HTTP 请求。使用 Artisan 命令 make:controller ，就能快速创建这样一个控制器：

            php artisan make:controller PhotoController --resource
            这个命令会在 app/Http/Controllers/PhotoController.php 路径生成一个控制器。该控制器包含了各种可用的资源操作方法。

            接下来，你可以给控制器注册一个资源路由：

            Route::resource('photos', 'PhotoController');
            这个路由声明会创建多个路由来处理各种各样的资源操作。前面生成的控制器已经包含了这些操作的方法，同时还包括了 HTTP 动作和操作 URI 的注释。
        </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            @include('block.all')
        </div>
    </div>
</div>
@stop
