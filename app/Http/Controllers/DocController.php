<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\note;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class DocController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {

        //检查输入参数根据参数切换当前系统语言，并更新SESSION
        //参数怎么传入？SESSION怎么使用？
        //现在只对当前页起作用应该放在整个应用的入口位置，并且已经可以使用App
//        if (isset($_REQUEST['local'])) {
//            $local = $_REQUEST['local'];
//            Session::put('local', $local);
//            App::setLocale($local);
//            Session::save();
//        } elseif (Session::get('local')) {
//            $local = Session::get('local');
//            App::setLocale($local);
//        }


        $notes = DB::select('select * from notes ');
        return view('doc', ['notes' => $notes]);
    }

    /**
     * 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('demo.home');
    }

    /**
     * 发现
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function find()
    {
        return view('demo.find');
    }

    /**
     * 我的文章
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function my(){
        return view('demo.my');
    }

    /**
     * 我的收藏
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myf(){
        return view('demo.myf');
    }
    /**
     * 我的收藏
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function read(){
        return view('demo.read');
    }

    /**
     * 我的收藏
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(){
        return view('demo.edit');
    }

    public function vue()
    {
        $results = DB::select('select * from user ');

//var_dump($results);
//exit;
        return view('vue',
            ['username' => $results[0]->name,
                'users' => $results]
        );

    }

    public function sass()
    {
        return view('sass');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function grunt()
    {
        return view('grunt');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newpage(){
        return view('demo.newpage');
    }

}