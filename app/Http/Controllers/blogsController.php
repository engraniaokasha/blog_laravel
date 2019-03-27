<?php
use App\Blog;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class blogsController extends Controller
{
   public function index(){
     $blogs=\DB::select('select * from blogs ');
    return view('blogs.index',['blogs'=>$blogs]);
   }


   public function create(){
       return view('blogs.createblog');
   }

   public function store(Request $request){

    $path=Storage::putFile('public',$request->file('images'));
    $url=Storage::url($path);

    \DB::table('blogs')->insert(
        ['title' => $request->title, 'content' => $request->content,'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),'image'=>$url]
    );
   return redirect()->route('index');

   }


   public function show($id){
    $blog= \DB::table('blogs')->where('id', $id)->first();
    return view ('blogs.show',['blog'=>$blog]);

   }


   public function edit($id)
   {
    $blog= \DB::table('blogs')->where('id', $id)->first();
    return view ('blogs.edit',['blog'=>$blog]);

   }

   public function update($id,request $request){
    $updates= \DB::table('blogs')->where('id', $id)->update( ['title' => $request->title, 'content' => $request->content]);
    $blog= \DB::table('blogs')->where('id', $id)->first();
    return view ('blogs.show',['blog'=>$blog]);
   }


   public function delete($id){
    \DB::table('blogs')->where('id', '=', $id)->delete();
    return redirect()->route('index');
   }



}
