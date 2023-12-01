<?php
namespace App\Http\Controllers\DekhoEVWebsite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Twowheelerspecsfeature;
use DB;

// Home Page Controller
class DekhoEVHomeController extends Controller
{
    public function Index(Request $request){
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        return view('DekhoevWebsite/index');
        
    }
    
     // Three Wheeler Pass Comparision Controller
    public function Threep_Comparision(Request $request){
        // $currentcategory = $request->input('category');
        // session()->put('category', $currentcategory);
        // $currentcategory = $request->session()->get('category');
        // $product = $request->input('product');
        // session()->put('product', $product);
        
         $current_model1 = $request->input('current_model1');
        
        if ($current_model1 != ''){
        session()->put('Current_model1', $current_model1);
        }
         $current_model2= $request->input('current_model2');
        
        if ($current_model2 != ''){
        session()->put('Current_model2', $current_model2);
        }
        
         $current_model3 = $request->input('current_model3');
         
        if ($current_model3 != ''){ 
        session()->put('Current_model3', $current_model3);
        }
        
        $current_model1_session= $request->session()->get('Current_model1');
        $current_model2_session= $request->session()->get('Current_model2');
        $current_model3_session= $request->session()->get('Current_model3');
 
        $sql2 = "select * from threewheelerpassfeatures  ";
        $user2 = DB::select($sql2); 
        
        $sql4 = "select * from threewheelerpassfeatures where Model_Name='$current_model1_session' ";
        $currentmodelthreec1 = DB::select($sql4);
        $sql5 = "select * from threewheelerpassfeatures where Model_Name='$current_model2_session' ";
        $currentmodelthreec2 = DB::select($sql5);
        $sql6 = "select * from threewheelerpassfeatures where Model_Name='$current_model3_session' ";
        $currentmodelthreec3 = DB::select($sql6);
         return view('DekhoevWebsite/Threep_comparision',['user2'=>$user2],['currentmodelthreec1'=>$currentmodelthreec1],['currentmodelthreec2'=>$currentmodelthreec2],
         ['currentmodelthreec3'=>$currentmodelthreec3])->with('user2',$user2)->with('currentmodelthreec1',$currentmodelthreec1)->with('currentmodelthreec2',$currentmodelthreec2)->with('currentmodelthreec3',$currentmodelthreec3);
    }
   
    
    // Three Wheeler Cargo Comparision Controller
    public function Threec_Comparision(Request $request){
        // $currentcategory = $request->input('category');
        // session()->put('category', $currentcategory);
        // $currentcategory = $request->session()->get('category');
        // $product = $request->input('product');
        // session()->put('product', $product);
        
         $current_model1 = $request->input('current_model1');
        
        if ($current_model1 != ''){
        session()->put('Current_model1', $current_model1);
        }
         $current_model2= $request->input('current_model2');
        
        if ($current_model2 != ''){
        session()->put('Current_model2', $current_model2);
        }
        
         $current_model3 = $request->input('current_model3');
         
        if ($current_model3 != ''){ 
        session()->put('Current_model3', $current_model3);
        }
        
        $current_model1_session= $request->session()->get('Current_model1');
        $current_model2_session= $request->session()->get('Current_model2');
        $current_model3_session= $request->session()->get('Current_model3');
 
        $sql2 = "select * from threewheelercargofeatures  ";
        $user2 = DB::select($sql2); 
        
        $sql4 = "select * from threewheelercargofeatures where Model_Name='$current_model1_session' ";
        $currentmodelthreec1 = DB::select($sql4);
        $sql5 = "select * from threewheelercargofeatures where Model_Name='$current_model2_session' ";
        $currentmodelthreec2 = DB::select($sql5);
        $sql6 = "select * from threewheelercargofeatures where Model_Name='$current_model3_session' ";
        $currentmodelthreec3 = DB::select($sql6);
         return view('DekhoevWebsite/Threec_comparision',['user2'=>$user2],['currentmodelthreec1'=>$currentmodelthreec1],['currentmodelthreec2'=>$currentmodelthreec2],
         ['currentmodelthreec3'=>$currentmodelthreec3])->with('user2',$user2)->with('currentmodelthreec1',$currentmodelthreec1)->with('currentmodelthreec2',$currentmodelthreec2)->with('currentmodelthreec3',$currentmodelthreec3);
    }
    
    
    //Four Wheeler Comparision Controller
    public function Four_Comparision(Request $request){
        // $currentcategory = $request->input('category');
        // session()->put('category', $currentcategory);
        // $currentcategory = $request->session()->get('category');
        // $product = $request->input('product');
        // session()->put('product', $product);
        
         $current_model1 = $request->input('current_model1');
        
        if ($current_model1 != ''){
        session()->put('Current_model1', $current_model1);
        }
         $current_model2= $request->input('current_model2');
        
        if ($current_model2 != ''){
        session()->put('Current_model2', $current_model2);
        }
        
         $current_model3 = $request->input('current_model3');
         
        if ($current_model3 != ''){ 
        session()->put('Current_model3', $current_model3);
        }
        
        $current_model1_session= $request->session()->get('Current_model1');
        $current_model2_session= $request->session()->get('Current_model2');
        $current_model3_session= $request->session()->get('Current_model3');
 
        $sql2 = "select * from fourwheelerspecsfeatures";
        $user2 = DB::select($sql2); 
        
        $sql4 = "select * from fourwheelerspecsfeatures where Model_Name='$current_model1_session' ";
        $currentmodelthreec1 = DB::select($sql4);
        $sql5 = "select * from fourwheelerspecsfeatures where Model_Name='$current_model2_session' ";
        $currentmodelthreec2 = DB::select($sql5);
        $sql6 = "select * from fourwheelerspecsfeatures where Model_Name='$current_model3_session' ";
        $currentmodelthreec3 = DB::select($sql6);
         return view('DekhoevWebsite/Four_comparision',['user2'=>$user2],['currentmodelthreec1'=>$currentmodelthreec1],['currentmodelthreec2'=>$currentmodelthreec2],
         ['currentmodelthreec3'=>$currentmodelthreec3])->with('user2',$user2)->with('currentmodelthreec1',$currentmodelthreec1)->with('currentmodelthreec2',$currentmodelthreec2)->with('currentmodelthreec3',$currentmodelthreec3);
    }
    
     //Two Wheeler Comparision Controller
    public function Two_Comparision(Request $request){
        // $currentcategory = $request->input('category');
        // session()->put('category', $currentcategory);
        // $currentcategory = $request->session()->get('category');
        // $product = $request->input('product');
        // session()->put('product', $product);
        
         $current_model1 = $request->input('current_model1');
        
        if ($current_model1 != ''){
        session()->put('Current_model1', $current_model1);
        }
         $current_model2= $request->input('current_model2');
        
        if ($current_model2 != ''){
        session()->put('Current_model2', $current_model2);
        }
        
         $current_model3 = $request->input('current_model3');
         
        if ($current_model3 != ''){ 
        session()->put('Current_model3', $current_model3);
        }
        
        $current_model1_session= $request->session()->get('Current_model1');
        $current_model2_session= $request->session()->get('Current_model2');
        $current_model3_session= $request->session()->get('Current_model3');
 
        $sql2 = "select * from twowheelerspecsfeatures  ";
        $user2 = DB::select($sql2); 
        
        $sql4 = "select * from twowheelerspecsfeatures where Model_Name='$current_model1_session' ";
        $currentmodelthreec1 = DB::select($sql4);
        $sql5 = "select * from twowheelerspecsfeatures where Model_Name='$current_model2_session' ";
        $currentmodelthreec2 = DB::select($sql5);
        $sql6 = "select * from twowheelerspecsfeatures where Model_Name='$current_model3_session' ";
        $currentmodelthreec3 = DB::select($sql6);
         return view('DekhoevWebsite/Two_comparision',['user2'=>$user2],['currentmodelthreec1'=>$currentmodelthreec1],['currentmodelthreec2'=>$currentmodelthreec2],
         ['currentmodelthreec3'=>$currentmodelthreec3])->with('user2',$user2)->with('currentmodelthreec1',$currentmodelthreec1)->with('currentmodelthreec2',$currentmodelthreec2)->with('currentmodelthreec3',$currentmodelthreec3);
    }
   
    
    
    // Comparision new
    
    public function Comparision_new(){
        return view('DekhoevWebsite/comparision_new');
    }
    
    
    
   
    
    // Four Wheeler Vehicle Catelogue
    public function Four_Wheeler_Vehicle_Catelogue(){
        $sql2 = "select * from fourwheelerspecsfeatures";
        $fourwspecs = DB::select($sql2); 
        return view('DekhoevWebsite/four-wheeler-vehicle-catalogue',['fourwspecs'=>$fourwspecs])->with('fourwspecs',$fourwspecs);
    }
    
    // Two Wheeler Vehicle Catelogue
    public function Two_Vehicle_Vehicle_Catelogue(){
        // $sql2 = "select * from twowheelerspecsfeatures";
        // $twowspecs = DB::select($sql2); 
        // $id = session()->get('id');
        $twowspecs = Twowheelerspecsfeature::all();
        return view('DekhoevWebsite/two-wheeler-vehicle-catalogue')->with('twowspecs',$twowspecs);
    }
    
    //Three Wheeler Cargo Vehicle Catelogue
    public function Three_Wheeler_cargo_Vehicle_Catelogue(){
        $sql2 = "select * from threewheelercargofeatures ";
        $threewcargo = DB::select($sql2); 
        return view('DekhoevWebsite/three-wheeler-cargo-vehicle-catalogue',['threewcargo'=>$threewcargo])->with('threewcargo',$threewcargo);
    }
    
    // Four Wheeler  Product
    public function Four_Wheeler_Product_Details(Request $request){
        
        $model_id = $request->input('model_id');
        session()->put('model_id', $model_id);
        $Model_Name = $request->input('model_name');
        session()->put('Model_Name', $Model_Name);
        $model_id= $request->session()->get('model_id');
        $Model_Name= $request->session()->get('Model_Name');
        
        $sql1 = "select Feature_Name from newfeaturemasters WHERE Products='4wheeler '";
         $users= DB::select($sql1);
        $sql = "select * from fourwheelerspecsfeatures where id='$model_id'";
        $fourspecsproduct = DB::select($sql); 
        
        $sql2="select * from reviewevowners WHERE Products='4wheeler'";
        $reviewevowners=DB::select($sql2);
        $sql3="select * from reviewmodelratings WHERE Products='4wheeler'";
        $ratings=DB::select($sql3);
        return view('DekhoevWebsite/four-wheeler-product-details',['fourspecsproduct'=>$fourspecsproduct],['users'=>$users],['reviewevowners'=>$reviewevowners],['ratings'=>$ratings])
        ->with('fourspecsproduct',$fourspecsproduct)->with('users',$users)->with('reviewevowners',$reviewevowners)->with('ratings',$ratings);
    }
    
    // Two Wheeler Product
    public function Two_Wheeler_Product_Details(Request $request){
        $model_id = $request->input('model_id');
        session()->put('model_id', $model_id);
        $Model_Name = $request->input('model_name');
        session()->put('Model_Name', $Model_Name);
        $model_id= $request->session()->get('model_id');
        $Model_Name= $request->session()->get('Model_Name');
        
        $sql1 = "select Feature_Name from newfeaturemasters WHERE Products='2wheeler '";
        $users= DB::select($sql1);
        $sql = "select * from twowheelerspecsfeatures where id='$model_id'";
        $twospecsproduct = DB::select($sql); 
        $sql2="select * from reviewevowners WHERE Products='2wheeler'";
        $reviewevowners=DB::select($sql2);
        $sql3="select * from reviewmodelratings WHERE Products='2wheeler'";
        $ratings=DB::select($sql3);
        
        return view('DekhoevWebsite/two-wheeler-product-details',['twospecsproduct'=>$twospecsproduct],['users'=>$users],['reviewevowners'=>$reviewevowners],['ratings'=>$ratings])
        ->with('twospecsproduct',$twospecsproduct)->with('users',$users)->with('reviewevowners',$reviewevowners)->with('ratings',$ratings);
    }
    
    // Three Wheeler cargo Product
    public function Three_Wheeler_Cargo_Product_Details(Request $request){
        $model_id = $request->input('model_id');
        session()->put('model_id', $model_id);
        $Model_Name = $request->input('model_name');
        session()->put('Model_Name', $Model_Name);
        $model_id= $request->session()->get('model_id');
        $Model_Name= $request->session()->get('Model_Name');
        
        $sql1 = "select Feature_Name from newfeaturemasters WHERE Products='3wheeler Cargo '";
         $users= DB::select($sql1);
        $sql = "select * from threewheelercargofeatures where id='$model_id'";
        $threewheelercargoproduct = DB::select($sql); 
        $sql2="select * from reviewevowners WHERE Products='3wheeler Cargo'";
        $reviewevowners=DB::select($sql2);
        $sql3="select * from reviewmodelratings WHERE Products='3wheeler Cargo'";
        $ratings=DB::select($sql3);
        
        return view('DekhoevWebsite/three-wheeler-cargo-product-details',['threewheelercargoproduct'=>$threewheelercargoproduct],['users'=>$users],['reviewevowners'=>$reviewevowners],['ratings'=>$ratings] )
        ->with('threewheelercargoproduct',$threewheelercargoproduct)->with('users',$users)->with('reviewevowners',$reviewevowners)->with('ratings',$ratings);
    }
    
    // Three Wheeler Pass Product
    public function Three_Wheeler_Pass_Product_Details(Request $request){
        $model_id = $request->input('model_id');
        session()->put('model_id', $model_id);
        $Model_Name = $request->input('model_name');
        session()->put('Model_Name', $Model_Name);
        $model_id= $request->session()->get('model_id');
        $Model_Name= $request->session()->get('Model_Name');
        
        $sql1 = "select Feature_Name from newfeaturemasters WHERE Products='3wheeler Pass '";
         $users= DB::select($sql1);
        $sql = "select * from threewheelerpassfeatures where id='$model_id'";
        $threewheelerpassproduct = DB::select($sql); 
        $sql2="select * from reviewevowners WHERE Products='3wheeler Pass'";
        $reviewevowners=DB::select($sql2);
        $sql3="select * from reviewmodelratings WHERE Products='3wheeler Pass'";
        $ratings=DB::select($sql3);
        
        return view('DekhoevWebsite/three-wheeler-pass-product-details',['threewheelerpassproduct'=>$threewheelerpassproduct],['users'=>$users],['reviewevowners'=>$reviewevowners],['ratings'=>$ratings] )
        ->with('threewheelerpassproduct',$threewheelerpassproduct)->with('users',$users)->with('reviewevowners',$reviewevowners)->with('ratings',$ratings);
    }
    
    
    
          // Three Wheeler Pass Compaision Table Controller
    
    public function Comparision_Table_Three_Wheeler_Pass(Request $request){
        $Model_Name_Threec1 = $request->input('Model_Name_Threec1');
        session()->put('Model_Name_Threec1', $Model_Name_Threec1);
        $Model_Name_Threec2 = $request->input('Model_Name_Threec2');
        session()->put('Model_Name_Threec2', $Model_Name_Threec2);
        $Model_Name_Threec3 = $request->input('Model_Name_Threec3');
        session()->put('Model_Name_Threec3', $Model_Name_Threec3);
        
        $sql = "select * from threewheelerpassfeatures where Model_Name='$Model_Name_Threec1' ";
        $user = DB::select($sql); 
        $sql1 = "select * from threewheelerpassfeatures where Model_Name='$Model_Name_Threec2' ";
        $user1 = DB::select($sql1); 
        $sql2 = "select * from threewheelerpassfeatures where Model_Name='$Model_Name_Threec3' ";
        $user2 = DB::select($sql2); 
         $sql3 = "select * from newfeaturemasters where products='3wheeler Pass ' ";
        $user3 = DB::select($sql3);
        
        
        return view('DekhoevWebsite/Threep_comparision-table',['user'=>$user],['user1'=>$user1],['user2'=>$user2],['user3'=>$user3])->with('user',$user)->with('user1',$user1)->with('user2',$user2)->with('user3',$user3);
    }
    
    
         // Three Wheeler Cargo Compaision Table Controller
    
    public function Comparision_Table_Three_Wheeler_Cargo(Request $request){
        $Model_Name_Threec1 = $request->input('Model_Name_Threec1');
        session()->put('Model_Name_Threec1', $Model_Name_Threec1);
        $Model_Name_Threec2 = $request->input('Model_Name_Threec2');
        session()->put('Model_Name_Threec2', $Model_Name_Threec2);
        $Model_Name_Threec3 = $request->input('Model_Name_Threec3');
        session()->put('Model_Name_Threec3', $Model_Name_Threec3);
        
        $sql = "select * from threewheelercargofeatures where Model_Name='$Model_Name_Threec1' ";
        $user = DB::select($sql); 
        $sql1 = "select * from threewheelercargofeatures where Model_Name='$Model_Name_Threec2' ";
        $user1 = DB::select($sql1); 
        $sql2 = "select * from threewheelercargofeatures where Model_Name='$Model_Name_Threec3' ";
        $user2 = DB::select($sql2); 
        
         $sql3 = "select * from newfeaturemasters where products='3wheeler Cargo ' ";
        $user3 = DB::select($sql3);
        
        
        return view('DekhoevWebsite/Threec_comparision-table',['user'=>$user],['user1'=>$user1],['user2'=>$user2],['user3'=>$user3])->with('user',$user)->with('user1',$user1)->with('user2',$user2)->with('user3',$user3);
    }
    
    
          // Four Wheeler  Compaision Table Controller
    
    public function Comparision_Table_Four_Wheeler(Request $request){
        $Model_Name_Threec1 = $request->input('Model_Name_Threec1');
        session()->put('Model_Name_Threec1', $Model_Name_Threec1);
        $Model_Name_Threec2 = $request->input('Model_Name_Threec2');
        session()->put('Model_Name_Threec2', $Model_Name_Threec2);
        $Model_Name_Threec3 = $request->input('Model_Name_Threec3');
        session()->put('Model_Name_Threec3', $Model_Name_Threec3);
        
        $sql = "select * from fourwheelerspecsfeatures where Model_Name='$Model_Name_Threec1' ";
        $user = DB::select($sql); 
        $sql1 = "select * from fourwheelerspecsfeatures where Model_Name='$Model_Name_Threec2' ";
        $user1 = DB::select($sql1); 
        $sql2 = "select * from fourwheelerspecsfeatures where Model_Name='$Model_Name_Threec3' ";
        $user2 = DB::select($sql2); 
        $sql3 = "select * from newfeaturemasters where products='4wheeler ' ";
        $user3 = DB::select($sql3);
        
        
        return view('DekhoevWebsite/Four_comparision-table',['user'=>$user],['user1'=>$user1],['user2'=>$user2],['user3'=>$user3])->with('user',$user)->with('user1',$user1)->with('user2',$user2)->with('user3',$user3);
    }
    
            // Two Wheeler  Compaision Table Controller
    
    public function Comparision_Table_Two_Wheeler(Request $request){
        
        
        // $search = $request()->query('Searchtwowheeler');
        // if($search){
        //     $Twowheelerspecsfeature = Twowheelerspecsfeature::where('Model_Name', 'LIKE', "%{$search}%")->simplePaginate(3);
        // }else{
        //     $Twowheelerspecsfeature= Twowheelerspecsfeature::simplePaginate(3);
        // }
        
        $Model_Name_Threec1 = $request->input('Model_Name_Threec1');
        session()->put('Model_Name_Threec1', $Model_Name_Threec1);
        $Model_Name_Threec2 = $request->input('Model_Name_Threec2');
        session()->put('Model_Name_Threec2', $Model_Name_Threec2);
        $Model_Name_Threec3 = $request->input('Model_Name_Threec3');
        session()->put('Model_Name_Threec3', $Model_Name_Threec3);
        
        $sql = "select * from twowheelerspecsfeatures where Model_Name='$Model_Name_Threec1' ";
        $user = DB::select($sql); 
        $sql1 = "select * from twowheelerspecsfeatures where Model_Name='$Model_Name_Threec2' ";
        $user1 = DB::select($sql1); 
        $sql2 = "select * from twowheelerspecsfeatures where Model_Name='$Model_Name_Threec3' ";
        $user2 = DB::select($sql2); 
        $sql3 = "select * from newfeaturemasters where products='2wheeler ' ";
        $user3 = DB::select($sql3);
        
        return view('DekhoevWebsite/Two_comparision-table',['user3'=>$user3],['user'=>$user],['user1'=>$user1],['user2'=>$user2])
        ->with('user',$user)->with('user1',$user1)->with('user2',$user2)->with('user3',$user3);
        // ->with('Twowheelerspecsfeature',$Twowheelerspecsfeature)->with('request',$request);
    }
    
    
    
    //four wheeler review controller
    //  public function Feedback(Request $request){
    //     $Model_Name = $request->input('Model_Name');
    //     session()->put('Model_Name', $Model_Name);
    //     $currentcategory = $request->input('Products');
    //     session()->put('Products', $currentcategory);
    //     return view('DekhoevWebsite/Feedback/feedback')->with('sucess','Please enter feedback your this model...!');
    // }
    
    // Search Controller
    public function threecargoproduct(){
        $ThreeWCproduct= threewheelercargofeatures::select('Model_Name')->where('status','0')->get();    
        $data = [];
        foreach($ThreeWCproduct as $item){
            $data[]=$item['Model_Name'];
        }
        return $data;
    }
    
    
    //index page product list 
    
    
    public function twowheelerproducts()
    {
        $sql = "select * from twowheelerspecsfeatures";
        $twowspecs = DB::select($sql);
        return view('DekhoevWebsite/two-wheeler-product-list',['twowspecs'=>$twowspecs])->with('twowspecs',$twowspecs);
    }
    public function fourwheelerproducts()
    {
        $sql = "select * from fourwheelerspecsfeatures";
        $fourwspecs = DB::select($sql);
        return view('DekhoevWebsite/four-wheeler-product-list',['fourwspecs'=>$fourwspecs])->with('fourwspecs',$fourwspecs);
    }
    public function threewheelercargoproducts()
    {
        $sql = "select * from threewheelercargofeatures";
        $threewcargo = DB::select($sql);
        return view('DekhoevWebsite/three-wheeler-cargo-product-list',['threewcargo'=>$threewcargo])->with('threewcargo',$threewcargo);
    }
    public function threewheelerpassproducts()
    {
        $sql = "select * from threewheelerpassfeatures";
        $threewpass = DB::select($sql);
        return view('DekhoevWebsite/three-wheeler-pass-product-list',['threewpass'=>$threewpass])->with('threewpass',$threewpass);
    }
  
    
}


