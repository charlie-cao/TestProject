<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class LaravelDemoController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $results = DB::select('select * from user where id = :id', ['id' => 1]);
        return view('doc');

    }

    public function l_view()
    {
        $ary = ['a'=>'a','b'=>'b'];
        return view('laravel_demo.l_view', ['name' => 'Samantha',
            'ary'=>$ary,'records'=>1]);
    }


    public function l_vue()
    {
        $ary = ['a'=>'a','b'=>'b'];
        return view('laravel_demo.l_vue', ['name' => 'Samantha',
            'ary'=>$ary,'records'=>1]);
    }

    public function l_cache()
    {
        //只要配置好Redis就可以这样访问，用在对文件访问频繁的地方可以有效提高效率。比如模版文件之类的以及数据库比较大的查询
        //可以理解为更快的存储就好了

        $msg = "";

        //Redis当作数据库可以这样写
        Redis::set("redis1","这是从Redis中获取的数据");
        $msg .=  Redis::get("redis1");
        $msg .='<br/>';

        //Redis当作缓存可以这样写，有效
        Cache::store('redis')->put('bar111', '这是从Redis当作缓存获得的数据', 10);
        $msg .=  Cache::store('redis')->get('bar111');
        $msg .="<br/>";

        //奇怪的是直接用Cache::set put 无效
        Cache::store('file')->put('file_cache','这是在文件中的缓存',10);
        $msg .=  Cache::store('file')->get('file_cache');
        $msg .="<br/>";

        //找到原因了，需要修改配置 env文件中的默认缓存
        Cache::put('def_cache',"这是个默认的缓存",10);
        $msg .=  Cache::get('def_cache');
        $msg .="<br/>";



        /**
         * 一般缓存获取的逻辑是
         * if(Cache::has(key)){
         *   $val = Cache::get(key)
         * }else{
         *   查询或者获取 $val
         *   $val = xxxx;
         *   Cache::set(key,val,time)
         * }
         * 这样看 其他缓存系统也一样了
         **/

        return view('laravel_demo.l_cache',['msg'=>$msg]);
    }
    public function sass()
    {
        return view('sass');

    }

    public function grunt()
    {
        return view('grunt');

    }

}