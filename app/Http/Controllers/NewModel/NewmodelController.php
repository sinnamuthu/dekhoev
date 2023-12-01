<?php

namespace App\Http\Controllers\NewModel;
use App\Models\newmodel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use DB;




class NewmodelController extends Controller
{

    public function index()
    {
       
       return view('NewModel.create');
    }

    public function create()
    {
        $NewModels = NewModel::all();
        return view ('NewModel.create')->with('NewModel', $NewModels);
    }
    public function createnewmodel()
    {
        return view('NewModel.createnewmodel');
    }
    public function twowheeler(Request $request)
    {
        $currentcate = new newmodel();  
        $currentcate = $request->session()->get('cate'); 
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        return view('NewModel.twowheeler',['users'=>$users],['usersc'=>$usersc]);
       
    }
    
    public function threewheelercargo()
    {
         $users = DB::select('select * from newfeaturemasters WHERE Products="3wheelcargo" ');
         return view('NewModel.threewheelercargo',['users'=>$users]);
    }
    
     public function fourwheeler()
    {
       return view('NewModel.fourwheeler');
    }
       public function threewheeler()
    {
       return view('NewModel.threewheeler');
    }
        public function fourwheelercategory(Request $request)
    {
          $currentcate = new newmodel();  
          $currentcate  = $request->input('cate');        
          session()->put('cate', $currentcate);
    //   return view('NewModel.twowheelercategory');
       
       return view('NewModel.fourwheelercategory');
    }
      public function twowheelercategory(Request $request)
    {
        $currentcate = new newmodel();  
          $currentcate  = $request->input('cate');        
          session()->put('cate', $currentcate);
       return view('NewModel.twowheelercategory');
    }
     public function threewheelercargocategory(Request $request)
    {
          $currentcate = new newmodel();  
          $currentcate  = $request->input('cate');        
          session()->put('cate', $currentcate);
       return view('NewModel.threewheelercargocategory');
    }
         public function threewheelerpasscategory(Request $request)
    {
       $currentcate = new newmodel();  
          $currentcate  = $request->input('cate');        
          session()->put('cate', $currentcate);
       return view('NewModel.threewheelerpasscategory');
    }
         public function featurepart(Request $request)
    {
        $currentcate = new newmodel();  
        $currentcate  = $request->input('cate');        
        session()->put('cate', $currentcate);
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        // $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        // $usersc = DB::select($sql1);
       return view('NewModel.featurepart',['users'=>$users]);
    }

    public function store(Request $request)
    {
     
        $valuecat = $request->session()->get('cate'); 
        $valuecategory = $request->session()->get('category');
        $Newmodels = new newmodel();
        $Newmodels->Products = $valuecat;
        $Newmodels->Category=$valuecategory;
        $Newmodels->OEM_name = $request->input('OEM_name');
        $Newmodels->model_name = $Newmodels->OEM_name;
        $Newmodels->Status ='Model Added';
        $existmodel = $request->session()->get('Status');
        $Newmodels->Save();
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $currentmodel = new newmodel(); 
         
        $currentmodel  = $request->input('model_name');        
        session()->put('Modeldata', $currentmodel);
        
        $currentoem  = $request->input('OEM_name');        
        session()->put('OEM_name', $currentoem);

        return view('NewModel.fourwheelerspecsfeature',['users'=>$users],['usersc'=>$usersc])->with('OEM Master Added Successfully');
        
    }
    public function storetpass(Request $request)
    {
     
        $valuecat = $request->session()->get('cate'); 
        $valuecategory = $request->session()->get('category');
        $Newmodels = new newmodel();
        $Newmodels->Products = $valuecat;
        $Newmodels->Category=$valuecategory;
        $Newmodels->OEM_name = $request->input('OEM_name');
        $Newmodels->model_name = $Newmodels->OEM_name;
        $Newmodels->Status ='Model Added';
        $existmodel = $request->session()->get('Status');
        $Newmodels->Save();
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $currentmodel = new newmodel();  
        $currentmodel  = $request->input('model_name');        
        session()->put('Modeldata', $currentmodel);
        $currentoem  = $request->input('OEM_name');        
        session()->put('OEM_name', $currentoem);
        return view('NewModel.threewheelerpassfeature',['users'=>$users],['usersc'=>$usersc]);
        
    }
    public function storetwospecs(Request $request)
    {
     
        $valuecat = $request->session()->get('cate'); 
        $valuecategory = $request->session()->get('category');
        $Newmodels = new newmodel();
        $Newmodels->Products = $valuecat;
        $Newmodels->Category=$valuecategory;
        $Newmodels->OEM_name = $request->input('OEM_name');
        $Newmodels->model_name = $Newmodels->OEM_name;
        $Newmodels->Status ='Model Added';
        $existmodel = $request->session()->get('Status');
        $Newmodels->Save();
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $currentmodel = new newmodel();  
        $currentmodel  = $request->input('model_name');        
        session()->put('Modeldata', $currentmodel);
        $currentoem  = $request->input('OEM_name');        
        session()->put('OEM_name', $currentoem);
        return view('NewModel.twowheelerspecsfeature',['users'=>$users],['usersc'=>$usersc]);
        
    }
    public function tcargostore(Request $request)
    {
     
        $valuecat = $request->session()->get('cate'); 
        $valuecategory = $request->session()->get('category');
        $Newmodels = new newmodel();
        $Newmodels->Products = $valuecat;
        $Newmodels->Category=$valuecategory;
        $Newmodels->OEM_name = $request->input('OEM_name');
        $Newmodels->model_name = $Newmodels->OEM_name;
        $Newmodels->Status ='Model Added';
        $existmodel = $request->session()->get('Status');
        $Newmodels->Save();
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $currentmodel = new newmodel();  
        $currentmodel  = $request->input('model_name');        
        session()->put('Modeldata', $currentmodel);
        $currentoem  = $request->input('OEM_name');        
        session()->put('OEM_name', $currentoem);
        
        return view('NewModel.threewheelercargofeature',['users'=>$users],['usersc'=>$usersc]);
        
    }


    public function update(Request $request)
    {

        $id =session()->get('ida');
        $OEM = $request->input('OEM_name');
        session()->put('OEM_name', $OEM);        
        $ModelName = $request->input('model_name');
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql2 = " UPDATE fourwheelerspecsfeatures SET model_name='$OEM' , OEM_name='$OEM' WHERE id='$id' ";
        $usersm = DB::select($sql2);                
        $sql3 = "select * from fourwheelerspecsfeatures WHERE id='$id' ";
        $fourwheelerspecs = DB::select($sql3);
        
        $sql4 = " UPDATE newmodels SET model_name='$OEM' , OEM_name='$OEM' WHERE id='$id' ";
        $usersoem = DB::select($sql4); 
        

        return view('NewModel.fourwheelerspecsfeaturedit',['users'=>$users],['usersoem'=>$usersoem],['usersc'=>$usersc],['usersm'=>$usersm],['fourwheelerspecs'=>$fourwheelerspecs])->with('fourwheelerspecs',$fourwheelerspecs)->with('usersc',$usersc)->with('usersoem',$usersoem );
       
    }
    public function twospecsupdate(Request $request)
    {

        $id =session()->get('ida');
        $OEM = $request->input('OEM_name');
        session()->put('OEM_name', $OEM); 
        $ModelName = $request->input('model_name');
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql2 = " UPDATE twowheelerspecsfeatures SET model_name='$OEM' , OEM_name='$OEM'  WHERE id='$id' ";
        $usersm = DB::select($sql2);

	    $sql3 = "select * from twowheelerspecsfeatures WHERE id='$id' ";
        $Twowheelerspecs = DB::select($sql3);
        
        return view('NewModel.twowheelerspecsfeaturedit',['users'=>$users],['usersc'=>$usersc],['usersm'=>$usersm],['Twowheelerspecs'=>$Twowheelerspecs])->with('Twowheelerspecs',$Twowheelerspecs);
       
    }
     public function threewheelercargoupdate(Request $request)
    {

        $id =session()->get('ida');
        $OEM = $request->input('OEM_name');
        session()->put('OEM_name', $OEM); 
        $ModelName = $request->input('model_name');
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql2 = " UPDATE threewheelercargofeatures SET  model_name='$OEM' , OEM_name='$OEM' WHERE id='$id' ";
        $usersm = DB::select($sql2);
        

	    $sql3 = "select * from threewheelercargofeatures  WHERE id='$id' ";
        $threewheelercargo = DB::select($sql3);

        return view('NewModel.threewheelercargofeaturedit',['users'=>$users],['usersc'=>$usersc],['usersm'=>$usersm],['$threewheelercargo'=>$threewheelercargo])->with('threewheelercargo',$threewheelercargo);
       
    }
      public function threewheelerpassupdate(Request $request)
    {

        $id =session()->get('ida');
        $OEM = $request->input('OEM_name');
        session()->put('OEM_name', $OEM); 
        $ModelName = $request->input('model_name');
        // $status->Status ='Model Added';
        // $Newmodels->Save();
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql2 = " UPDATE threewheelerpassfeatures SET  model_name='$OEM' , OEM_name='$OEM' WHERE id='$id' ";
        $usersm = DB::select($sql2);
        
	    $sql3 = "select * from threewheelerpassfeatures WHERE id='$id' ";
        $threewheelerpass = DB::select($sql3);

        return view('NewModel.threewheelerpassfeaturedit',['users'=>$users],['usersc'=>$usersc],['usersm'=>$usersm],['threewheelerpass'=>$threewheelerpass])->with('threewheelerpass',$threewheelerpass);
       
    }


    public function destroy($id)
    {
        //
    }

    
    
    
}


