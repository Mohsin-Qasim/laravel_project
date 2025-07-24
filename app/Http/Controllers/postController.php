<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class postController extends Controller



{
    public function storePost(Request $request) {

        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
    }

    public function postdata(){
        return view('create.post');
}
}