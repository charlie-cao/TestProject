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
        return view('laravel_demo.l_view');
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