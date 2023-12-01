<?php

namespace App\Http\Controllers\Blog;
use App\Http\Controllers;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogFormRequest;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        return view('Blog.create');
    }


    public function create()
    {
        return view('Blog.create');
    }


    public function store(Request $request)
    {
        $Blog = new Blog();
        $Blog->Blogtitle = $request->input('Blogtitle');
        $Blog->Blogcontent = $request->input('Blogcontent');
        if($request->hasFile('Blogimage')){
            $file = $request->file('Blogimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/Blog/', $filename);
            $Blog->Blogimage = $filename;

        }
        $Blog->Save();
        return view('Blog.create')->with('Blog Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
