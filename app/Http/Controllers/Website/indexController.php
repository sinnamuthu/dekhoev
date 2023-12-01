<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use DB;




class indexController extends Controller
{

    public function index()
    {
       return view('Website.index');
    }
    
    public function filter()
    {
       return view('Website.afterfilter');
    }
       public function compare1()
    {
       return view('Website.compare1');
    }
       public function compare2()
    {
       return view('Website.compare2');
    }

   
    
    
}


