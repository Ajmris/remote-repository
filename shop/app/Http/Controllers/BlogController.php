<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::all();
        $title='Blogs';
        return view('blogs', compact('blogs'))->with('title', $title);
    }
    public function create(){
        $title='Create new blog';
        return view('createblog')->with('title', $title);
    }
    public function insert(Request $request){
        $blogs=new Blog;
        $blogs->name=$request->input('name');
        $blogs->description=$request->input('description');
        $blogs->save();
        return redirect('blogs');
    }
    public function edit($id){
        $title='Blog edit';
        $blogs=Blog::find($id);
        return view('blogedit', compact('blogs'))->with('title', $title);
    }
    public function update(Request $request, $id){
        $title='Blog edit';
        $blogs=Blog::find($id);
        $blogs->name=$request->input('name');
        $blogs->description=$request->input('description');
        $blogs->update();
        return redirect('blogs')->with('title', $title);
    }
    public function delete($id){
        $blogs=Blog::find($id);
        $blogs->delete();
        return redirect('blog')->with('title', 'Blog deleted successfully!');
    }
}