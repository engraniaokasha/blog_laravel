<?php
use App\Blog;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    \DB::table('blogs')->insert(
        ['title' => $request->title, 'content' => $request->content]
    );
   return redirect()->route('index');

   }
}
