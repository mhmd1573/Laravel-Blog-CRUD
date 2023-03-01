<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class PostsController extends Controller
{
   

    public function index(){
           return view('blog.index')
           ->with('posts', Post::get());   
    }
    
   
    public function create(){
        return view('blog.create');
    }

    
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $slug = Str::slug($request->title, '-');
        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

       
        

        Post::create([
            'slug' => $slug,
            'title' => $request->input('title'),
            'description' =>$request->input('description'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/blog');
          

    }


    public function show($slug){
        return view('blog.show')
        ->with('post', Post::where('slug', $slug)->first());
    }

    public function edit($slug){
        return view('blog.edit')
        ->with('post', Post::where('slug', $slug)->first());

    }

    
    public function update(Request $request, $slug){


      
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        
        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
       


        Post::where('slug', $slug)
        ->update([
            'slug' => $slug,
            'title' => $request->input('title'),
            'description' =>$request->input('description'),
            'user_id' => auth()->user()->id,
             'image_path' => $newImageName,   
        ]);

        return redirect('/blog/' . $slug)
        ->with('message', 'Post Updated Successfully');
          





    }
    

    public function destroy($slug){
        Post::where('slug', $slug)->delete();
        return redirect('/blog')
        ->with('message', 'Post Deleted Successfully');

    }
    
}
