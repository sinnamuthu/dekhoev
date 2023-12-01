<?php

namespace App\Http\Controllers\Admin;
use App\Models\twowspecs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;

class admin2wspecsController extends Controller
{
    public function create(){
          $twowspecs= twowspecs::all();
         return view ('/Admin/Adminlayout/2wspecs/create')->with('twowspecs', $twowspecs);
        // return view ('/Admin/Adminlayout/2wspecs/create');
    }
     public function addmodel(){
         return view ('Admin/Adminlayout/2wspecs/2waddnewmodel');
    }
         public function store(Request $request){
        $twowspecs = new twowspecs();
        $twowspecs->make = $request->input('vehicle_type');
        $twowspecs->model_name = $request->input('model_name');
        $twowspecs->model_description = $request->input('model_description');
        $twowspecs->version_name = $request->input('version_name');
        $twowspecs->special_limited_edition = $request->input('special_limited_edition');
        $twowspecs->Fuel = $request->input('Fuel');
        $twowspecs->Product_Launch_Date = $request->input('Product_Launch_Date');
        $twowspecs->Product_Launch_Month = $request->input('Product_Launch_Month');
        $twowspecs->Product_Launch_Year = $request->input('Product_Launch_Year');
        $twowspecs->Model_Year = $request->input('Model_Year');
        $twowspecs->Year_of_Manufacturing = $request->input('Year_of_Manufacturing');
        $twowspecs->Trim_Level = $request->input('Trim_Level');
        $twowspecs->Country = $request->input('Country');
        $twowspecs->Price_Ex_Showroom = $request->input('Price_Ex_Showroom');
        $twowspecs->Motor_Description = $request->input('Motor_Description');
        
        $twowspecs->save();
        
        if($twowspecs){
            return back()->with('Success', 'Data have been successfully added..!!');
        }else{
            return back()->with('Fail','Something went wrong..!');
        }

         return view ('Admin/Adminlayout/2wspecs/create');
        
    }
     public function edit($model_id){
        $twowspecs = twowspecs::find($model_id);
        return view('Admin/Adminlayout/2wspecs/edit',compact('twowspecs'));
    }
    
    public function update(Request $request, $model_id){
        
        $twowspecs = twowspecs::find($model_id);
        $twowspecs->make = $request->input('vehicle_type');
        $twowspecs->model_name = $request->input('model_name');
        $twowspecs->model_description = $request->input('model_description');
        $twowspecs->version_name = $request->input('version_name');
        $twowspecs->special_limited_edition = $request->input('special_limited_edition');
        $twowspecs->Fuel = $request->input('Fuel');
        $twowspecs->Product_Launch_Date = $request->input('Product_Launch_Date');
        $twowspecs->Product_Launch_Month = $request->input('Product_Launch_Month');
        $twowspecs->Product_Launch_Year = $request->input('Product_Launch_Year');
        $twowspecs->Model_Year = $request->input('Model_Year');
        $twowspecs->Year_of_Manufacturing = $request->input('Year_of_Manufacturing');
        $twowspecs->Trim_Level = $request->input('Trim_Level');
        $twowspecs->Country = $request->input('Country');
        $twowspecs->Price_Ex_Showroom = $request->input('Price_Ex_Showroom');
        $twowspecs->Motor_Description = $request->input('Motor_Description');
        
        $twowspecs->update();
        
         return redirect()->back()->with('status','Updated Successfully');
    }
    
}
