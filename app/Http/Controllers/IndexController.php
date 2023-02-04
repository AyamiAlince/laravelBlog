<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;


class IndexController extends Controller
{


    public function __invoke()
    {
        $posts = Post::paginate(3);
        $randomPosts =  Post::get()->random(1);

        return view(view:'main.index',data: compact('posts', 'randomPosts' ));
    }



}
