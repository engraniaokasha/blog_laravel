<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Storage;

class PostsController extends Controller
{
    public function index(){
         $posts =Blog::all();
       return view('blogs.index',['posts'=>$posts]);
    }
   
   
      public function create(){
          return view('blogs.createblog');
      }
   
      public function store(Request $request){
   
       $path=Storage::putFile('public',$request->file('images'));
       $url=Storage::url($path);
       $post = new Blog;
       $post->title =$request->title;
       $post->content = $request->content;
       $post->image = $url;
       $post->save();
      return redirect()->route('index');
   
      }
   
   
      public function show($id){
        $post = Blog::where('id', $id)->first();
       return view ('blogs.show',['post'=>$post]);
   
      }
   
   
      public function edit($post)
      {
       $post=Blog::where('id', $post)->first();
       return view ('blogs.edit',['post'=>$post]);
   
      }
   
      public function update($id,request $request){
        $post =Blog::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        $post_updated=Blog::where('id', $id)->first();
       return view ('blogs.show',['post'=>$post_updated]);
      }
   
   
      public function delete($id){
        $post =Blog::find($id);
        $post->delete();
       return redirect()->route('index');
      }
   
}
