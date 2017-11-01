<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
    public function sass()
    {
        return view('sass');

    }

    public function grunt()
    {
        return view('grunt');

    }

}