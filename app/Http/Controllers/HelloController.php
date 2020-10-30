<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    //
    // public function index() {

    // 	$data = [
    // 		['name'=>'山田太郎', 'mail'=>'taro@mail'],
    // 		['name'=>'田中花子', 'mail'=>'tanaka@mail'],
    // 		['name'=>'佐藤勇気', 'mail'=>'sato@mail']
    // 	];
    // 	return view('hello.index', ['data'=>$data]);
    // }
        public function index(Request $request)
    {
        // $user = Auth::user();

        $items = DB::select('select * from people');
        // , 'user' => $user];
        return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
    	$msg = $request->msg;
    	$data = [
    		'msg'=>'こんにちは' . $msg . 'さん！',
    	];
    	return view('hello.index', $data);
    }
}
