<?php

namespace App\Http\Controllers\NewModelFearureimage;
use App\Models\Newmodelfeatureimage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class NewmodelfeatureimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $Newmodelfeatureimage =new Newmodelfeatureimage();
        if($request->hasFile('Modelimage')){
            $file = $request->file('Modelimage');
            $filename = time().'.'.$file->extension();
            $file->move('UploadImages/NewModel/', $filename);
            $Newmodelfeatureimage->Modelimage = $filename;

        }
        $Newmodelfeatureimage->save();
        
           $currentcate = new Newmodelfeatureimage();  
        //   $currentcate  = $request->input('cate');    
          $currentcate = $request->session()->get('cate'); 
        //   session()->put('cate', $currentcate);
        
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        
          $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
          $users = DB::select($sql);
        
        // $users = DB::select('select * from newfeaturemasters WHERE Products="2wheel" ');
        return view('NewModel.twowheeler',['users'=>$users],['usersc'=>$usersc]);
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
