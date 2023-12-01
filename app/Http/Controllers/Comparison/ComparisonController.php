<?php

namespace App\Http\Controllers\Comparison;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use App\Models\Twowheelerspecsfeature;
use App\Models\Threewheelerpassfeature;
use App\Models\Threewheelercargofeature;
use App\Models\Fourwheelerspecsfeature;


class ComparisonController extends Controller
{

    public function Comparision_Two_Wheeler_Specs(Request $request)
    {

        $sql = "select * from twowheelerspecsfeatures Where Status='Active'  ORDER BY id DESC";
        $TwoWheelerSpecs = DB::select($sql);


        return view('DekhoevWebsite.Comparison.two_wheeler', ['TwoWheelerSpecs ' => $TwoWheelerSpecs],
		)->with('TwoWheelerSpecs', $TwoWheelerSpecs);
    }
    public function Comparision_Three_Wheeler_Cargo(Request $request)
    {

 
        $sql = "select * from threewheelercargofeatures  Where Status='Active'  ORDER BY id DESC ";
        $ThreeWheelerCargo = DB::select($sql);

        return view('DekhoevWebsite.Comparison.three_wheeler_cargo', ['ThreeWheelerCargo' => $ThreeWheelerCargo])
            ->with('ThreeWheelerCargo', $ThreeWheelerCargo);
    }


    public function Comparision_Three_Wheeler_Pass(Request $request)
    {
        $sql = "select * from threewheelerpassfeatures Where Status='Active'  ORDER BY id DESC ";
        $ThreeWheelerPass = DB::select($sql);

        return view('DekhoevWebsite.Comparison.three_wheeler_pass', ['ThreeWheelerPass ' => $ThreeWheelerPass])->with('ThreeWheelerPass', $ThreeWheelerPass);
    }
    public function Comparision_Four_Wheeler_Specs(Request $request)
    {
        $sql = "select * from fourwheelerspecsfeatures Where Status='Active'  ORDER BY id DESC ";
        $FourWheelerSpecs = DB::select($sql);
        return view('DekhoevWebsite.Comparison.four_wheeler', ['FourWheelerSpecs ' => $FourWheelerSpecs])->with('FourWheelerSpecs', $FourWheelerSpecs);
    }

//Three Wheeler Pass Image Replace Ajax Controller

    public function Comparision_Three_Wheeler_Pass_ajax(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from threewheelerpassfeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }
     public function Comparision_Three_Wheeler_Pass_ajax1(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from threewheelerpassfeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }
    public function Comparision_Three_Wheeler_Pass_ajax2(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from threewheelerpassfeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }

    //Three Wheeler Cargo Image Replace Ajax Controller
    
    public function Comparision_Three_Wheeler_Cargo_ajax(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from threewheelercargofeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }
     public function Comparision_Three_Wheeler_Cargo_ajax1(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from threewheelercargofeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }
    public function Comparision_Three_Wheeler_Cargo_ajax2(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from threewheelercargofeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }


    //Two Wheeler Image Replace Ajax Controller
    
    public function Comparision_Two_Wheeler_ajax(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from twowheelerspecsfeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }
     public function Comparision_Two_Wheeler_ajax1(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from twowheelerspecsfeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }
    public function Comparision_Two_Wheeler_ajax2(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from twowheelerspecsfeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }

    //Four Wheeler Image Replace Ajax Controller
    
    public function Comparision_Four_Wheeler_ajax(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from fourwheelerspecsfeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }
     public function Comparision_Four_Wheeler_ajax1(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from fourwheelerspecsfeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }
    public function Comparision_Four_Wheeler_ajax2(Request $request)
    {
        $imgr = $request->imgr;
        $sql= "select Modelimage from fourwheelerspecsfeatures where id='$imgr' ";
        $imgs = DB::select($sql);   
		return $imgs[0]->Modelimage;   
    }
}
