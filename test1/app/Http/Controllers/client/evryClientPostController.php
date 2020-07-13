<?php

namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;


use App\Post;
use App\User;
use Illuminate\Http\Request;

class evryClientPostController extends Controller
{
    public function index(){
        $user = auth()->user();
//
        $posts=$user->posts;
        return view('client.client_posts',compact("posts"));


    }
}
