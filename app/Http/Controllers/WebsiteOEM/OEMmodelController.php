<?php

namespace App\Http\Controllers\WebsiteOEM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;

class OEMmodelController extends Controller
{


    public function Fourwheeler_OEM(Request $request)
    {
      
        
        $OEMName = $request->input('new_oem_name');
        session()->put('new_oem_name', $OEMName);

        $sql1 = "select * from brandmasters Where  Products='4wheeler' ORDER BY id DESC";
        $Oemvalues = DB::select($sql1);

        $sql2 = "select * from fourwheelerspecsfeatures where OEM_name='$OEMName' AND  Status='Active' ORDER BY id DESC";
        $fourwspecs = DB::select($sql2);
        return view('DekhoevWebsite/OEM/4Wheeler_OEM', ['fourwspecs' => $fourwspecs],['Oemvalues' => $Oemvalues])->with('fourwspecs', $fourwspecs)->with('Oemvalues',$Oemvalues);
    }


    public function Twowheeler_OEM(Request $request)
    {
        $OEMName = $request->input('new_oem_name');
        session()->put('new_oem_name', $OEMName);

        $sql1 = "select * from brandmasters Where Products='2wheeler' ORDER BY id DESC";
        $Oemvalues = DB::select($sql1);
        
        $sql2 = "select * from twowheelerspecsfeatures where OEM_name='$OEMName' AND  Status='Active'ORDER BY id DESC";
        $twowspecs = DB::select($sql2);

        return view('DekhoevWebsite/OEM/2Wheeler_OEM',['Oemvalues' => $Oemvalues])->with('twowspecs', $twowspecs)->with('Oemvalues',$Oemvalues);
    }


    public function Threewheeler_Cargo_OEM(Request $request)
    {
        $OEMName = $request->input('new_oem_name');
        session()->put('new_oem_name', $OEMName);

        $sql1 = "select * from brandmasters Where Products='3wheeler Cargo' ORDER BY id DESC ";
        $Oemvalues = DB::select($sql1);

        $sql2 = "select * from threewheelercargofeatures where OEM_name='$OEMName' AND  Status='Active' ORDER BY id DESC";
        $threewcargo = DB::select($sql2);
        return view('DekhoevWebsite/OEM/3Wheeler_Cargo_OEM', ['threewcargo' => $threewcargo],['Oemvalues' => $Oemvalues])->with('threewcargo', $threewcargo)->with('Oemvalues',$Oemvalues);
       
    }


    public function Allsearch(Request $request)
    {

   
         $searchdata = $request->input('search');

          $searchdata = addslashes($searchdata);

        $sqlpost = "select * from posts WHERE Posttitle LIKE '%$searchdata%' OR Postcontent LIKE '$searchdata' ORDER BY id DESC";
        $Posts = DB::select($sqlpost);

    

        $datas = explode('-', $searchdata, 2);

        // $searchdata =  $request->input('search');

       

        // $datas = explode("-",$searchdata);

        $brand_name = $datas[0];
        

        if(isset($datas[1])){

        $model_name = $datas[1];
       


        $sql_two = "SELECT Model_Name,Model_Description FROM twowheelerspecsfeatures WHERE Status ='Active' AND Model_Description = '$model_name'";
        $sql_twodata = DB::select($sql_two);

        $sql_threepass = "SELECT Model_Name,Model_Description FROM threewheelerpassfeatures WHERE Status ='Active' AND Model_Description = '$model_name'";
        $sql_threepassdata = DB::select($sql_threepass);

        $sql_threecargo = "SELECT Model_Name,Model_Description FROM threewheelercargofeatures WHERE Status ='Active' AND Model_Description = '$model_name' ";
        $sql_threecargodata = DB::select($sql_threecargo);

        $sql_four = "SELECT Model_Name,Model_Description FROM fourwheelerspecsfeatures WHERE Status ='Active' AND Model_Description = '$model_name'";
        $sql_fourdata = DB::select($sql_four);





        if(count($sql_twodata) >= 1)
        {
       

            $model_name = str_replace(" ","_",$model_name);

             $fullkey = $brand_name.'-'.$model_name;
             return redirect('/Two-Wheeler/'.$fullkey);
           
        }
        elseif(count($sql_threepassdata) >= 1){
        
             $model_name = str_replace(" ","_",$model_name);
             $fullkey = $brand_name.'-'.$model_name;
             return redirect('/Three-Wheeler-Pass/'.$fullkey);
        }
        elseif(count($sql_threecargodata) >= 1)
        {
       
             $model_name = str_replace(" ","_",$model_name);
             $fullkey = $brand_name.'-'.$model_name;
             return redirect('/Three-Wheeler-Cargo/'.$fullkey);
        }
        elseif(count($sql_fourdata) >= 1){
          
             $model_name = str_replace(" ","_",$model_name);
             $fullkey = $brand_name.'-'.$model_name;

            return redirect('/Four-Wheeler/'.$fullkey);
        }
        else{ 

 

            if(isset($Posts))
            {
                return view('DekhoevWebsite/data-not-found',['Posts' => $Posts])->with('Posts', $Posts);
            }
            else{
                return view('DekhoevWebsite/data-not-found');
            }
   

   

                   }

   

    }
    else{

        $sqlpost = "select * from posts WHERE Posttitle LIKE '%$searchdata%' OR Postcontent LIKE '$searchdata' ORDER BY id DESC";
        $Posts = DB::select($sqlpost);

        $sql_two = "SELECT Model_Name,Model_Description FROM twowheelerspecsfeatures WHERE Status ='Active' AND Model_Description LIKE '%$searchdata%' OR Model_Name LIKE '%$searchdata%' ORDER BY id DESC ";
        $sql_twodata = DB::select($sql_two);

        $sql_threepass = "SELECT Model_Name,Model_Description FROM threewheelerpassfeatures WHERE Status ='Active' AND Model_Description LIKE '%$searchdata%' OR Model_Name LIKE '%$searchdata%' ORDER BY id DESC ";
        $sql_threepassdata = DB::select($sql_threepass);

        $sql_threecargo = "SELECT Model_Name,Model_Description FROM threewheelercargofeatures WHERE Status ='Active' AND Model_Description LIKE '%$searchdata%' OR Model_Name LIKE '%$searchdata%' ORDER BY id DESC ";
        $sql_threecargodata = DB::select($sql_threecargo);

        $sql_four = "SELECT Model_Name,Model_Description FROM fourwheelerspecsfeatures WHERE Status ='Active' AND Model_Description LIKE '%$searchdata%' OR Model_Name LIKE '%$searchdata%' ORDER BY id DESC";
        $sql_fourdata = DB::select($sql_four);


        
        if(count($sql_twodata) >= 1)
        {
       
            $sql1 = "select * from brandmasters Where Products='2wheeler' ORDER BY updated_at  DESC";
            $Oemvalues = DB::select($sql1);
    
    
            $sql2 = "select *  from twowheelerspecsfeatures Where Status='Active' AND Model_Description LIKE '%$searchdata%' OR Model_Name LIKE '%$searchdata%' ORDER BY id DESC";
            $twowspecs = DB::select($sql2);
    
            $sql5 = "select * from metadescription Where id='6' ";
            $metadescription = DB::select($sql5);
            return view('DekhoevWebsite/two-wheeler-vehicle-catalogue', ['Posts' => $Posts], ['Oemvalues' => $Oemvalues], ['metadescription' => $metadescription])->with('Posts', $Posts)->with('twowspecs', $twowspecs)->with('Oemvalues', $Oemvalues)->with('metadescription', $metadescription);
    
           
        }
        elseif(count($sql_threepassdata) >= 1){
        
            $sql1 = "select * from brandmasters Where Products='3wheeler Pass' ORDER BY updated_at DESC";
            $Oemvalues = DB::select($sql1);
    
            $sql2 = "select * from threewheelerpassfeatures  Where Status='Active' AND Model_Description LIKE '%$searchdata%' OR Model_Name LIKE '%$searchdata%' ORDER BY id DESC";
            $threewpass = DB::select($sql2);
    
            $sql5 = "select * from metadescription Where id='8' ";
            $metadescription = DB::select($sql5);
    
            return view('DekhoevWebsite/three-wheeler-pass-vehicle-catalogue',['Posts' => $Posts], ['threewpass' => $threewpass], ['Oemvalues' => $Oemvalues], ['metadescription' => $metadescription])->with('Posts', $Posts)->with('threewpass', $threewpass)->with('Oemvalues', $Oemvalues)->with('metadescription', $metadescription);
    
        }
        elseif(count($sql_threecargodata) >= 1)
        {
       
            $sql1 = "select * from brandmasters Where Products='3wheeler Cargo' ORDER BY updated_at DESC";
            $Oemvalues = DB::select($sql1);
    
    
            $sql2 = "select * from threewheelercargofeatures Where Status='Active' AND Model_Description LIKE '%$searchdata%' OR Model_Name LIKE '%$searchdata%' ORDER BY id DESC";
            $threewcargo = DB::select($sql2);
    
            $sql5 = "select * from metadescription Where id='7' ";
            $metadescription = DB::select($sql5);
            return view('DekhoevWebsite/three-wheeler-cargo-vehicle-catalogue',['Posts' => $Posts], ['threewcargo' => $threewcargo], ['Oemvalues' => $Oemvalues], ['metadescription' => $metadescription])->with('Posts', $Posts)->with('threewcargo', $threewcargo)->with('Oemvalues', $Oemvalues)->with('metadescription', $metadescription);
    
        }
        elseif(count($sql_fourdata) >= 1){
          
        $sql1 = "select * from brandmasters  Where Products='4wheeler' ORDER BY updated_at DESC";
        $Oemvalues = DB::select($sql1);

        $sql2 = "select * from fourwheelerspecsfeatures Where Status='Active' AND Model_Description LIKE '%$searchdata%' OR Model_Name LIKE '%$searchdata%' ORDER BY id DESC";

        $fourwspecs = DB::select($sql2);

        $sql5 = "select * from metadescription Where id='5' ";
        $metadescription = DB::select($sql5);

        return view('DekhoevWebsite/four-wheeler-vehicle-catalogue',['Posts' => $Posts], ['fourwspecs' => $fourwspecs], ['Oemvalues' => $Oemvalues],['metadescription' => $metadescription])->with('Posts', $Posts)->with('fourwspecs', $fourwspecs)->with('Oemvalues', $Oemvalues)->with('metadescription', $metadescription);
        

        }
        else{ 

            return view('DekhoevWebsite/data-not-found',['Posts' => $Posts])->with('Posts', $Posts);

                   }





        
    }

       
    }



    public function Threewheeler_Pass_OEM(Request $request)
    {
        $OEMName = $request->input('new_oem_name');
        session()->put('new_oem_name', $OEMName);

        $sql1 = "select * from brandmasters Where Products='3wheeler Pass' ORDER BY id DESC";
        $Oemvalues = DB::select($sql1);

        $sql2 = "select * from threewheelerpassfeatures where OEM_name='$OEMName' AND  Status='Active' ORDER BY id DESC";
        $threewpass = DB::select($sql2);
        return view('DekhoevWebsite/OEM/3Wheeler_Pass_OEM', ['threewpass' => $threewpass],['Oemvalues' => $Oemvalues])->with('threewpass', $threewpass)->with('Oemvalues',$Oemvalues);
    }


}
