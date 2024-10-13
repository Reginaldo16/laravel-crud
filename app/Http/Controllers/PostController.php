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
}
