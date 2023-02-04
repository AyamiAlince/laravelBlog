<?php

namespace App\Http\Controllers;

use App\Filament\Resources\PostResource;
use App\Filament\Resources\PostResource\Pages\ListPosts;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostPage;
use Illuminate\Http\Request;


class PostsController extends Controller
{


//    public function __invoke(PostPage $post)
//    {
//
//
//        return view('post.post',  compact('post'));
//    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public  function getPost($id){

        $post =  PostPage::where('id', $id)->first();
        return view('post.post',  ['post'=>$post]);
    }

}
