<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use App\Topic;

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

    public function l_db(){

        $msg = "";
        $users = DB::select('select * from user where id = ?', [1]);
        var_dump($users);
        $users = DB::select('select * from user ');
        var_dump($users);
        $users = DB::select('select * from user where id = :id', ['id' => 1]);
        var_dump($users);
        //DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        //DB::update('update users set votes = 100 where name = ?', ['John']);
        //DB::delete('delete from users');
        //DB::statement('drop table users');

        /**
        DB::transaction(function () {
        DB::table('users')->update(['votes' => 1]);

        DB::table('posts')->delete();
        }, 5);
         *
         * transaction 方法接受一个可选的第二个参数，该参数定义在发生死锁时，应该重新尝试事务的次数。一旦这些尝试都用尽了，就会抛出一个异常：
         */


        //数据库请求构建器
        $users = DB::table('user')->get();
        var_dump($users);

        $user = DB::table('user')->where('name', 'charlie')->first();
        echo $user->name;

        $pass = DB::table('user')->where('name', 'charlie')->value('pass');
        echo $pass;

        $titles = DB::table('user')->pluck('name');
        foreach ($titles as $title) {
            echo $title;
        }

        $titles = DB::table('user')->pluck('name','pass');
        foreach ($titles as $title) {
            echo $title;
        }

        /*
结果分块#
如果你需要操作数千条数据库记录，可以考虑使用 chunk 方法。这个方法每次只取出一小块结果，并会将每个块传递给一个 闭包 处理。这个方法对于编写数千条记录的 Artisan 命令 是非常有用的。例如，让我们把 users 表进行分块，每次操作 100 条数据：

                 * */
        $this->i=0;
        DB::table('user')->orderBy('id')->chunk(1, function ($users) {
            $this->i++;
            echo "第".$this->i."次";
            foreach ($users as $user) {
                //
                var_dump($user);
            }
        });


        $users = DB::table('user')->count();
        echo $users;

        $price = DB::table('user')
            ->where('name', 'charlie')
            ->avg('pass');
        echo $price;


        //Eloquent ORM
        echo "牛逼大了，这是用ORM获取的用户信息，直接定义好表和数据间关联的话，控制器调用起来可以省大事了";
        $flights = Topic::all();

        foreach ($flights as $flight) {
            echo $flight->name;
        }
//        $topic = new Topic();
//        $topic->name="topic001";
//        $topic->pass="pass001";
//        $topic->save();

        $users = DB::table('user')->paginate(3);



        return view('laravel_demo.l_db',['msg'=>$msg,'userss'=>$users]);
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