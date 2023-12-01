<?php

namespace App\Http\Controllers\Threewheelercargofeature;
use App\Models\Threewheelercargofeature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;


class ThreewheelercargofeatureController extends Controller
{

    public function index(Request $request)
    {
         $currentcate = $request->session()->get('cate');
         $currentcategory = $request->input('category');
         session()->put('category', $currentcategory);
         $Threewheelercargofeature = Threewheelercargofeature::all();
         return view ('NewModel.threewheelercargofeatureindex')->with('Threewheelercargofeature', $Threewheelercargofeature);
    }


    public function create(Request $request)
    {
        // $currentcate = $request->session()->get('cate'); 
         $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        return view ('NewModel.threewheelercargofeature',['users'=>$users],['usersc'=>$usersc]);
    }

     public function store(Request $request)
    {
        $request->validate([
          'Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
          'Front_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
          'Back_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
          'Leftside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
          'Rightside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
        ]);
        $Threewheelercargofeature = new Threewheelercargofeature();
        $valuecat = $request->session()->get('cate');
        $Threewheelercargofeature->Products = $valuecat;
        // $valuecategory = $request->session()->get('category');
        // $Threewheelercargofeature->Category=$valuecategory;
        $Threewheelercargofeature->Model_name = $request->Session()->get('OEM_name');
	    $Threewheelercargofeature->OEM_name=$request->Session()->get('OEM_name');
        $Threewheelercargofeature->Status ='Active';

        $oem = Session()->get('OEM_name');
        $mn = Session()->get('Modeldata');

          $Threewheelercargofeature ->Question1=$request->input('Question1');
          $Threewheelercargofeature ->Question2=$request->input('Question2');
          $Threewheelercargofeature ->Question3=$request->input('Question3');
          $Threewheelercargofeature ->Question4=$request->input('Question4');
          $Threewheelercargofeature ->Question5=$request->input('Question5');
        
          $Threewheelercargofeature ->Answer1=$request->input('Answer1');
          $Threewheelercargofeature ->Answer2=$request->input('Answer2');
          $Threewheelercargofeature ->Answer3=$request->input('Answer3');
          $Threewheelercargofeature ->Answer4=$request->input('Answer4');
          $Threewheelercargofeature ->Answer5=$request->input('Answer5');

          $Threewheelercargofeature ->Highlights=$request->input('Highlights');
          $Threewheelercargofeature ->productdesc=$request->input('productdesc');
          $Threewheelercargofeature ->altimageget=$request->input('altimageget');
          $Threewheelercargofeature ->altimageget2=$request->input('altimageget2');
          $Threewheelercargofeature ->altimageget3=$request->input('altimageget3');
          $Threewheelercargofeature ->altimageget4=$request->input('altimageget4');
          $Threewheelercargofeature ->altimageget5=$request->input('altimageget5');

        
        if($request->hasFile('Modelimage')){
            $file = $request->file('Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Modelimage = $filename;
        }
        if($request->hasFile('Front_Modelimage')){
            $file = $request->file('Front_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Front_Modelimage = $filename;
        }
        if($request->hasFile('Back_Modelimage')){
            $file = $request->file('Back_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Back_Modelimage = $filename;
        }
        if($request->hasFile('Leftside_Modelimage')){
            $file = $request->file('Leftside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Leftside_Modelimage = $filename;
        }
        if($request->hasFile('Rightside_Modelimage')){
            $file = $request->file('Rightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Rightside_Modelimage = $filename;
        }   

        $Threewheelercargofeature->save();
        
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql11 = "select * from threewheelercargofeatures ORDER BY id DESC LIMIT 1";
        $useri = DB::select($sql11);
        foreach($useri as $usi){
     $idsf = $usi->id;    
    }
        
       
        foreach($users as $usd){
          $fea =$usd->Feature_Name;
         $fea = str_replace(" ","_",$fea);
            $fea = str_replace("&","",$fea);
            $fea = str_replace("/","",$fea);
            $fea = str_replace("@","",$fea);
            $fea = str_replace("-","_",$fea);
            $fea = str_replace("(","_",$fea);
            $fea = str_replace(")","_",$fea);
            $fea = str_replace("{","_",$fea);
            $fea = str_replace("}","_",$fea);
            $fea = str_replace("[","_",$fea);
            $fea = str_replace("]","_",$fea);
            $fea = str_replace("'","_",$fea);
            $fea = str_replace("%","_",$fea);
            $fea = str_replace("?","_",$fea);
            $fea = str_replace("!","_",$fea);
            $fea = str_replace("*","_",$fea);
            $fea = str_replace("<","_",$fea);
            $fea = str_replace(">","_",$fea);
            $fea = str_replace("#","_",$fea);
            $fea = str_replace("~","_",$fea);
            $fea = str_replace(":","_",$fea);
            $fea = str_replace(";","_",$fea);
            $fea = str_replace(",","_",$fea);
            $fea = str_replace("+","_",$fea);
            $fea = str_replace("$","_",$fea);
            $fea = str_replace("^","_",$fea);
            $fea = str_replace("`","_",$fea);
         $fea = $request->input($fea);
        
         
        //  $Threewheelercargofeature->$usd=$request->input($usd);
         $fea_c = $usd->Feature_Name;
         $FName = str_replace(" ","_",$fea_c);
            $FName = str_replace("&","",$FName);
            $FName = str_replace("/","",$FName);
            $FName = str_replace("@","",$FName);
            $FName = str_replace("-","_",$FName);
            $FName = str_replace("(","_",$FName);
            $FName = str_replace(")","_",$FName);
            $FName = str_replace("{","_",$FName);
            $FName = str_replace("}","_",$FName);
            $FName = str_replace("[","_",$FName);
            $FName = str_replace("]","_",$FName);
            $FName = str_replace("'","_",$FName);
            $FName = str_replace("%","_",$FName);
            $FName = str_replace("?","_",$FName);
            $FName = str_replace("!","_",$FName);
            $FName = str_replace("*","_",$FName);
            $FName = str_replace("<","_",$FName);
            $FName = str_replace(">","_",$FName);
            $FName = str_replace("#","_",$FName);
            $FName = str_replace("~","_",$FName);
            $FName = str_replace(":","_",$FName);
            $FName = str_replace(";","_",$FName);
            $FName = str_replace(",","_",$FName);
            $FName = str_replace("+","_",$FName);
            $FName = str_replace("$","_",$FName);
            $FName = str_replace("^","_",$FName);
            $FName = str_replace("`","_",$FName);

         $sql2="UPDATE threewheelercargofeatures SET $FName = '$fea' WHERE id='$idsf' ";
        DB::statement($sql2);
         
            
        }
        $sql3 ="UPDATE brandmasters SET updated_at = '$Threewheelercargofeature->updated_at' WHERE new_oem_name='$oem' ";
        $OEMupdate=DB::select($sql3);
       
        return view('NewModel.threewheelercargofeature',['users'=>$users],['usersc'=>$usersc],['OEMupdate'=>$OEMupdate])->with('OEMupdate',$OEMupdate)->with('success','New 3W Cargo Model saved successfully');        
        
    }

    public function show(Request $request,$id)
    {
         $currentcate = $request->session()->get('cate'); 
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        session()->put('ida', $id);
        return view('NewModel.Threewheelercargofeatureshow',['users'=>$users]);
    }

     public function edit(Request $request, $id)
    {
        // $threewheelercargo=Threewheelercargofeature::find($id);
        $currentcate = $request->session()->get('cate'); 
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        // $sql2 = "select * from newmodels WHERE $id='ida'";
        // $useroem = DB::select($sql2);

        $sql3 = "select * from threewheelercargofeatures WHERE id='$id'";
        $threewheelercargo = DB::select($sql3);

        session()->put('ida', $id);
        return view('NewModel.threewheelercargofeaturedit',['users'=>$users],['usersc'=>$usersc],['threewheelercargo'=>$threewheelercargo],compact('threewheelercargo'))->with('threewheelercargo',$threewheelercargo);
        // ['useroem'=>$useroem])->with('useroem',$useroem);

    }


     public function update(Request $request)
    {
         $request->validate([
          'Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
          'Front_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
          'Back_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
          'Leftside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
          'Rightside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
        ]);
        $id = session()->get('ida');
        $Threewheelercargofeature= Threewheelercargofeature::find($id);


        $Question1 =$request->input('Question1');
        $Question2 =$request->input('Question2');
        $Question3 =$request->input('Question3');
        $Question4 =$request->input('Question4');
        $Question5 =$request->input('Question5');
        
        $Answer1 =$request->input('Answer1');
        $Answer2 =$request->input('Answer2');
        $Answer3 =$request->input('Answer3');
        $Answer4 =$request->input('Answer4');
        $Answer5 =$request->input('Answer5');

        $Highlights =$request->input('Highlights');
        $productdesc =$request->input('productdesc');
        $altimageget =$request->input('altimageget');
        $altimageget2 =$request->input('altimageget2');
        $altimageget3 =$request->input('altimageget3');
        $altimageget4 =$request->input('altimageget4');
        $altimageget5 =$request->input('altimageget5');

        // $Status =$request->input('Status');
        $OEMName =$request->input('OEM_name');
        // $modelname =$request->input('model_name');
        
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
   
   // image update Code 
        
        if($request->hasFile('Modelimage')){
            // $path='UploadImages/NewModel/Threewheelercargofeature'.$Threewheelercargofeature->Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Modelimage = $filename;
        }
        if($request->hasFile('Front_Modelimage')){
            // $path='UploadImages/NewModel/Threewheelercargofeature'.$Threewheelercargofeature->Front_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Front_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Front_Modelimage = $filename;
        }
        if($request->hasFile('Leftside_Modelimage')){
            // $path='UploadImages/NewModel/Threewheelercargofeature'.$Threewheelercargofeature->Leftside_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Leftside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Leftside_Modelimage = $filename;
        }
        if($request->hasFile('Back_Modelimage')){
            // $path='UploadImages/NewModel/Threewheelercargofeature'.$Threewheelercargofeature->Back_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Back_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Back_Modelimage = $filename;
        }
        if($request->hasFile('Rightside_Modelimage')){
            // $path='UploadImages/NewModel/Threewheelercargofeature'.$Threewheelercargofeature->Rightside_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Rightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Rightside_Modelimage = $filename;
        }
        
        
       //new update query
        foreach($users as $usd){
         $fea =$usd->Feature_Name;
         $fea = str_replace(" ","_",$fea);
            $fea = str_replace("&","",$fea);
            $fea = str_replace("/","",$fea);
            $fea = str_replace("@","",$fea);
            $fea = str_replace("-","_",$fea);
            $fea = str_replace("(","_",$fea);
            $fea = str_replace(")","_",$fea);
            $fea = str_replace("{","_",$fea);
            $fea = str_replace("}","_",$fea);
            $fea = str_replace("[","_",$fea);
            $fea = str_replace("]","_",$fea);
            $fea = str_replace("'","_",$fea);
            $fea = str_replace("%","_",$fea);
            $fea = str_replace("?","_",$fea);
            $fea = str_replace("!","_",$fea);
            $fea = str_replace("*","_",$fea);
            $fea = str_replace("<","_",$fea);
            $fea = str_replace(">","_",$fea);
            $fea = str_replace("#","_",$fea);
            $fea = str_replace("~","_",$fea);
            $fea = str_replace(":","_",$fea);
            $fea = str_replace(";","_",$fea);
            $fea = str_replace(",","_",$fea);
            $fea = str_replace("+","_",$fea);
            $fea = str_replace("$","_",$fea);
            $fea = str_replace("^","_",$fea);
            $fea = str_replace("`","_",$fea);
         $fea = $request->input($fea);
        
        
        //  $Threewheelercargofeature->$usd=$request->input($usd);
         $fea_c = $usd->Feature_Name;
         
         $FName = str_replace(" ","_",$fea_c);
            $FName = str_replace("&","",$FName);
            $FName = str_replace("/","",$FName);
            $FName = str_replace("@","",$FName);
            $FName = str_replace("-","_",$FName);
            $FName = str_replace("(","_",$FName);
            $FName = str_replace(")","_",$FName);
            $FName = str_replace("{","_",$FName);
            $FName = str_replace("}","_",$FName);
            $FName = str_replace("[","_",$FName);
            $FName = str_replace("]","_",$FName);
            $FName = str_replace("'","_",$FName);
            $FName = str_replace("%","_",$FName);
            $FName = str_replace("?","_",$FName);
            $FName = str_replace("!","_",$FName);
            $FName = str_replace("*","_",$FName);
            $FName = str_replace("<","_",$FName);
            $FName = str_replace(">","_",$FName);
            $FName = str_replace("#","_",$FName);
            $FName = str_replace("~","_",$FName);
            $FName = str_replace(":","_",$FName);
            $FName = str_replace(";","_",$FName);
            $FName = str_replace(",","_",$FName);
            $FName = str_replace("+","_",$FName);
            $FName = str_replace("$","_",$FName);
            $FName = str_replace("^","_",$FName);
            $FName = str_replace("`","_",$FName);
         
         $sql2="UPDATE threewheelercargofeatures SET $FName = '$fea' WHERE id='$id' ";
         DB::statement($sql2);
         
            
        }
        $Threewheelercargofeature->update();

        $sql3 = " UPDATE threewheelercargofeatures  SET Status='Active', Question1='$Question1', Question2='$Question2', Question3='$Question3' ,Question4='$Question4',
        Question5='$Question5', Answer1='$Answer1', Answer2='$Answer2', Answer3='$Answer3', Answer4='$Answer4', Answer5='$Answer5' ,Highlights='$Highlights',productdesc='$productdesc',altimageget='$altimageget',altimageget2='$altimageget2',altimageget3='$altimageget3',altimageget4='$altimageget4',altimageget5='$altimageget5'  WHERE id='$id' ";
        $usersm = DB::select($sql3);
        
        // $sql4 = " UPDATE newmodels SET OEM_name='$OEMName', WHERE id='$id' ";
        // $useroem = DB::select($sql4);
          //new update query
        return redirect('/Threewheelercargofeature/index')->with('success','Model updated successfully....!');
    }
    public function images_update(Request $request)
    {
        $request->validate([ 
            'Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
            'Front_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
            'Back_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
            'Leftside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
            'Rightside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
          ]); 
        $id = session()->get('ida');
        $Threewheelercargofeature = Threewheelercargofeature::find($id);
        if($request->hasFile('Modelimage')){
            $path='UploadImages/NewModel/Threewheelercargofeature'.$Threewheelercargofeature->Modelimage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Modelimage = $filename;
        }
        if($request->hasFile('Front_Modelimage')){
            $path='UploadImages/NewModel/Threewheelercargofeature'.$Threewheelercargofeature->Front_Modelimage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('Front_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Front_Modelimage = $filename;
        }
        if($request->hasFile('Leftside_Modelimage')){
            $path='UploadImages/NewModel/Threewheelercargofeature'.$Threewheelercargofeature->Leftside_Modelimage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('Leftside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Leftside_Modelimage = $filename;
        }
        if($request->hasFile('Back_Modelimage')){
            $path='UploadImages/NewModel/Threewheelercargofeature'.$Threewheelercargofeature->Back_Modelimage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('Back_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Back_Modelimage = $filename;
        }
        if($request->hasFile('Rightside_Modelimage')){
            $path='UploadImages/NewModel/Threewheelercargofeature'.$Threewheelercargofeature->Rightside_Modelimage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('Rightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelercargofeature', $filename);
            $Threewheelercargofeature->Rightside_Modelimage = $filename;
        }
        $Threewheelercargofeature->update();

        return redirect('/Threewheelercargofeature/index')->with('Threewheelercargofeature',$Threewheelercargofeature)->with('success','3w Cargo Vehicle update successfully....!');

    }
    public function destroy($id)
    {
        $Threewheelercargofeature = Threewheelercargofeature::find($id);
        $Threewheelercargofeature->delete();
        return back()->with('success','Model deleted successfully....!');
    }
    public function Modelimge_delete($id)
    {
        $sql = "UPDATE threewheelercargofeatures SET Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ');
        
    }
    public function Front_Modelimage($id)
    {
        $sql = "UPDATE threewheelercargofeatures SET Front_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
        
    }
        public function Back_Modelimage($id)
    {
        $sql = "UPDATE threewheelercargofeatures SET Back_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
    }
        public function Leftside_Modelimage($id)
    {
        $sql = "UPDATE threewheelercargofeatures SET Leftside_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
        
    }
        public function Rightside_Modelimage($id)
    {
        $sql = "UPDATE threewheelercargofeatures SET Rightside_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
    }
    public function Active($id)
    {
        $sql = "UPDATE threewheelercargofeatures SET Status='InActive' where id='$id'";
        $Status = DB::select($sql);
        return back()->with('success','This Model has been changed  InActive successfully . ')->with(['Status'=>$Status])->with('Status',$Status);
    }
    public function InActive($id)
    {
        $sql = "UPDATE threewheelercargofeatures SET Status='Active' where id='$id'";
        $Status = DB::select($sql);
        return back()->with('success','This Model has been changed  Active successfully . ')->with(['Status'=>$Status])->with('Status',$Status);
    }
    
}
