<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $posts=post::where('status',1)->get();
        return view('index',['posts'=>$posts]);
    }
}
