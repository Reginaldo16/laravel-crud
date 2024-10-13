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

    public function findAll(){
        $post =new Post();
        $posts= $post->all();
        dd($posts);
    }

    public function find(){
        $post =new Post();
        $posts= $post->find(2);
        dd($posts);
    }
}
