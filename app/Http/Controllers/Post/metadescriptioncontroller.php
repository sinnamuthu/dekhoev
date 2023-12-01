<?php

namespace App\Http\Controllers\Post;
use App\Http\Controllers;
use App\Models\Metadescription;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;
use File;
use DB;
use Carbon\Carbon;

class metadescriptioncontroller extends Controller
{

    public function index()
    {
        // $Posts = post::all();

		$sql = "select * from metadescription ORDER BY id DESC";
		$Meta = DB::select($sql);
        return view ('Metadescription.index' ,(['Meta',$Meta]))->with('Meta', $Meta);

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
        $Post->Postcontent = $request->input('Postcontent');
        $Post->Post_Date = Carbon::now()->toDateTimeString();
        if($request->hasFile('Postimage')){
            $file = $request->file('Postimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/Post/', $filename);
            $Post->Postimage = $filename;

        }
        $Post->Save();
        return view('Metadescription.create')->with('Success','Post Added Successfully');
    }


    public function show($id)
    {
        $Metadescription = Metadescription::find($id);

        return view ('Metadescription.show')->with('Metadescription', $Metadescription);

    }
    public function edit($id)
    {
        $Metadescription = Metadescription::find($id);
        return view('Metadescription.edit',compact('Metadescription'));
    }

    public function update(Request $request, $id)
    {

         $Meta = Metadescription::find($id);
         $Meta->keyword = $request->input('keyword');
         $Meta->title = $request->input('title'); 
         $Meta->description = $request->input('description');
        $Meta->update();

        return redirect ('/Metadescription/index')->with('Meta',$Meta)->with('Success','Meta Tags update successfully....!');
         
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
        return view ('Metadescription.index' ,(['Posts',$Posts]))->with('Posts', $Posts);
    }
}
