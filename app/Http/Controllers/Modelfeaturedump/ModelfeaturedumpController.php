<?php

namespace App\Http\Controllers\Modelfeaturedump;
use App\Models\Modelfeaturedump;
use App\Models\newmodel;
use App\Models\Newmodelfeature;
use App\Models\Newmodelfeatureimage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelfeaturedumpController extends Controller
{

    public function index()
    {
        return view('Modelfeaturedump.create');
    }


    public function create()
    {
        $Modelfeaturedumps = Modelfeaturedump::all();
        return view ('Modelfeaturedump.create')->with('Modelfeaturedump', $Modelfeaturedumps);
    }

//mytest
public function file_test(){
    
    $Modelfeaturedumps = new Modelfeaturedump();
        
        
        $sql = "select * from fourwheelerspecsfeatures WHERE model_name = 'Prime'";
        $users = DB::select($sql);
        
          
         return view('Modelfeaturedump.file_test',['users'=>$users]);
        
    
}

//mytest


    public function store(Request $request)
    {
        $Modelfeaturedumps = new Modelfeaturedump();
        
        $valuecat = $request->session()->get('cate');
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $Modelfeaturedumps->Products = $valuecat;
        $Modelfeaturedumps->OEM_name = $request->input('OEM_name');
        $Modelfeaturedumps->model_name = $request->input('model_name');
        // $currentmodel = new Modelfeaturedump();  
        // $currentmodel  = $request->input('model_name');        
        // session()->put('Modeldata', $currentmodel);
    //   $Modelfeaturedumps = new Modelfeaturedump();
    //   $Modelfeaturedumps->Model_name = $request->Session()->get('Modeldata');
       $Modelfeaturedumps->feature_name = $request->input('feature_name');
       $Modelfeaturedumps->Featurevalues = $request->input('Featurevalues');
       
        // $Modelfeaturedumps =new Modelfeaturedump();
        if($request->hasFile('Modelimage')){
            $file = $request->file('Modelimage');
            $filename = time().'.'.$file->extension();
            $file->move('UploadImages/NewModel/', $filename);
            $Modelfeaturedumps->Modelimage = $filename;

        }
        
          $Modelfeaturedumps-> save();
         return view('NewModel.twowheeler',['users'=>$users],['usersc'=>$usersc]);
        
    }

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
