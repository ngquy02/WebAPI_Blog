<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\CategoryPost;

class CategoryPostController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        $category = CategoryPost::all();
       
        return view('admin.category.index', compact('category'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
        // return  redirect()->route('category.index')->with('success','Thêm thành công');
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
        $category= new CategoryPost();
        $category -> title= $request-> title;
        $category->save();
        return redirect()->route('category.index')->with('failure','Thêm thành công');
        // return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function show($categoryPost)
    {
        //
        $category=CategoryPost::find($categoryPost);
        return view('admin.category.show')->with(compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPost $categoryPost)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryPost)
    {
        //
        $data= $request->all();
        $category= CategoryPost::find($categoryPost);
        $category->title=$data['title'];
        $category->save();
        return redirect()->route('category.index')->with('failure','Sửa thành công');
        // return redirect()->back();
        // return \Redirect::route('category.index')->with('message', 'cap nhat thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryPost)
    {
        //
        $category= CategoryPost::find($categoryPost);
        $category->delete();
        return redirect()->back();
        // $categoryPost-> delete();
    }
}
