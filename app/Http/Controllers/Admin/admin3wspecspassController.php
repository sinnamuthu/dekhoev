<?php

namespace App\Http\Controllers\Admin;
use App\Models\threewpassspecs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;

class admin3wspecspassController extends Controller
{
    public function create(){
           $threewpassspecs =threewpassspecs ::all();
         return view ('Admin/Adminlayout/3wspecspass/create')->with('threewpassspecs', $threewpassspecs);
    }
    public function addmodel(){
         return view ('Admin/Adminlayout/3wspecspass/3wpassaddnewmodel');
    }
    
    public function store(Request $request){
        $threewpassspecs = new threewpassspecs();
        $threewpassspecs->make = $request->input('vehicle_type');
        $threewpassspecs->model_name = $request->input('model_name');
        $threewpassspecs->model_description = $request->input('model_description');
        $threewpassspecs->version_name = $request->input('version_name');
        $threewpassspecs->special_limited_edition = $request->input('special_limited_edition');
        $threewpassspecs->Fuel = $request->input('Fuel');
        $threewpassspecs->Product_Launch_Date = $request->input('Product_Launch_Date');
        $threewpassspecs->Product_Launch_Month = $request->input('Product_Launch_Month');
        $threewpassspecs->Product_Launch_Year = $request->input('Product_Launch_Year');
        $threewpassspecs->Model_Year = $request->input('Model_Year');
        $threewpassspecs->Year_of_Manufacturing = $request->input('Year_of_Manufacturing');
        $threewpassspecs->Trim_Level = $request->input('Trim_Level');
        $threewpassspecs->Country = $request->input('Country');
        $threewpassspecs->Price_Ex_Showroom = $request->input('Price_Ex_Showroom');
        $threewpassspecs->Motor_Description = $request->input('Motor_Description');
        
        $threewpassspecs->save();
        
        if($threewpassspecs){
            return back()->with('Success', 'Data have been successfully added..!!');
        }else{
            return back()->with('Fail','Something went wrong..!');
        }

         return view ('Admin/Adminlayout/3wspecspass/create');
    
        }
         public function edit($model_id){
                $threewpassspecs = threewpassspecs::find($model_id);
                return view('Admin/Adminlayout/3wspecspass/edit',compact('threewpassspecs'));
         }
         public function update(Request $request, $model_id)
        {
            $threewpassspecs = threewpassspecs::find($model_id);
            $threewpassspecs->make = $request->input('vehicle_type');
            $threewpassspecs->model_name = $request->input('model_name');
            $threewpassspecs->model_description = $request->input('model_description');
            $threewpassspecs->version_name = $request->input('version_name');
            $threewpassspecs->special_limited_edition = $request->input('special_limited_edition');
            $threewpassspecs->Fuel = $request->input('Fuel');
            $threewpassspecs->Product_Launch_Date = $request->input('Product_Launch_Date');
            $threewpassspecs->Product_Launch_Month = $request->input('Product_Launch_Month');
            $threewpassspecs->Product_Launch_Year = $request->input('Product_Launch_Year');
            $threewpassspecs->Model_Year = $request->input('Model_Year');
            $threewpassspecs->Year_of_Manufacturing = $request->input('Year_of_Manufacturing');
            $threewpassspecs->Trim_Level = $request->input('Trim_Level');
            $threewpassspecs->Country = $request->input('Country');
            $threewpassspecs->Price_Ex_Showroom = $request->input('Price_Ex_Showroom');
            $threewpassspecs->Motor_Description = $request->input('Motor_Description');
            $threewpassspecs->update();
            
           return redirect()->back()->with('status','Updated Successfully');
         }
}