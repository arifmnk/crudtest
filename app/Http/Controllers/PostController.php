<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
     public function create()
    {
        // show create page
        return view('newpost');
    }
    public function store(Request $request)
    {
        // store data
        $param = $request->all();
        $newpost = new Post;
        $newpost->title = $param['title'];
        $newpost->description = $param['description'];
        $newpost->save();
        return redirect()->route('home');
    }
        public function edit($postid)
    {
        // show create page
        $satujepost = Post::find($postid);
        return view('updatepost',compact("satujepost"));
    }
    public function update(Request $request,$postid)
    {
        // store data
        $param = $request->all();
        $updatethispost = Post::find($postid);
        $updatethispost->title = $param['title'];
        $updatethispost->description = $param['description'];
        $updatethispost->save();
        return redirect()->route('home');
    }
         public function destroy($postid)
    {
        // show create page
        $satujepost = Post::find($postid);
        $satujepost->delete();
        return redirect()->route('home');
    }
}
