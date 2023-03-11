<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Categiore;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => $this->getPosts(),
            'categoties' => Categiore::all(),
        ]);
    }

     public function show(Post $post )
    {
        return view('post', [
            'post' => $post

        ]);
    }

    protected function getPosts(){
        $posts = Post::latest();

        if (request('search')) {
            $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orwhere('body', 'like', '%' . request('search') . '%');
        }
        return $posts->get();
    }

 
}
