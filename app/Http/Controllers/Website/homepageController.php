<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;




class homepageController extends Controller
{
    public function header(){
        return view('Website.header');
    }
    public function footer(){
        return view('Website.footer');
    }
    public function index(){
        return view('Website.index');
    }
    public function comparision(){
        return view('Website.comparision_new');
    }
    public function addtwovehicle(){
        return view('Website.add_two_vehicle');
    }
}


