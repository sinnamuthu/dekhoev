<?php

namespace App\Http\Controllers\ExistingModel;
use App\Models\Existingmodel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Twowheelerspecsfeature;
use App\Models\Threewheelercargofeature;
use App\Models\Threewheelerpassfeature;
use App\Models\Fourwheelerspecsfeature;
use DB;

class ExistingmodelController extends Controller
{

    public function index()
    {
        return view('ExistingModel.index');
    }


    public function create(Request $request)
    {
 
        $currentcate = $request->session()->get('cate');
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        return view('ExistingModel.create');
    }
    public function twowheelersubcategory(Request $request)
    {
  
         $currentcate = $request->input('cate');
         session()->put('cate', $currentcate);
        return view('ExistingModel.twowheelersubcategory');
    }
    public function fourwheelersubcategory(Request $request)
    {
 
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        return view('ExistingModel.fourwheelersubcategory');
    }
    public function threewheelercargosubcategory(Request $request)
    {
 
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        return view('ExistingModel.threewheelercargosubcategory');
    }
    public function threewheelerpasssubcategory(Request $request)
    {
  
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        return view('ExistingModel.threewheelerpasssubcategory');
    }

    public function twowheelerspecs(Request $request)
    {
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $Twowheelerspecsfeature = Twowheelerspecsfeature::all();
        return view ('NewModel.twowheelerspecsfeatureindex', compact('Twowheelerspecsfeature'))->with('Twowheelerspecsfeature', $Twowheelerspecsfeature);
    }
        public function threewheelercargo(Request $request)
    {
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $Threewheelercargofeature = Threewheelercargofeature::all();
        return view ('NewModel.threewheelercargofeatureindex')->with('Threewheelercargofeature', $Threewheelercargofeature);
    }
        public function fourwheelerspecs(Request $request)
    {
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $Fourwheelerspecsfeature = Fourwheelerspecsfeature::all();
        return view ('NewModel.fourwheelerfeatureindex')->with('Fourwheelerspecsfeature', $Fourwheelerspecsfeature);
    }
        public function threewheelerpass(Request $request)
    {
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        $Threewheelerpassfeature = Threewheelerpassfeature::all();
        return view ('NewModel.threewheelerpassfeatureindex')->with('Threewheelerpassfeature', $Threewheelerpassfeature);
    }
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
