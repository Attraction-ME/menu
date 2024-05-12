<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.blogs.index',compact('blogs'));
    }


    public function create()
    {
        return view('dashboard.blogs.create');
    }


    public function store(Request $request){

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('blogs'), $imageName);


        Blog::create([
            'title' => $request->title,
            'details' => $request->details,
            'image' => $imageName,
        ]);
        return redirect()->route('blogs.index')->with('message' , " Blogs Add Successfully");

    }
    public function show(Blog $blog)
    {
        //
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('dashboard.blogs.edit' , compact('blog' ));

    }

    public function update(Request $request,$id)
    {
        $blog = Blog::find($id);


        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('blogs'), $imageName);
        }else{
            $imageName = $blog->image;
        }


        $blog->title = $request->title;
        $blog->details = $request->details;
        $blog->image = $imageName;

        $blog->save();
        return redirect()->route('blogs.index')->with('message' , "Blog Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog,$id)
    {
        $blogs = Blog::find($id)->delete();
        return redirect()->route('blogs.index')->with('message' , "Blog Deleted Successfully");

    }
}
