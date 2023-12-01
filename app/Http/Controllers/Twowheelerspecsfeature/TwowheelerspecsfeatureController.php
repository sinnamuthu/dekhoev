<?php

namespace App\Http\Controllers\Twowheelerspecsfeature;
use App\Models\Twowheelerspecsfeature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use DB;
use File;


class TwowheelerspecsfeatureController extends Controller
{

    public function index(Request $request)
    {
         $currentcate = $request->session()->get('cate');
         $currentcategory = $request->input('category');
         session()->put('category', $currentcategory);
         $Twowheelerspecsfeature = Twowheelerspecsfeature::all();
         return view ('NewModel.twowheelerspecsfeatureindex')->with('Twowheelerspecsfeature', $Twowheelerspecsfeature);
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
        return view ('NewModel.twowheelerspecsfeature',['users'=>$users],['usersc'=>$usersc]);
    }


     public function store(Request $request)
    {
        $request->validate([
          'Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'Front_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'Back_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'Leftside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'Rightside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'sixRightside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'sevenRightside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
        ]);

        $Twowheelerspecsfeature = new Twowheelerspecsfeature();
        $valuecat = $request->session()->get('cate');
        $Twowheelerspecsfeature->Products = $valuecat;
        // $valuecategory = $request->session()->get('category');
        // $Twowheelerspecsfeature->Category=$valuecategory;
        $Twowheelerspecsfeature->OEM_name = $request->Session()->get('OEM_name');
        $Twowheelerspecsfeature->Model_name = $request->Session()->get('OEM_name');
        $Twowheelerspecsfeature->Status ='Active';
        // $Twowheelerspecsfeature->OEM_Brand_Name=$request->input('OEM_name');
        $oem = Session()->get('OEM_name');
        $mn = Session()->get('Modeldata');

          $Twowheelerspecsfeature ->Question1=$request->input('Question1');
          $Twowheelerspecsfeature ->Question2=$request->input('Question2');
          $Twowheelerspecsfeature ->Question3=$request->input('Question3');
          $Twowheelerspecsfeature ->Question4=$request->input('Question4');
          $Twowheelerspecsfeature ->Question5=$request->input('Question5');
        
          $Twowheelerspecsfeature ->Answer1=$request->input('Answer1');
          $Twowheelerspecsfeature ->Answer2=$request->input('Answer2');
          $Twowheelerspecsfeature ->Answer3=$request->input('Answer3');
          $Twowheelerspecsfeature ->Answer4=$request->input('Answer4');
          $Twowheelerspecsfeature ->Answer5=$request->input('Answer5');

          $Twowheelerspecsfeature ->Highlights=$request->input('Highlights');
          $Twowheelerspecsfeature ->productdesc=$request->input('productdesc');
          $Twowheelerspecsfeature ->altimageget=$request->input('altimageget');
          $Twowheelerspecsfeature ->altimageget2=$request->input('altimageget2');
          $Twowheelerspecsfeature ->altimageget3=$request->input('altimageget3');
          $Twowheelerspecsfeature ->altimageget4=$request->input('altimageget4');
          $Twowheelerspecsfeature ->altimageget5=$request->input('altimageget5');
          $Twowheelerspecsfeature ->altimageget6=$request->input('altimageget6');
          $Twowheelerspecsfeature ->altimageget7=$request->input('altimageget7');
        
        if($request->hasFile('Modelimage')){
            $file = $request->file('Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->Modelimage = $filename;
        }
        if($request->hasFile('Front_Modelimage')){
            $file = $request->file('Front_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->Front_Modelimage = $filename;
        }
        if($request->hasFile('Back_Modelimage')){
            $file = $request->file('Back_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->Back_Modelimage = $filename;
        }
        if($request->hasFile('Leftside_Modelimage')){
            $file = $request->file('Leftside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->Leftside_Modelimage = $filename;
        }
        if($request->hasFile('Rightside_Modelimage')){
            $file = $request->file('Rightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->Rightside_Modelimage = $filename;
        }
        if($request->hasFile('sixRightside_Modelimage')){
            $file = $request->file('sixRightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->sixRightside_Modelimage = $filename;
        }
        if($request->hasFile('sevenRightside_Modelimage')){
            $file = $request->file('sevenRightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->sevenRightside_Modelimage = $filename;
        }
        

        
        
        
        $Twowheelerspecsfeature->save();
        $currentcate = $request->session()->get('cate');
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql11 = "select * from twowheelerspecsfeatures ORDER BY id DESC LIMIT 1";
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
        
         
        //  $Twowheelerspecsfeature->$usd=$request->input($usd);
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
        $sql2="UPDATE twowheelerspecsfeatures SET $FName = '$fea' WHERE id='$idsf' ";
        DB::statement($sql2);
         
            
        }
        
            $sql3 ="UPDATE brandmasters SET updated_at = '$Twowheelerspecsfeature->updated_at' WHERE new_oem_name='$oem' ";
            $OEMupdate=DB::select($sql3);
        


        return view('NewModel.twowheelerspecsfeature',['users'=>$users],['usersc'=>$usersc],['OEMupdate'=>$OEMupdate])->with('OEMupdate',$OEMupdate)->with('success','New 2W Specs Model saved successfully');

        
        
    }


    public function show(Request $request, $id)
    {
        $currentcate = $request->session()->get('cate'); 
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);
        session()->put('ida', $id);
        return view('NewModel.twowheelerspecsfeatureshow',['users'=>$users]);
    }

     public function edit(Request $request, $id)
    {
        $Twowheelerspecs = Twowheelerspecsfeature::find($id);
        $currentcate = $request->session()->get('cate'); 
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $sql1 = "select * from brandmasters WHERE Products='$currentcate'";
        $usersc = DB::select($sql1);
        $sql = "select * from newfeaturemasters WHERE Products='$currentcate'";
        $users = DB::select($sql);

        $sql3 = "select * from twowheelerspecsfeatures  WHERE id='$id'";
        $Twowheelerspecs = DB::select($sql3);

        session()->put('ida', $id);
        return view('NewModel.twowheelerspecsfeaturedit',['users'=>$users],['usersc'=>$usersc],['Twowheelerspecs'=>$Twowheelerspecs],compact('Twowheelerspecs'))->with('Twowheelerspecs',$Twowheelerspecs);

    }


      public function update(Request $request)
    {
        $request->validate([
          'Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'Front_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'Back_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'Leftside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'Rightside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'sixRightside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
          'sevenRightside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:2000',
        ]);        
        $id = session()->get('ida');
         $Twowheelerspecsfeature = Twowheelerspecsfeature::find($id); 
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
        $altimageget6 =$request->input('altimageget6');
        $altimageget7 =$request->input('altimageget7');

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
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->Modelimage = $filename;
        }
        if($request->hasFile('Front_Modelimage')){
            // $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Front_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Front_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->Front_Modelimage = $filename;
        }
        if($request->hasFile('Back_Modelimage')){
            // $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Back_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Back_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->Back_Modelimage = $filename;
        }
        if($request->hasFile('Leftside_Modelimage')){
            // $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Leftside_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Leftside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->Leftside_Modelimage = $filename;
        }
        if($request->hasFile('Rightside_Modelimage')){
            // $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Rightside_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('Rightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->Rightside_Modelimage = $filename;
        }

        if($request->hasFile('sixRightside_Modelimage')){
            // $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Rightside_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('sixRightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->sixRightside_Modelimage = $filename;
        }

        if($request->hasFile('sevenRightside_Modelimage')){
            // $path='UploadImages/NewModel/Fourwheelerspecsfeature'.$Fourwheelerspecsfeature->Rightside_Modelimage;
            // if(File::exists($path)){
            //     File::delete($path);
            // }
            $file = $request->file('sevenRightside_Modelimage');
            $filename = time().'.'.$file->GetClientOriginalName();
            $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
            $Twowheelerspecsfeature->sevenRightside_Modelimage = $filename;
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
         
         $sql2="UPDATE twowheelerspecsfeatures SET $FName = '$fea' WHERE id='$id' ";
         DB::statement($sql2);
         
        }
        $Twowheelerspecsfeature->update();

        $sql3 = " UPDATE twowheelerspecsfeatures SET Status='Active', Question1='$Question1', Question2='$Question2', Question3='$Question3' ,Question4='$Question4',
        Question5='$Question5', Answer1='$Answer1', Answer2='$Answer2', Answer3='$Answer3', Answer4='$Answer4', Answer5='$Answer5',Highlights='$Highlights',productdesc='$productdesc',altimageget='$altimageget',altimageget2='$altimageget2',altimageget3='$altimageget3',altimageget4='$altimageget4',altimageget5='$altimageget5',altimageget6='$altimageget6',altimageget7='$altimageget7'  WHERE id='$id' ";
        $usersm = DB::select($sql3);
 
        return redirect('/Twowheelerspecsfeature/index/')->with('success','Model updated successfully....!');
    }
    // public function images_update(Request $request)
    // {
    //     $request->validate([
    //       'Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
    //       'Front_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
    //       'Back_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
    //       'Leftside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
    //       'Rightside_Modelimage'=>'image|mimes:jpeg,png,svg,jpg|max:100',
    //     ]);
    //     $id = session()->get('ida');
    //     $Twowheelerspecsfeature = Twowheelerspecsfeature::find($id);

    //     if($request->hasFile('Modelimage')){
    //         $path='UploadImages/NewModel/Twowheelerspecsfeature/'.$Twowheelerspecsfeature->Modelimage;
    //         if(File::exists($path)){
    //             File::delete($path);
    //         }
    //         $file = $request->file('Modelimage');
    //         $filename = time().'.'.$file->GetClientOriginalName();
    //         $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
    //         $Twowheelerspecsfeature->Modelimage = $filename;
    //     }        
    //     if($request->hasFile('Front_Modelimage')){
    //         $path='UploadImages/NewModel/Twowheelerspecsfeature/'.$Twowheelerspecsfeature->Front_Modelimage;
    //         if(File::exists($path)){
    //             File::delete($path);
    //         }
    //         $file = $request->file('Front_Modelimage');
    //         $filename = time().'.'.$file->GetClientOriginalName();
    //         $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
    //         $Twowheelerspecsfeature->Front_Modelimage = $filename;
    //     }        
    //     if($request->hasFile('Back_Modelimage')){
    //         $path='UploadImages/NewModel/Twowheelerspecsfeature/'.$Twowheelerspecsfeature->Back_Modelimage;
    //         if(File::exists($path)){
    //             File::delete($path);
    //         }
    //         $file = $request->file('Back_Modelimage');
    //         $filename = time().'.'.$file->GetClientOriginalName();
    //         $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
    //         $Twowheelerspecsfeature->Back_Modelimage = $filename;
    //     }        
    //     if($request->hasFile('Leftside_Modelimage')){
    //         $path='UploadImages/NewModel/Twowheelerspecsfeature/'.$Twowheelerspecsfeature->Leftside_Modelimage;
    //         if(File::exists($path)){
    //             File::delete($path);
    //         }
    //         $file = $request->file('Leftside_Modelimage');
    //         $filename = time().'.'.$file->GetClientOriginalName();
    //         $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
    //         $Twowheelerspecsfeature->Leftside_Modelimage = $filename;
    //     }
    //     if($request->hasFile('Rightside_Modelimage')){
    //         $path='UploadImages/NewModel/Twowheelerspecsfeature/'.$Twowheelerspecsfeature->Rightside_Modelimage;
    //         if(File::exists($path)){
    //             File::delete($path);
    //         }
    //         $file = $request->file('Rightside_Modelimage');
    //         $filename = time().'.'.$file->GetClientOriginalName();
    //         $file->move('UploadImages/NewModel/Twowheelerspecsfeature', $filename);
    //         $Twowheelerspecsfeature->Rightside_Modelimage = $filename;
    //     }

    //     $Twowheelerspecsfeature->update();
    //     return redirect('/Twowheelerspecsfeature/index/')->with('Twowheelerspecsfeature',$Twowheelerspecsfeature)->with('Success','2w Specs vehicle Update successfully...');
    // }
    public function destroy($id)
    {
        $Twowheelerspecsfeature = Twowheelerspecsfeature::find($id);
        $Twowheelerspecsfeature->delete();
        return back()->with('success','Model deleted successfully....!');
    }
    public function comparetwowheeler(Request $request){
        // $comparetwowheeler = new Twowheelerspecsfeature();
        $currentcate = $request->session()->get('cate');
        $sql = "select * from twowheelerspecsfeatures";
        $userss = DB::select($sql);
        return view('Website/compare2',  ['userss'=>$userss],$userss);
    }
    public function Modelimge_delete($id)
    {
        $sql = "UPDATE twowheelerspecsfeatures SET Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ');
        
    }
    public function Front_Modelimage($id)
    {
        $sql = "UPDATE twowheelerspecsfeatures SET Front_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
        
    }
        public function Back_Modelimage($id)
    {
        $sql = "UPDATE twowheelerspecsfeatures SET Back_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
    }
        public function Leftside_Modelimage($id)
    {
        $sql = "UPDATE twowheelerspecsfeatures SET Leftside_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
        
    }
        public function Rightside_Modelimage($id)
    {
        $sql = "UPDATE twowheelerspecsfeatures SET Rightside_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
    }

    public function sixRightside_Modelimage($id)
    {
        $sql = "UPDATE twowheelerspecsfeatures SET sixRightside_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
    }
    public function sevenRightside_Modelimage($id)
    {
        $sql = "UPDATE twowheelerspecsfeatures SET sevenRightside_Modelimage='' where id='$id'";
        $modelimage = DB::select($sql);
        return back()->with('success','Image has been deleted successfully..! ')->with(['modelimage'=>$modelimage])->with('modelimage',$modelimage);
    }
    public function Active($id)
    {
        $sql = "UPDATE twowheelerspecsfeatures SET Status='InActive' where id='$id'";
        $Status = DB::select($sql);
        return back()->with('success','This Model has been changed  InActive successfully . ')->with(['Status'=>$Status])->with('Status',$Status);
    }
    public function InActive($id)
    {
        $sql = "UPDATE twowheelerspecsfeatures SET Status='Active' where id='$id'";
        $Status = DB::select($sql);
        return back()->with('success','This Model has been changed  Active successfully . ')->with(['Status'=>$Status])->with('Status',$Status);
    }
}
