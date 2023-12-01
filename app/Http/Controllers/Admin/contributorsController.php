<?php

namespace App\Http\Controllers\Admin;
use App\Models\Fourwheelerspecsfeature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;

class contributorsController extends Controller
{
    public function create(){
           $fourwspecs = Fourwheelerspecsfeature::all();
         return view ('Admin/Adminlayout/contributors/create')->with('Fourwheelerspecsfeature', $fourwspecs);
    }
    
}
