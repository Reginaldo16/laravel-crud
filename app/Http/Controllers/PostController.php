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

    public function findAll(Request $request){
        $posts = Post::all();
        return $posts;
    }

    public function find(Request $request){
        $post =new Post();
        $post= $post->find(2);
        dd($post);
    }


    public function update(Request $request){
        $post = Post::find(1);
        $post->author = 'Marla';
        $post->save();
        return $post;
    }

    public function delete(Request $request) {
        $post = Post::find(1);
        if ($post) {
            $post->delete();
            return response()->json(['message' => 'Post deleted successfully'], 200);
        }
        return response()->json(['message' => 'Post not found'], 404);
    }

}
