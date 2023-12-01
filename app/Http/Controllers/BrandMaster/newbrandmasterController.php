<?php

namespace App\Http\Controllers\BrandMaster;
use App\Models\brandmaster;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;
use File;

class newbrandmasterController extends Controller
{

    public function index()
    {
        return view('BrandMaster.index');
    }
    public function two_specs_brand()
    {
        $sql ="select * from  brandmasters WHERE Products='2wheeler'";
        $two_specs_brand = DB::select();
        return view('BrandMaster.2Wspecsindex',['two_specs_brand'=>$two_specs_brand])->with('two_specs_brand',$two_specs_brand);
    }
    public function four_specs_brand()
    {
        $sql ="select * from  brandmasters WHERE Products='4wheeler'";
        $four_specs_brand = DB::select();
        return view('BrandMaster.4Wspecsindex',['four_specs_brand'=>$four_specs_brand])->with('four_specs_brand',$four_specs_brand);
    }
    public function three_pass_brand()
    {
        $sql ="select * from  brandmasters WHERE Products='3wheeler Pass'";
        $three_pass_brand = DB::select();
        return view('BrandMaster.3WPassindex',['three_pass_brand'=>$three_pass_brand])->with('three_pass_brand',$three_pass_brand);
    }
    public function three_cargo_brand()
    {
        $sql ="select * from  brandmasters WHERE Products='3wheeler Cargo'";
        $three_cargo_brand = DB::select();
        return view('BrandMaster.3WCargoindex',['three_cargo_brand'=>$three_cargo_brand])->with('three_cargo_brand',$three_cargo_brand);
    }

    public function create(Request $request)
    {
        $currentcate = new brandmaster();  
         $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        return view('BrandMaster.create');
    }
    public function twowheelersubcategory(Request $request)
    {
        $currentcate = new brandmaster();  
         $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        return view('BrandMaster.twowheelersubcategory');
    }
    public function fourwheelersubcategory(Request $request)
    {
        $currentcate = new brandmaster();  
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        return view('BrandMaster.fourwheelersubcategory');
    }
    public function threewheelercargosubcategory(Request $request)
    {
        $currentcate = new brandmaster();  
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        return view('BrandMaster.threewheelercargosubcategory');
    }
    public function threewheelerpasssubcategory(Request $request)
    {
        $currentcate = new brandmaster();  
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        return view('BrandMaster.threewheelerpasssubcategory');
    }
    
    public function store(Request $request)
    {
        $request->validate([
           'OEMImage'=>'image|mimes:jpeg,png,svg,jpg|max:50'    
        ]);
        
        $valuecat = $request->session()->get('cate');  
        $valuecategory = $request->session()->get('category');
        $Brandmaster = new brandmaster();
        $Brandmaster->Products =  $valuecat;
        $Brandmaster->Category=$valuecategory;
        $Brandmaster->new_oem_name =$request->input('new_oem_name');

        $Brandmaster->Question1=$request->input('Question1');
        $Brandmaster->Question2=$request->input('Question2');
        $Brandmaster->Question3=$request->input('Question3');
        
        $Brandmaster->Answer1=$request->input('Answer1');
        $Brandmaster->Answer2=$request->input('Answer2');
        $Brandmaster->Answer3=$request->input('Answer3');
  
            if($request->hasFile('OEMImage')){
            $file = $request->file('OEMImage');
            $filename = time().'.'.$file->GetClientOriginalName();
            // $file->resize(400,400, function($constarint){
            //     $constarint->aspectRatio();
            // });
            $file->move('UploadImages/BrandMaster/', $filename);
            $Brandmaster->OEMImage = $filename;

        }
        $Brandmaster->save();
        
       
        return view('BrandMaster.create')->with('success','OEM Brand  Added Successfully')->with('error','file should upload 400px * 400px');
    }

  
    public function show()
    {
        $Brandmaster =brandmaster::all();
        return view('BrandMaster.show')->with('Brandmaster',$Brandmaster);

    }

    public function edit($id)
    {
 
    $Brandmaster =brandmaster::find($id);
    return view('BrandMaster.edit',compact('Brandmaster'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'image'=>'image|mimes:jpeg,png,svg,jpg|max:50'
            ]);
        $Brandmaster =brandmaster::all();
        $Brandmaster = brandmaster::find($id);
        // $Brandmaster->Products = $request->input('Products');
        $Brandmaster->new_oem_name = $request->input('new_oem_name');

        $Brandmaster->Question1=$request->input('Question1');
        $Brandmaster->Question2=$request->input('Question2');
        $Brandmaster->Question3=$request->input('Question3');
        
        $Brandmaster->Answer1=$request->input('Answer1');
        $Brandmaster->Answer2=$request->input('Answer2');
        $Brandmaster->Answer3=$request->input('Answer3');
        
        if($request->hasFile('OEMImage')){
            $path='UploadImages/BrandMaster/'.$Brandmaster->OEMImage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('OEMImage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/BrandMaster/', $filename);
            $Brandmaster->OEMImage = $filename;

        }
        
        $Brandmaster->update();

        $oemname = $request->input('new_oem_name');
        session()->put('new_oem_name', $oemname);
        $oem = Session()->get('OEM_name');

        return redirect ('/BrandMaster/show')->with('Brandmaster',$Brandmaster)->with('success','OEM Brand Update Successfully');
    }

    public function destroy($id)
    {
         brandmaster::destroy($id);
        return back()->with('success', 'OEM Brand Deleted Successfully');
    }
}
