<?php

namespace App\Http\Controllers\Threewheelerpassfeature;
use App\Models\Threewheelerpassfeature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;

class ThreewheelerpassfeatureController extends Controller
{

    public function index(Request $request)
    {
         $currentcate = $request->session()->get('cate');
         $currentcategory = $request->input('category');
         session()->put('category', $currentcategory);
         $Threewheelerpassfeature = Threewheelerpassfeature::all();
         return view ('NewModel.threewheelerpassfeatureindex')->with('Threewheelerpassfeature', $Threewheelerpassfeature);
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
        return view ('NewModel.threewheelerpassfeature',['users'=>$users],['usersc'=>$usersc]);
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
        
        $Threewheelerpassfeature = new Threewheelerpassfeature();
        $valuecat = $request->session()->get('cate');
        $Threewheelerpassfeature->Products = $valuecat;
        // $valuecategory = $request->session()->get('category');
        // $Threewheelerpassfeature->Category=$valuecategory;
        $Threewheelerpassfeature->Model_name = $request->Session()->get('OEM_name');
        $Threewheelerpassfeature->Status ='Active';
        $Threewheelerpassfeature->OEM_name=$request->Session()->get('OEM_name');
        $oem = Session()->get('OEM_name');
        $mn = Session()->get('Modeldata');

          $Threewheelerpassfeature ->Question1=$request->input('Question1');
          $Threewheelerpassfeature ->Question2=$request->input('Question2');
          $Threewheelerpassfeature ->Question3=$request->input('Question3');
          $Threewheelerpassfeature ->Question4=$request->input('Question4');
          $Threewheelerpassfeature ->Question5=$request->input('Question5');
        
          $Threewheelerpassfeature ->Answer1=$request->input('Answer1');
          $Threewheelerpassfeature ->Answer2=$request->input('Answer2');
          $Threewheelerpassfeature ->Answer3=$request->input('Answer3');
          $Threewheelerpassfeature ->Answer4=$request->input('Answer4');
          $Threewheelerpassfeature ->Answer5=$request->input('Answer5');
 
          $Threewheelerpassfeature ->Highlights=$request->input('Highlights');
        $Threewheelerpassfeature ->productdesc=$request->input('productdesc');
        $Threewheelerpassfeature ->altimageget=$request->input('altimageget');
         $Threewheelerpassfeature ->altimageget2=$request->input('altimageget2');
          $Threewheelerpassfeature ->altimageget3=$request->input('altimageget3');
          $Threewheelerpassfeature ->altimageget4=$request->input('altimageget4');
          $Threewheelerpassfeature ->altimageget5=$request->input('altimageget5');

        
        if($request->hasFile('Modelimage')){
            $file = $request->file('Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Modelimage = $filename;
        }
        if($request->hasFile('Front_Modelimage')){
            $file = $request->file('Front_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Front_Modelimage = $filename;
        }
        if($request->hasFile('Back_Modelimage')){
            $file = $request->file('Back_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Back_Modelimage = $filename;
        }
        if($request->hasFile('Leftside_Modelimage')){
            $file = $request->file('Leftside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Leftside_Modelimage = $filename;
        }
                if($request->hasFile('Rightside_Modelimage')){
            $file = $request->file('Rightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Rightside_Modelimage = $filename;
        }
        
                $Threewheelerpassfeature->save();

        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql11 = "select * from threewheelerpassfeatures ORDER BY id DESC LIMIT 1";
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
        
         
        //  $Threewheelerpassfeature->$usd=$request->input($usd);
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

         $sql2="UPDATE threewheelerpassfeatures SET $FName = '$fea' WHERE id='$idsf' ";
        DB::statement($sql2);
         
            
        }
        $sql3 ="UPDATE brandmasters SET updated_at = '$Threewheelerpassfeature->updated_at' WHERE new_oem_name='$oem' ";
        $OEMupdate=DB::select($sql3);
       
        return view('NewModel.threewheelerpassfeature',['users'=>$users],['usersc'=>$usersc],['OEMupdate'=>$OEMupdate])->with('OEMupdate',$OEMupdate)->with('success','New 3W Pass Model saved successfully');
        
        
    }

    public function show(Request $request,$id)
    {
         $currentcate = $request->session()->get('cate'); 
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        session()->put('ida', $id);
        return view('NewModel.Threewheelerpassfeatureshow',['users'=>$users]);
    }

      public function edit(Request $request, $id)
    {
        // $threewheelerpass=Threewheelerpassfeature::find($id);
        $currentcate = $request->session()->get('cate'); 
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql2 = "select * from newmodels WHERE $id='ida'";
        $useroem = DB::select($sql2);

        $sql3 = "select * from threewheelerpassfeatures WHERE id='$id'";
        $threewheelerpass = DB::select($sql3);

        session()->put('ida', $id);
        return view('NewModel.threewheelerpassfeaturedit',['users'=>$users],['usersc'=>$usersc],['useroem'=>$useroem],['threewheelerpass'=>$threewheelerpass],compact('threewheelerpass'))->with('useroem',$useroem)->with('threewheelerpass',$threewheelerpass);

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
        $Threewheelerpassfeature = Threewheelerpassfeature::find($id);
        $currentcate = $request->session()->get('cate');
        // $Status =$request->input('Status');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);


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
        
        if($request->hasFile('Modelimage')){
            // $path='UploadImages/NewModel/Threewheelerpassfeature'.$Threewheelerpassfeature->Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Modelimage = $filename;
        }
        if($request->hasFile('Front_Modelimage')){
            // $path='UploadImages/NewModel/Threewheelerpassfeature'.$Threewheelerpassfeature->Front_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Front_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Front_Modelimage = $filename;
        }
        if($request->hasFile('Back_Modelimage')){
            // $path='UploadImages/NewModel/Threewheelerpassfeature'.$Threewheelerpassfeature->Back_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Back_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Back_Modelimage = $filename;
        }
        if($request->hasFile('Leftside_Modelimage')){
            // $path='UploadImages/NewModel/Threewheelerpassfeature'.$Threewheelerpassfeature->Leftside_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Leftside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Leftside_Modelimage = $filename;
        }
        if($request->hasFile('Rightside_Modelimage')){
            // $path='UploadImages/NewModel/Threewheelerpassfeature'.$Threewheelerpassfeature->Rightside_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Rightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Rightside_Modelimage = $filename;
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
        
        
        //  $Threewheelerpassfeature->$usd=$request->input($usd);
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
         
         $sql2="UPDATE threewheelerpassfeatures SET $FName = '$fea' WHERE id='$id' ";
         DB::statement($sql2);
        }
        $Threewheelerpassfeature->update();

        $sql3 = " UPDATE threewheelerpassfeatures SET Status='Active', Question1='$Question1', Question2='$Question2', Question3='$Question3' ,Question4='$Question4',
        Question5='$Question5', Answer1='$Answer1', Answer2='$Answer2', Answer3='$Answer3', Answer4='$Answer4', Answer5='$Answer5',Highlights='$Highlights' ,productdesc='$productdesc',altimageget='$altimageget',altimageget2='$altimageget2',altimageget3='$altimageget3',altimageget4='$altimageget4',altimageget5='$altimageget5'  WHERE id='$id' ";
        $usersm = DB::select($sql3);

          //new update query
        return redirect('/Threewheelerpassfeature/index')->with('success','Model updated successfully....!');
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
        $Threewheelerpassfeature = Threewheelerpassfeature::find($id);
        if($request->hasFile('Modelimage')){
            $path='UploadImages/NewModel/Threewheelerpassfeature'.$Threewheelerpassfeature->Modelimage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Modelimage = $filename;
        }
        if($request->hasFile('Front_Modelimage')){
            $path='UploadImages/NewModel/Threewheelerpassfeature'.$Threewheelerpassfeature->Front_Modelimage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('Front_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Front_Modelimage = $filename;
        }
        if($request->hasFile('Back_Modelimage')){
            $path='UploadImages/NewModel/Threewheelerpassfeature'.$Threewheelerpassfeature->Back_Modelimage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('Back_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Back_Modelimage = $filename;
        }
        if($request->hasFile('Leftside_Modelimage')){
            $path='UploadImages/NewModel/Threewheelerpassfeature'.$Threewheelerpassfeature->Leftside_Modelimage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('Leftside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Leftside_Modelimage = $filename;
        }
        if($request->hasFile('Rightside_Modelimage')){
            $path='UploadImages/NewModel/Threewheelerpassfeature'.$Threewheelerpassfeature->Rightside_Modelimage;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('Rightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Threewheelerpassfeature', $filename);
            $Threewheelerpassfeature->Rightside_Modelimage = $filename;
        } 
        $Threewheelerpassfeature->update();

        return redirect('/Threewheelerpassfeature/index')->with('Threewheelerpassfeature',$Threewheelerpassfeature)->with('success','3w Pass vehicle update successfully....!');

    }
     public function destroy($id)
    {
        $Threewheelerpassfeature = Threewheelerpassfeature::find($id);
        $Threewheelerpassfeature->delete();
        return back()->with('success','Model deleted successfully....!');
    }
    public function Modelimge_delete($id)
    {
        $sql = "UPDATE threewheelerpassfeatures SET Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ');
        
    }
    public function Front_Modelimage($id)
    {
        $sql = "UPDATE threewheelerpassfeatures SET Front_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
        
    }
        public function Back_Modelimage($id)
    {
        $sql = "UPDATE threewheelerpassfeatures SET Back_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
    }
        public function Leftside_Modelimage($id)
    {
        $sql = "UPDATE threewheelerpassfeatures SET Leftside_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
        
    }
        public function Rightside_Modelimage($id)
    {
        $sql = "UPDATE threewheelerpassfeatures SET Rightside_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
    }
    public function Active($id)
    {
        $sql = "UPDATE threewheelerpassfeatures SET Status='InActive' where id='$id'";
        $Status = DB::select($sql);
        return back()->with('success','This Model has been changed  InActive successfully . ')->with(['Status'=>$Status])->with('Status',$Status);
    }
    public function InActive($id)
    {
        $sql = "UPDATE threewheelerpassfeatures SET Status='Active' where id='$id'";
        $Status = DB::select($sql);
        return back()->with('success','This Model has been changed  Active successfully . ')->with(['Status'=>$Status])->with('Status',$Status);
    }

}
