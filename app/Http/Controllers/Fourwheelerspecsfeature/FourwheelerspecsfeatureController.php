<?php

namespace App\Http\Controllers\Fourwheelerspecsfeature;
use App\Models\Fourwheelerspecsfeature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use File;
use DB;


class FourwheelerspecsfeatureController extends Controller
{

    public function index(Request $request)
    {
         $currentcate = $request->session()->get('cate');
         $currentcategory = $request->input('category');
         session()->put('category', $currentcategory);
         $Fourwheelerspecsfeature = Fourwheelerspecsfeature::all();
         return view ('NewModel.fourwheelerfeatureindex')->with('Fourwheelerspecsfeature', $Fourwheelerspecsfeature);
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
        return view ('NewModel.fourwheelerspecsfeature',['users'=>$users],['usersc'=>$usersc]);
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
        
        $Fourwheelerspecsfeature = new Fourwheelerspecsfeature();
        $valuecat = $request->session()->get('cate');
        $Fourwheelerspecsfeature->Products = $valuecat;
        // $valuecategory = $request->session()->get('category');
        // $Fourwheelerspecsfeature->Category=$valuecategory;
        $Fourwheelerspecsfeature->Model_name = $request->Session()->get('OEM_name');
        $Fourwheelerspecsfeature->OEM_name=$request->Session()->get('OEM_name');
        $Fourwheelerspecsfeature->Status ='Active'; 
        $oem = Session()->get('OEM_name');
        $mn = Session()->get('Modeldata');

        $Fourwheelerspecsfeature->Question1=$request->input('Question1');
        $Fourwheelerspecsfeature->Question2=$request->input('Question2');
        $Fourwheelerspecsfeature->Question3=$request->input('Question3');
        $Fourwheelerspecsfeature->Question4=$request->input('Question4');
        $Fourwheelerspecsfeature->Question5=$request->input('Question5');
        
        $Fourwheelerspecsfeature->Answer1=$request->input('Answer1');
        $Fourwheelerspecsfeature->Answer2=$request->input('Answer2');
        $Fourwheelerspecsfeature->Answer3=$request->input('Answer3');
        $Fourwheelerspecsfeature->Answer4=$request->input('Answer4');
        $Fourwheelerspecsfeature->Answer5=$request->input('Answer5');

        $Fourwheelerspecsfeature->Highlights=$request->input('Highlights');
        $Fourwheelerspecsfeature->productdesc=$request->input('productdesc');
        $Fourwheelerspecsfeature->altimageget=$request->input('altimageget');
        $Fourwheelerspecsfeature ->altimageget2=$request->input('altimageget2');
        $Fourwheelerspecsfeature ->altimageget3=$request->input('altimageget3');
        $Fourwheelerspecsfeature ->altimageget4=$request->input('altimageget4');
        $Fourwheelerspecsfeature ->altimageget5=$request->input('altimageget5');
        
        if($request->hasFile('Modelimage')){
            $file = $request->file('Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
            $Fourwheelerspecsfeature->Modelimage = $filename;
        }
        if($request->hasFile('Front_Modelimage')){
            $file = $request->file('Front_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
            $Fourwheelerspecsfeature->Front_Modelimage = $filename;
        }        
        if($request->hasFile('Back_Modelimage')){
            $file = $request->file('Back_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
            $Fourwheelerspecsfeature->Back_Modelimage = $filename;
        }
        if($request->hasFile('Leftside_Modelimage')){
            $file = $request->file('Leftside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
            $Fourwheelerspecsfeature->Leftside_Modelimage = $filename;
        }
        if($request->hasFile('Rightside_Modelimage')){
            $file = $request->file('Rightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
            $Fourwheelerspecsfeature->Rightside_Modelimage = $filename;
        }        
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $Fourwheelerspecsfeature->save();
        $sql11 = "select * from fourwheelerspecsfeatures ORDER BY id DESC LIMIT 1";
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
        
         
        //  $Fourwheelerspecsfeature->$usd=$request->input($usd);
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
         $sql2="UPDATE fourwheelerspecsfeatures SET $FName = '$fea' WHERE id='$idsf' ";
         DB::statement($sql2);
         
            
        }
       
        $sql3 ="UPDATE brandmasters SET updated_at = '$Fourwheelerspecsfeature->updated_at' WHERE new_oem_name='$oem' ";
        $OEMupdate=DB::select($sql3);

        return view('NewModel.fourwheelerspecsfeature',['users'=>$users],['usersc'=>$usersc],['OEMupdate'=>$OEMupdate])->with('OEMupdate',$OEMupdate)->with('success','4W Specs Model saved successfully...');

        
        
    }

     public function show(Request $request, $id)
    {
        $currentcate = $request->session()->get('cate'); 
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        session()->put('ida', $id);
        return view('NewModel.Fourwheelerspecsfeatureshow',['users'=>$users]);
    }

         public function edit(Request $request, $id)
    {
        // $fourwheelerspecs=Fourwheelerspecsfeature::find($id);
        $currentcate = $request->session()->get('cate'); 
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        
        $sql3 = "select * from fourwheelerspecsfeatures WHERE id='$id'";
        $fourwheelerspecs = DB::select($sql3);
        
        // $sql2 = "select * from newmodels WHERE $id='ida'";
        // $useroem = DB::select($sql2);
        session()->put('ida', $id);
        return view('NewModel.fourwheelerspecsfeaturedit',['users'=>$users],['usersc'=>$usersc],compact('fourwheelerspecs'))->with('fourwheelerspecs',$fourwheelerspecs);
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
         $Fourwheelerspecsfeature = Fourwheelerspecsfeature::find($id); 
        $currentcate = $request->session()->get('cate');
        // $Status =$request->input('Status');

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

        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);

// Image upload Code
        
        if($request->hasFile('Modelimage')){
            // $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
            $Fourwheelerspecsfeature->Modelimage = $filename;
        }
        if($request->hasFile('Front_Modelimage')){
            // $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Front_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Front_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
            $Fourwheelerspecsfeature->Front_Modelimage = $filename;
        }
        if($request->hasFile('Back_Modelimage')){
            // $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Back_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Back_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
            $Fourwheelerspecsfeature->Back_Modelimage = $filename;
        }
        if($request->hasFile('Leftside_Modelimage')){
            // $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Leftside_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Leftside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
            $Fourwheelerspecsfeature->Leftside_Modelimage = $filename;
        }
        if($request->hasFile('Rightside_Modelimage')){
            // $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Rightside_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Rightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
            $Fourwheelerspecsfeature->Rightside_Modelimage = $filename;
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
        
        
        //  $Fourwheelerspecsfeature->$usd=$request->input($usd);
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
         
         $sql2="UPDATE fourwheelerspecsfeatures SET $FName = '$fea' WHERE id='$id' ";
         DB::statement($sql2);
         
        }
        $Fourwheelerspecsfeature->update();

        $sql2 = " UPDATE fourwheelerspecsfeatures SET Status='Active', Question1='$Question1', Question2='$Question2', Question3='$Question3' ,Question4='$Question4',
        Question5='$Question5', Answer1='$Answer1', Answer2='$Answer2', Answer3='$Answer3', Answer4='$Answer4', Answer5='$Answer5', Highlights='$Highlights', productdesc='$productdesc', altimageget='$altimageget',altimageget2='$altimageget2',altimageget3='$altimageget3',altimageget4='$altimageget4',altimageget5='$altimageget5'  WHERE id='$id' ";
        $usersm = DB::select($sql2);

        $ModelName  = $request->input('model_name');        
        session()->put('model_name', $ModelName);
        $OEM = $request->input('OEM_name');
        session()->put('OEM_name', $OEM);
        
        $sql4 = " UPDATE newmodels SET model_name='$ModelName' , OEM_name='$OEM' WHERE id='$id' ";
        $usersoem = DB::select($sql4); 
       
       //new update query
        return redirect ('/Fourwheelerspecsfeature/index')->with('success','4W Specs Model updated successfully....!');
    }
    // public function images_update(Request $request)
    // {
       
    //    $request->validate([
    //     'Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
    //     'Front_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
    //     'Back_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
    //     'Leftside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
    //     'Rightside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
    //   ]);        
    //   $id = session()->get('ida');
    //   $Fourwheelerspecsfeature = Fourwheelerspecsfeature::find($id);
      
    //     if($request->hasFile('Modelimage')){
    //         $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Modelimage;
    //         if(File::exists($path)){
    //             File::delete($path);
    //         }
    //         $file = $request->file('Modelimage');
    //         $filename = time().'.'.$file->GetClientOriginalName();
    //         $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
    //         $Fourwheelerspecsfeature->Modelimage = $filename;
    //     }
    //     if($request->hasFile('Front_Modelimage')){
    //         $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Front_Modelimage;
    //         if(File::exists($path)){
    //             File::delete($path);
    //         }
    //         $file = $request->file('Front_Modelimage');
    //         $filename = time().'.'.$file->GetClientOriginalName();
    //         $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
    //         $Fourwheelerspecsfeature->Front_Modelimage = $filename;
    //     }
    //     if($request->hasFile('Back_Modelimage')){
    //         $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Back_Modelimage;
    //         if(File::exists($path)){
    //             File::delete($path);
    //         }
    //         $file = $request->file('Back_Modelimage');
    //         $filename = time().'.'.$file->GetClientOriginalName();
    //         $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
    //         $Fourwheelerspecsfeature->Back_Modelimage = $filename;
    //     }
    //     if($request->hasFile('Leftside_Modelimage')){
    //         $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Leftside_Modelimage;
    //         if(File::exists($path)){
    //             File::delete($path);
    //         }
    //         $file = $request->file('Leftside_Modelimage');
    //         $filename = time().'.'.$file->GetClientOriginalName();
    //         $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
    //         $Fourwheelerspecsfeature->Leftside_Modelimage = $filename;
    //     }
    //     if($request->hasFile('Rightside_Modelimage')){
    //         $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Rightside_Modelimage;
    //         if(File::exists($path)){
    //             File::delete($path);
    //         }
    //         $file = $request->file('Rightside_Modelimage');
    //         $filename = time().'.'.$file->GetClientOriginalName();
    //         $file->move('UploadImages/NewModel/Fourwheelerspecsfeature', $filename);
    //         $Fourwheelerspecsfeature->Rightside_Modelimage = $filename;
    //     }
    //     $Fourwheelerspecsfeature->update();

    //     return redirect('/Fourwheelerspecsfeature/index')->with('Fourwheelerspecsfeature',$Fourwheelerspecsfeature)->with('success','4w Specs vehicle update successfully....');
    // }

    public function destroy($id)
    {
        $Fourwheelerspecsfeature = Fourwheelerspecsfeature::find($id);
        $Fourwheelerspecsfeature->delete();
        return back()->with('success','Model deleted successfully....!');
    }
    public function comparision1(){
        $sql = "select * from fourwheelerspecsfeatures";
        $userss = DB::select($sql);
        return view('Website.comparision',['userss'=>$userss]);
    }
     public function comparision2(Request $request){
         $Fourwheelerspecsfeature = Fourwheelerspecsfeature::all();
        $compare1 = $request->input('compare1');
        $sql1 = "select * from fourwheelerspecsfeatures where Version_name='$compare1'";
        $product = DB::select($sql1);
        $compare2 = $request->input('compare2');
        $sql2 = "select * from fourwheelerspecsfeatures where Version_name='$compare2'";
        $products = DB::select($sql2);
        return view('Website.comparision2',['product'=>$product],['products'=>$products])->with('Fourwheelerspecsfeature', $Fourwheelerspecsfeature);
    }
    public function Modelimge_delete($id)
    {
        $sql = "UPDATE fourwheelerspecsfeatures SET Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
        
    }
    public function Front_Modelimage($id)
    {
        $sql = "UPDATE fourwheelerspecsfeatures SET Front_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
        
    }
        public function Back_Modelimage($id)
    {
        $sql = "UPDATE fourwheelerspecsfeatures SET Back_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
    }
        public function Leftside_Modelimage($id)
    {
        $sql = "UPDATE fourwheelerspecsfeatures SET Leftside_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
        
    }
        public function Rightside_Modelimage($id)
    {
        $sql = "UPDATE fourwheelerspecsfeatures SET Rightside_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
    }
    public function Active($id)
    {
        $sql = "UPDATE fourwheelerspecsfeatures SET Status='InActive' where id='$id'";
        $Status = DB::select($sql);
        return back()->with('success','This Model has been changed  InActive successfully . ')->with(['Status'=>$Status])->with('Status',$Status);
    }
    public function InActive($id)
    {
        $sql = "UPDATE fourwheelerspecsfeatures SET Status='Active' where id='$id'";
        $Status = DB::select($sql);
        return back()->with('success','This Model has been changed  Active successfully . ')->with(['Status'=>$Status])->with('Status',$Status);
    }
}
