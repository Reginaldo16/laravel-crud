<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
{
    public function create(Request $request){
        $new_post =[
            'title'=>'Meu Post 2',
            'content'=>'Conteudo do Post 2',
            'author'=>'Reginaldo 22',
        ];

        $post = new Post($new_post);
        $post->save();
        dd($post);
    }

    public function findAll(Request $r){
        $posts = Post::all();
        return $posts;
    }

    public function find(Request $r){
        $post =new Post();
        $post= $post->find(2);
        dd($post);
    }


    public function update(){
        $post = Post::find(1);
        $post->author = 'Marla';
        $post->save();
        return $post;
    }
}
