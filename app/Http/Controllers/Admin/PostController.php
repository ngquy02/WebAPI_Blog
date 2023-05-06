<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Post;
use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Storage;
use File;

class PostController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = Post::with('category')->orderBy('id','DESC')->get();
        // $category = CategoryPost::all();
        return view('admin.post.index', compact('post'));
        // return view('admin.post.index');
        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category=CategoryPost::all();
        return view('admin.post.create')->with(compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post = new Post();
        $post -> title = $request -> title;
        $post -> short_description = $request -> short_description;
        $post -> description = $request -> description;
        $post -> post_category_id = $request -> post_category_id;

        if($request['image']){
            $image=$request['image'];
            $ext = $image->getClientOriginalExtension();
            $name =time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $post->image=$name;
            }else{
                $post->image='default.jpg';
        }
        $post->save();
        return redirect()->route('post.index')->with('failure','Thêm thành công');
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        //
        $post=Post::find($post);
        $category=CategoryPost::all();
        return view('admin.post.show')->with(compact('category','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        //
        $post = Post::find($post);
        $post -> title = $request -> title;
        $post -> short_description = $request -> short_description;
        $post -> description = $request -> description;
        $post -> post_category_id = $request -> post_category_id;

        if($request['image']){
            unlink('uploads/'.$post->image);
            $image=$request['image'];
            $ext = $image->getClientOriginalExtension();
            $name =time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $post->image=$name;
            
        }
        $post->save();
        return redirect()->route('post.index')->with('failure','Thêm thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        //
        $path = 'uploads/';
        $post= Post::find($post);
        unlink($path.$post->image);
        $post->delete();
        return redirect()->back();
    }
}