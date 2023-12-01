<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviewevowner;
use App\Models\Reviewlogin;
use App\Models\Reviewblogger;
use App\Models\Reviewmodelratings;
use App\Models\Contributor;
use App\Models\Reviewbloggersec;

use DB;



class ReviewController extends Controller
{

    public function index()
    {
        return view('DekhoevWebsite/Review/create_review');
    }
    public function review_form1()
    {
        return view('DekhoevWebsite/reviewform1');
    }

    // public function SearchEVvehicle(Request $request)
    // {
    //     $Model_Name = $request->input('Model_Name');
    //     session()->put('Model_Name', $Model_Name);
    //     $Products = $request->input('Products');
    //     session()->put('Products', $Products);

    //     $Charging_Time = $request->input('Charging_Time');
    //     session()->put('Charging_Time', $Charging_Time);
    //     $Price = $request->input('Price');
    //     session()->put('Price', $Price);

    //     if(Products=='2wheeler' and Charging_Time =='$Charging_Time' and Price=='$Price'){
    //     $sql2 = "select * from twowheelerspecsfeatures ";
    //     $twowspecs = DB::select($sql2);            
    //     }

    //     if(Products=='4wheeler' and Charging_Time =='$Charging_Time' and Price=='$Price'){
    //     $sql2 = "select * from fourwheelerspecsfeatures ";
    //     $fourwspecs = DB::select($sql2);           
    //     }
    //     if(Products=='3wheeler Cargo' and Charging_Time =='$Charging_Time' and Price=='$Price'){
    //     $sql2 = "select * from threewheelercargofeatures ";
    //     $threewcargo = DB::select($sql2);            
    //     }
    //     else{
    //         $error = 'No data found';
    //     }



    //     return view('/DekhoevWebsite/Search_products',['threewcargo'=>$threewcargo],['twowspecs'=>$twowspecs],['fourwspecs'=>$fourwspecs])
    //     ->with('fourwspecs',$fourwspecs)->with('twowspecs',$twowspecs)->with('threewcargo',$threewcargo);

    // }

    public function Owner_review_store(Request $request)
    {
        $User_Types = $request->input('User_Types');
        session()->put('User_Types', $User_Types);

        $Reviewowner = new Reviewevowner();
        $Reviewowner->Products = $request->input('Products');
        $Reviewowner->Model_Name = $request->input('Model_Name');
        $Reviewowner->Name = $request->input('Name');
        $Reviewowner->Email = $request->input('Email');
        $Reviewowner->Mobile_Number = $request->input('Mobile_Number');
        $Reviewowner->Are_you_willing_to_answer_Other_People_Queries = $request->input('Are_you_willing_to_answer_Other_People_Queries');
        $Reviewowner->Pickup = $request->input('Pickup');
        $Reviewowner->Ease_of_driving = $request->input('Ease_of_driving');
        $Reviewowner->Ranges = $request->input('Ranges');
        $Reviewowner->Time_to_Change = $request->input('Time_to_Change');
        $Reviewowner->Price_value_for_money = $request->input('Price_value_for_money');
        $Reviewowner->Average = ($Reviewowner->Pickup + $Reviewowner->Ease_of_driving + $Reviewowner->Range + $Reviewowner->Time_to_Change + $Reviewowner->Price_value_for_money) / 5;
        $Reviewowner->Message = $request->input('Message');
        $Reviewowner->Model_Brand = $request->input('Model_Brand');
        $Reviewowner->User_Types = $request->input('User_Types');
        $Reviewowner->Want_to_convey_your_review_to_Manufacturer = $request->input('Want_to_convey_your_review_to_Manufacturer');
        $Reviewowner->Vehicle_Registration_No = $request->input('Vehicle_Registration_No');
        $Reviewowner->save();

        $review_to_Manufacturer = $request->input('Want_to_convey_your_review_to_Manufacturer');
        session()->put('Want_to_convey_your_review_to_Manufacturer', $review_to_Manufacturer);

        if ($review_to_Manufacturer == 'on') {

            $Contributor = new Contributor();
            $Model_Name = $request->input('Model_Name');
            session()->put('Model_Name', $Model_Name);
            $Products = $request->input('Products');
            session()->put('Products', $Products);

            $Contributor->Products = $request->input('Products');
            $Contributor->Model_Name = $request->input('Model_Name');
            $Contributor->Name = $request->input('Name');
            $Contributor->Email = $request->input('Email');
            $Contributor->Mobile_Number = $request->input('Mobile_Number');
            $Contributor->Message = $request->input('Message');
            $Contributor->User_Types = $request->input('User_Types');
            $Contributor->Vehicle_Registration_No = $request->input('Vehicle_Registration_No');
            $Contributor->save();
        }

        return back()->with('success', 'Thanks for your review...!');
    }
    public function Blogger_review_store(Request $request)
    {
        $blogger = new Reviewblogger();

        $emailcheck = $request->Email;
        $phonecheck = $request->Mobile_Number;
        $Passwordcheck   = $request->Password;

        $check = Reviewblogger::Where([
            ['Email', '=', $emailcheck],

        ])->first();
        if ($check) {
            return back()->with('Error', 'This Email id is already has been Registered Please Register With Different Email....!');
        } else {

            $Model_Name = $request->input('Model_Name');
            session()->put('Model_Name', $Model_Name);
            $Products = $request->input('Products');
            session()->put('Products', $Products);
            $Model_Brand = $request->input('Model_Brand');
            session()->put('Model_Brand', $Model_Brand);
            $Name = $request->input('Name');
            session()->put('Name', $Name);
            $Email = $request->input('Email');
            session()->put('Email', $Email);
            $Mobileno = $request->input('Mobile_Number');
            session()->put('Name', $Mobileno);

            $User_Types = $request->input('User_Types');
            session()->put('User_Types', $User_Types);

            $blogger = new Reviewblogger();
            $blogger->Products = $request->input('Products');
            $blogger->Model_Name = $request->input('Model_Name');
            $blogger->Name = $request->input('Name');
            $blogger->Email = $request->input('Email');
            $blogger->Mobile_Number = $request->input('Mobile_Number');
            $blogger->Password = $request->input('Password');
            $blogger->Model_Brand = $request->input('Model_Brand');
            $blogger->User_Types = $request->input('User_Types');
            $blogger->Are_you_willing_to_answer_Other_People_Queries = $request->input('Are_you_willing_to_answer_Other_People_Queries');
            $blogger->save();
        }
        return view('DekhoevWebsite/reviewform1')->with('success', 'Register Successfully');
    }
    public function Oem_review_store(Request $request)
    {

        $emailcheck = $request->Email;
        $phonecheck = $request->Mobile_Number;
        $Passwordcheck   = $request->Password;

        $check = Reviewblogger::Where([
            ['Email', '=', $emailcheck],

        ])->first();
        if ($check) {
            return back()->with('Error', 'This Email id is already has been Registered Please Register With Different Email....!');
        } else {
            $Model_Name = $request->input('Model_Name');
            session()->put('Model_Name', $Model_Name);
            $Products = $request->input('Products');
            session()->put('Products', $Products);
            $Model_Brand = $request->input('Model_Brand');
            session()->put('Model_Brand', $Model_Brand);
            $User_Types = $request->input('User_Types');
            session()->put('User_Types', $User_Types);

            $bloggers = new Reviewblogger();
            $bloggers->Products = $request->input('Products');
            $bloggers->Model_Name = $request->input('Model_Name');
            $bloggers->Name = $request->input('Name');
            $bloggers->Email = $request->input('Email');
            $bloggers->Mobile_Number = $request->input('Mobile_Number');
            $bloggers->Password = $request->input('Password');
            $bloggers->Model_Brand = $request->input('Model_Brand');
            $bloggers->User_Types = $request->input('User_Types');
            $bloggers->Are_you_willing_to_answer_Other_People_Queries = $request->input('Are_you_willing_to_answer_Other_People_Queries');
            $bloggers->save();
        }



        return view('DekhoevWebsite/reviewform1')->with('success', 'Register Successfully');
    }

    public function login_review_store(Request $request)
    {
        $loing = new Reviewlogin();
        $Model_Name = $request->input('Model_Name');
        session()->put('Model_Name', $Model_Name);
        $Products = $request->input('Products');
        session()->put('Products', $Products);
        $Model_Brand = $request->input('Model_Brand');
        session()->put('Model_Brand', $Model_Brand);

        $User_Types = $request->input('User_Types');
        session()->put('User_Types', $User_Types);



        $loing->Products = $request->input('Products');
        $loing->Model_Name = $request->input('Model_Name');
        $MobileNumber_Email = $request->input('MobileNumber_Email');
        $password = $request->input('password');
        $loing->Model_Brand = $request->input('Model_Brand');
        $loing->User_Types = $request->input('User_Types');

        $sql1 = "Select Email,Password from reviewbloggers";
        $login = DB::Select($sql1);


        foreach ($login as $logins) {
            $valid = 0;
            if ($logins->Email == $MobileNumber_Email  &&  $logins->Password == $password) {
                $valid = 1;
                return view('DekhoevWebsite/reviewform1')->with('success', 'login Successfully');
            }
        }
        if ($valid == 0)
            return back()->with('loginError', 'Invalid Credentials....!');
    }
    public function oemlogin_review_store(Request $request)
    {
        $loing = new Reviewlogin();
        $Model_Name = $request->input('Model_Name');
        session()->put('Model_Name', $Model_Name);
        $Products = $request->input('Products');
        session()->put('Products', $Products);
        $Model_Brand = $request->input('Model_Brand');
        session()->put('Model_Brand', $Model_Brand);
        $User_Types = $request->input('User_Types');
        session()->put('User_Types', $User_Types);

        // if(($emailphone==$Email)&&($loingpaswrd==$password)){

        // }
        // return view('DekhoevWebsite/reviewform1')->with('success' ,'login Successfully');

        $loing->Products = $request->input('Products');
        $loing->Model_Name = $request->input('Model_Name');
        $MobileNumber_Email = $request->input('MobileNumber_Email');
        $password = $request->input('password');
        $loing->Model_Brand = $request->input('Model_Brand');
        $loing->User_Types = $request->input('User_Types');

        $sql1 = "Select Email,Password from reviewbloggers";
        $login = DB::Select($sql1);


        foreach ($login as $logins) {
            $valid = 0;
            if ($logins->Email == $MobileNumber_Email  &&  $logins->Password == $password) {
                $valid = 1;
                return view('DekhoevWebsite/reviewform1')->with('success', 'login Successfully');
            }
        }
        if ($valid == 0)
            return back()->with('loginError', 'Invalid Credentials....!');
    }
    public function Ratings_review_store(Request $request)
    {

        $ratings = new Reviewmodelratings();
        $Model_Name = $request->input('Model_Name');
        session()->put('Model_Name', $Model_Name);
        $Products = $request->input('Products');
        session()->put('Products', $Products);
        $Model_Brand = $request->input('Model_Brand');
        session()->put('Model_Brand', $Model_Brand);
        $User_Types = $request->input('User_Types');
        session()->put('User_Types', $User_Types);

        $User_Types = $request->input('User_Types');
        session()->put('User_Types', $User_Types);

        $ratings->Products = $request->input('Products');
        $ratings->Model_Name = $request->input('Model_Name');
        $ratings->Are_you_willing_to_answer_Other_People_Queries = $request->input('Are_you_willing_to_answer_Other_People_Queries');
        $ratings->Pickup = $request->input('Pickup');
        $ratings->Ease_of_driving = $request->input('Ease_of_driving');
        $ratings->Ranges = $request->input('Ranges');
        $ratings->Time_to_Change = $request->input('Time_to_Change');
        $ratings->Average = ($ratings->Pickup + $ratings->Ease_of_driving + $ratings->Range + $ratings->Time_to_Change + $ratings->Price_value_for_money) / 5;
        $ratings->Price_value_for_money = $request->input('Price_value_for_money');
        $ratings->Message = $request->input('Message');
        $ratings->Model_Brand = $request->input('Model_Brand');
        $ratings->User_Types = $request->input('User_Types');
        $ratings->save();


        return View('DekhoevWebsite/reviewform1')->with('success', 'Thanks for your review...!');
    }

    // public function Contributors_store(Request $request)
    // {
    //     $Contributor= new Contributor();
    //     $Model_Name = $request->input('Model_Name');
    //     session()->put('Model_Name', $Model_Name);
    //     $Products = $request->input('Products');
    //     session()->put('Products', $Products);

    //     $Contributor->Products = $request->input('Products');
    //     $Contributor->Model_Name = $request->input('Model_Name');
    //     $Contributor->Name = $request->input('Name');
    //     $Contributor->Email = $request->input('Email');
    //     $Contributor->Mobile_Number = $request->input('Mobile_Number');
    //     $Contributor->Message = $request->input('Message');
    //     $Contributor->Vehicle_Registration_No = $request->input('Vehicle_Registration_No');
    //     $Contributor->save();

    //     return back('/Website/Home')->with('Success','Thanks For Your Review....');


    // }

    public function Owner_review(Request $request)
    {

        $sql1 = "Select * from reviewevowners ";
        $owner = DB::select($sql1);
        return view('DekhoevWebsite/Review/owner_review', ['owner' => $owner])->with('owner', $owner);
    }
    public function Blogger_review(Request $request)
    {

        $sql2 = "select* from reviewmodelratings Where User_Types='Blogger'";
        $ratings = DB::select($sql2);

        return view('DekhoevWebsite/Review/blogger_review', ['ratings' => $ratings])->with('ratings', $ratings);
    }

    public function oem_review(Request $request)
    {

        $sql2 = "select* from reviewmodelratings Where User_Types='OEM'";
        $ratings = DB::select($sql2);

        return view('DekhoevWebsite/Review/oem_review', ['ratings' => $ratings])->with('ratings', $ratings);
    }

    public function Contributors_view()
    {
        $contributors = Contributor::all();
        return view('DekhoevWebsite.Contributor.Contributors_view')->with('contributors', $contributors);
    }


    public function owner_review_delete($id)
    {
        $Owner = Reviewevowner::find($id);
        $Owner->delete();
        return back()->with('success', 'Review deleted successfully....!');
    }
    public function ratings_review_delete($id)
    {
        $ratings = Reviewmodelratings::find($id);
        $ratings->delete();
        return back()->with('success', 'Review deleted successfully....!');
    }

    public function Contributors_delete($id)
    {
        $contributors = Contributor::find($id);
        $contributors->delete();
        return back()->with('success', 'Contributor comment deleted successfully....!');
    }
}
