<?php

namespace App\Http\Controllers\Admin;
use App\Models\threewcargospecs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;

class admin3wspecscargoController extends Controller
{
    public function create(){
           $threewcargospecs = threewcargospecs::all();
         return view ('Admin/Adminlayout/3wspecscargo/create')->with('threewcargospecs', $threewcargospecs);
    }
    public function addmodel(){
         return view ('Admin/Adminlayout/3wspecscargo/3wcargoaddnewmodel');
    }
     public function store(Request $request){
        $threewcargospecs = new threewcargospecs();
        $threewcargospecs->make = $request->input('vehicle_type');
        $threewcargospecs->model_name = $request->input('model_name');
        $threewcargospecs->model_description = $request->input('model_description');
        $threewcargospecs->version_name = $request->input('version_name');
        $threewcargospecs->special_limited_edition = $request->input('special_limited_edition');
        $threewcargospecs->Fuel = $request->input('Fuel');
        $threewcargospecs->Product_Launch_Date = $request->input('Product_Launch_Date');
        $threewcargospecs->Product_Launch_Month = $request->input('Product_Launch_Month');
        $threewcargospecs->Product_Launch_Year = $request->input('Product_Launch_Year');
        $threewcargospecs->Model_Year = $request->input('Model_Year');
        $threewcargospecs->Year_of_Manufacturing = $request->input('Year_of_Manufacturing');
        $threewcargospecs->Trim_Level = $request->input('Trim_Level');
        $threewcargospecs->Country = $request->input('Country');
        $threewcargospecs->Price_Ex_Showroom = $request->input('Price_Ex_Showroom');
        $threewcargospecs->Motor_Description = $request->input('Motor_Description');
        
        $threewcargospecs->save();
        
        if($threewcargospecs){
            return back()->with('Success', 'Data have been successfully added..!!');
        }else{
            return back()->with('Fail','Something went wrong..!');
        }

         return view ('Admin/Adminlayout/wspecscargo/create');
        
    }
    public function edit($model_id){
        $threewcargospecs = threewcargospecs::find($model_id);
        return view('Admin/Adminlayout/3wspecscargo/edit',compact('threewcargospecs'));
    }
    public function update(Request $request, $model_id)
    {
        $threewcargospecs = threewcargospecs::find($model_id);
        $threewcargospecs->make = $request->input('vehicle_type');
        $threewcargospecs->model_name = $request->input('model_name');
        $threewcargospecs->model_description = $request->input('model_description');
        $threewcargospecs->version_name = $request->input('version_name');
        $threewcargospecs->special_limited_edition = $request->input('special_limited_edition');
        $threewcargospecs->Fuel = $request->input('Fuel');
        $threewcargospecs->Product_Launch_Date = $request->input('Product_Launch_Date');
        $threewcargospecs->Product_Launch_Month = $request->input('Product_Launch_Month');
        $threewcargospecs->Product_Launch_Year = $request->input('Product_Launch_Year');
        $threewcargospecs->Model_Year = $request->input('Model_Year');
        $threewcargospecs->Year_of_Manufacturing = $request->input('Year_of_Manufacturing');
        $threewcargospecs->Trim_Level = $request->input('Trim_Level');
        $threewcargospecs->Country = $request->input('Country');
        $threewcargospecs->Price_Ex_Showroom = $request->input('Price_Ex_Showroom');
        $threewcargospecs->Motor_Description = $request->input('Motor_Description');
        $threewcargospecs->update();
        
       return redirect()->back()->with('status','Updated Successfully');
    }
    
}
