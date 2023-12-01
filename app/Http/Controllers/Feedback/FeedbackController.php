<?php

namespace App\Http\Controllers\Feedback;
use App\Models\Feedbackcomment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FeedbackController extends Controller
{

    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $Model_Name = $request->input('Model_Name');
        session()->put('Model_Name', $Model_Name);

        $Model_Description = $request->input('Model_Description');
        session()->put('Model_Description', $Model_Description);

        $currentcategory = $request->input('Products');
        session()->put('Products', $currentcategory);
        return view('DekhoevWebsite/Feedback/feedback')->with('sucess','Please enter your feedback..!');
    }


    public function store(Request $request)
    {


        $Feedback = new Feedbackcomment();
        $Feedback->Products=$request->input('Products');
        $Feedback->Model_Name=$request->input('Model_Name');
        $Feedback->Model_Description=$request->input('Model_Description');
        $Feedback->Name=$request->input('Name');
        $Feedback->Email=$request->input('Email');
        $Feedback->Mobile_Number=$request->input('Mobile_Number');
        $Feedback->Subject=$request->input('Subject');
        $Feedback->Feedbackcomments=$request->input('Feedbackcomments');
        $Feedback->save();
        
        return back()->with('Success','Thanks Your Feedback....!');
    }

    public function show()
    {
        $Feedback = Feedbackcomment::all();
        return view('DekhoevWebsite/Feedback/show')->with('Feedback', $Feedback);
    }
        public function Viewcomments($id)
    {
        $Feedback = Feedbackcomment::find($id);
        return view('DekhoevWebsite/Feedback/viewcomments')->with('Feedback', $Feedback);
    }

    public function destroy($id)
    {
        $Feedback = Feedbackcomment::find($id);
        $Feedback->delete();
        return back()->with('success', 'Feedback deleted successfully...!');
        
    }
}
