<?php

namespace App\Http\Controllers\Admin;
// use App\Models\Fourwheelerspecsfeature;
use App\Models\fourwspecs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;

class admin4wspecsController extends Controller
{
    public function create(Request $request){
        $fourwspecs= fourwspecs::all();
         return view ('/Admin/Adminlayout/4wspecs/create')->with('fourwspecs', $fourwspecs);
    }
    public function addmodel(){
         return view ('Admin/Adminlayout/4wspecs/4waddnewmodel');
    }
     public function store(Request $request){
        $fourwspecs = new fourwspecs();
        $fourwspecs->make = $request->input('vehicle_type');
        $fourwspecs->model_name = $request->input('model_name');
        $fourwspecs->model_description = $request->input('model_description');
        $fourwspecs->version_name = $request->input('version_name');
        $fourwspecs->special_limited_edition = $request->input('special_limited_edition');
        $fourwspecs->Fuel = $request->input('Fuel');
        $fourwspecs->Product_Launch_Date = $request->input('Product_Launch_Date');
        $fourwspecs->Product_Launch_Month = $request->input('Product_Launch_Month');
        $fourwspecs->Product_Launch_Year = $request->input('Product_Launch_Year');
        $fourwspecs->Model_Year = $request->input('Model_Year');
        $fourwspecs->Year_of_Manufacturing = $request->input('Year_of_Manufacturing');
        $fourwspecs->Trim_Level = $request->input('Trim_Level');
        $fourwspecs->Country = $request->input('Country');
        $fourwspecs->Price_Ex_Showroom = $request->input('Price_Ex_Showroom');
        $fourwspecs->Motor_Description = $request->input('Motor_Description');
        
        $fourwspecs->save();
        
        if($fourwspecs){
            return back()->with('Success', 'Data have been successfully added..!!');
        }else{
            return back()->with('Fail','Something went wrong..!');
        }

         return view ('Admin/Adminlayout/4wspecs/create');
        
    }
    public function edit($model_id){
        $fourwspecs = fourwspecs::find($model_id);
        return view('Admin/Adminlayout/4wspecs/edit',compact('fourwspecs'));
    }
    
    public function update(Request $request, $model_id)
    {
        $fourwspecs = fourwspecs::find($model_id);
        $fourwspecs->make = $request->input('vehicle_type');
        $fourwspecs->model_name = $request->input('model_name');
        $fourwspecs->model_description = $request->input('model_description');
        $fourwspecs->version_name = $request->input('version_name');
        $fourwspecs->special_limited_edition = $request->input('special_limited_edition');
        $fourwspecs->Fuel = $request->input('Fuel');
        $fourwspecs->Product_Launch_Date = $request->input('Product_Launch_Date');
        $fourwspecs->Product_Launch_Month = $request->input('Product_Launch_Month');
        $fourwspecs->Product_Launch_Year = $request->input('Product_Launch_Year');
        $fourwspecs->Model_Year = $request->input('Model_Year');
        $fourwspecs->Year_of_Manufacturing = $request->input('Year_of_Manufacturing');
        $fourwspecs->Trim_Level = $request->input('Trim_Level');
        $fourwspecs->Country = $request->input('Country');
        $fourwspecs->Price_Ex_Showroom = $request->input('Price_Ex_Showroom');
        $fourwspecs->Motor_Description = $request->input('Motor_Description');
        $fourwspecs->update();
      
    
        // return view ('/Admin/Adminlayout/4wspecs/create')->with(compact('fourwspecs'),$fourwspecs);
      return redirect('/Admin/Adminlayout/4wspecs/create')->back()->with('status','Updated Successfully');
      
    }

}