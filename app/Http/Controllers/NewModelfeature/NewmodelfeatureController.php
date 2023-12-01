<?php

namespace App\Http\Controllers\NewModelfeature;
use App\Models\Newmodelfeature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class NewmodelfeatureController extends Controller
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
       $NewFeaturemodel = new Newmodelfeature();
       $NewFeaturemodel->Model_name = $request->Session()->get('Modeldata');
       $NewFeaturemodel->feature_name = $request->input('feature_name');
    //   $NewFeaturemodel->Featurevalues = $request->input('Featurevalues');
      if ($NewFeaturemodel->Featurevalues != 'Enter Value'){
          
         $NewFeaturemodel->Featurevalues = $request->input('Featurevalues');  
      }
      else{
          
         $NewFeaturemodel->Featurevalues = $request->input('Featurevalues');
      }
      
       $NewFeaturemodel->Featuredescription = 'Featuredescription';
       $NewFeaturemodel->save();
       $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        // $users = DB::select('select * from newfeaturemasters WHERE Products="2wheel" ');
       return view('NewModel.twowheeler',['users'=>$users],['usersc'=>$usersc]);

    }
    
     public function threewheelcargostore(Request $request)
    {
       $NewFeaturemodel = new Newmodelfeature();
       $NewFeaturemodel->Model_name = $request->Session()->get('Modeldata');
       $NewFeaturemodel->feature_name = $request->input('feature_name');
       $NewFeaturemodel->Featurevalues = $request->input('Featurevalues');
       $NewFeaturemodel->Featuredescription = 'Featuredescription';
       $NewFeaturemodel->save();
       return view('NewModel.threewheelercargo');

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
