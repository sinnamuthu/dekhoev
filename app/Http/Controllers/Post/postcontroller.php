<?php

namespace App\Http\Controllers\Post;
use App\Http\Controllers;
use App\Models\post;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;
use File;
use DB;
use Carbon\Carbon;

class postcontroller extends Controller
{

    public function index()
    {
        // $Posts = post::all();

		$sql = "select * from posts ORDER BY id DESC";
		$Posts = DB::select($sql);
        return view ('Post.index' ,(['Posts',$Posts]))->with('Posts', $Posts);

    }


    public function create()
    {
        return view('Post.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'Postimage'=>'image|mimes:jpeg,png,svg,jpg|max:30'    
         ]);

        $Post = new post();
        $Post->Posttitle = $request->input('Posttitle');
        $Post->meta_description = $request->input('meta_description');
        $Post->meta_keyword = $request->input('meta_keyword');
        $Post->meta_title = $request->input('meta_title');
        $Post->Postcontent = $request->input('Postcontent');
        $Post->Post_Date = Carbon::now()->toDateTimeString();
        if($request->hasFile('Postimage')){
            $file = $request->file('Postimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/Post/', $filename);
            $Post->Postimage = $filename;

        }
        $Post->Save();
        return view('Post.create')->with('Success','Post Added Successfully');
    }


    public function show($id)
    {
        $Posts = post::find($id);

        return view ('Post.show')->with('Posts', $Posts);

    }
    public function edit($id)
    {
        $Posts = post::find($id);
        return view('Post.edit',compact('Posts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Postimage'=>'image|mimes:jpeg,png,svg,jpg|max:30'    
         ]);
         $Posts = post::find($id);
         $Posts->Posttitle = $request->input('Posttitle');
         $Posts->meta_description = $request->input('metadescription');
         $Posts->meta_keyword = $request->input('metakeyword');
         $Posts->meta_title = $request->input('metatitle');
         $Posts->Postcontent = $request->input('Postcontent');
         $Posts->Post_Date = Carbon::now()->toDateTimeString();
         if($request->hasFile('Postimage')){
            $path='UploadImages/Post/'.$Posts->Postimage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('Postimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/Post/', $filename);
            $Posts->Postimage = $filename;

        }
        $Posts->update();

        return redirect ('/Post/index')->with('Posts',$Posts)->with('Success','Post update successfully....!');
         
    }

    public function destroy($id)
    {
        post::destroy($id);
        return back()->with('Success', 'Post deleted successfully...!');
    }

    public function post_date_search(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $sql= "select * from posts where Post_Date BETWEEN '$start_date' AND '$end_date' ORDER BY id DESC ";
        $Posts = DB::select($sql); 
        return view ('Post.index' ,(['Posts',$Posts]))->with('Posts', $Posts);
    }
}
