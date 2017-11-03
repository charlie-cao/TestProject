<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\note;

class DocController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {

        $notes = DB::select('select * from notes ');
        return view('doc',['notes'=>$notes]);
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

    public function grunt()
    {
        return view('grunt');

    }

}