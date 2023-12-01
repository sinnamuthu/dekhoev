<?php

namespace App\Http\Controllers\NewFeature;

use App\Models\Newfeaturemaster;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;
use File;


class newfeaturemasterController extends Controller
{

    public function index()
    {
        return view('NewFeature.index');
    }
    public function Editindex()
    {
        return view('EditFeature.index');
    }

    public function create(Request $request)
    {
        $currentcate = new Newfeaturemaster();
        // $currentcate = $request->session()->get('cate');
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        $currentcategory = $request->input('category');
        session()->put('category', $currentcategory);
        // session()->put('cate', $currentcate);
        return view('NewFeature.create');
    }
    public function twowheelersubcategory(Request $request)
    {
        $currentcate = new Newfeaturemaster();
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        return view('NewFeature.twowheelersubcategory');
    }
    public function fourwheelersubcategory(Request $request)
    {
        $currentcate = new Newfeaturemaster();
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        return view('NewFeature.fourwheelersubcategory');
    }
    public function threewheelercargosubcategory(Request $request)
    {
        $currentcate = new Newfeaturemaster();
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        return view('NewFeature.threewheelercargosubcategory');
    }
    public function threewheelerpasssubcategory(Request $request)
    {
        $currentcate = new Newfeaturemaster();
        $currentcate = $request->input('cate');
        session()->put('cate', $currentcate);
        return view('NewFeature.threewheelerpasssubcategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Featureimage' => 'image|mimes:jpeg,png,svg,jpg|max:100'
        ]);
        $valuecat = $request->session()->get('cate');
        $valuecategory = $request->session()->get('category');
        $Newfeature = new Newfeaturemaster();
        $Newfeature->Products =  $valuecat;
        $Newfeature->Category = $valuecategory;
        $Newfeature->Feature_Name = $request->input('Feature_Name');
        $Newfeature->Feature_Description = $request->input('Feature_Description');
        $Newfeature->Unit_of_Measurement = $request->input('Unit_of_Measurement');
        $Newfeature->Input_Types = $request->input('Input_Types');
        $Newfeature->Dropdown_Values = $request->input('Dropdown_Values');
        if ($request->hasFile('Featureimage')) {
            $file = $request->file('Featureimage');
            $filename = time() . '.' . $file->GetClientOriginalName();
            $file->move('UploadImages/NewFeatureMaster/', $filename);
            $Newfeature->Featureimage = $filename;
        }
        $Newfeature->save();

        $Model_Name = $request->input('Input_Types');
        session()->put('Input_Types', $Model_Name);

        // $FName= $request->input('Feature_Name');
        // $FName = str_replace(" ","_",$FName);
        // $sql = "ALTER TABLE fourwheelerspecsfeatures ADD $FName varchar(255)";
        // DB::statement($sql);

        if ($valuecat == '4wheeler') {
            $FName = $request->input('Feature_Name');
            $FName = str_replace(" ", "_", $FName);
            $FName = str_replace("&", "", $FName);
            $FName = str_replace("/", "", $FName);
            $FName = str_replace("@", "", $FName);
            $FName = str_replace("-", "_", $FName);
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
            $sql = "ALTER TABLE fourwheelerspecsfeatures ADD $FName varchar(20)";
            DB::statement($sql);
        }
        if ($valuecat == '2wheeler') {
            $FName = $request->input('Feature_Name');
            $FName = str_replace(" ", "_", $FName);
            $FName = str_replace("&", "", $FName);
            $FName = str_replace("/", "", $FName);
            $FName = str_replace("@", "", $FName);
            $FName = str_replace("-", "_", $FName);
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
            $sql = "ALTER TABLE twowheelerspecsfeatures ADD $FName varchar(20)";
            DB::statement($sql);
        }
        if ($valuecat == '3wheeler Pass') {
            $FName = $request->input('Feature_Name');
            $FName = str_replace(" ", "_", $FName);
            $FName = str_replace("&", "", $FName);
            $FName = str_replace("/", "", $FName);
            $FName = str_replace("@", "", $FName);
            $FName = str_replace("-", "_", $FName);
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
            $sql = "ALTER TABLE threewheelerpassfeatures ADD $FName varchar(20)";
            DB::statement($sql);
        }
        if ($valuecat == '3wheeler Cargo') {
            $FName = $request->input('Feature_Name');
            $FName = str_replace(" ", "_", $FName);
            $FName = str_replace("&", "", $FName);
            $FName = str_replace("/", "", $FName);
            $FName = str_replace("@", "", $FName);
            $FName = str_replace("-", "_", $FName);
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
            $sql = "ALTER TABLE threewheelercargofeatures ADD $FName varchar(20)";
            DB::statement($sql);
        }

        //link backend
        //   $str=file_get_contents('../Fourwheelerspecsfeature/FourwheelerspecsfeatureController.php');

        //   //replace something in the file string - this is a VERY simple example
        //   $str=str_replace('$Fourwheelerspecsfeature->save();','$Fourwheelerspecsfeature->save();success;' ,$str);

        //   //write the entire string
        //   file_put_contents('../Fourwheelerspecsfeature/FourwheelerspecsfeatureController.php', $str);

        //link backend

        if ($Newfeature) {
            return back()->with('Success', 'Data have been successfully added..!!');
        } else {
            return back()->with('Fail', 'Something went wrong..!');
        }
        return view('NewFeature.create')->with('Feature Added Successfully');
    }
    public function show()
    {
        $Newfeature = Newfeaturemaster::all();
        return view('NewFeature.show')->with('Newfeature', $Newfeature);
    }
    public function edit(Request $request, $id)
    {
        $Newfeature = Newfeaturemaster::find($id);
        $sql = "Select * from newfeaturemasters where id='$id'";
        $user = DB::select($sql);
        return view('NewFeature.edit', compact('Newfeature'))->with('user', $user);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Featureimage' => 'image|mimes:jpeg,png,svg,jpg|max:100'
        ]);
        // $valuecat = $request->session()->get('cate');
        $sql1 = "select * from newfeaturemasters where id='$id' ";
        $product = DB::select($sql1);
        foreach ($product as $product) {
            $Pname = $product->Products;
            $valuecat = $product->Products;
            $Fname = $product->Feature_Name;
            $FName = str_replace(" ", "_", $Fname);
            $FName = str_replace("&", "", $FName);
            $FName = str_replace("/", "", $FName);
            $FName = str_replace("@", "", $FName);
            $FName = str_replace("-", "_", $FName);
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
            if ($Pname == '4wheeler') {
                $FsName = $request->input('Feature_Name');
                $FsName = str_replace(" ", "_", $FsName);
                $FsName = str_replace("&", "", $FsName);
                $FsName = str_replace("/", "", $FsName);
                $FsName = str_replace("@", "", $FsName);
                $FsName = str_replace("-", "_", $FsName);
                $FsName = str_replace("(","_",$FsName);
                $FsName = str_replace(")","_",$FsName);
                $FsName = str_replace("{","_",$FsName);
                $FsName = str_replace("}","_",$FsName);
                $FsName = str_replace("[","_",$FsName);
                $FsName = str_replace("]","_",$FsName);
                $FsName = str_replace("'","_",$FsName);
                $FsName = str_replace("%","_",$FsName);
                $FsName = str_replace("?","_",$FsName);
                $FsName = str_replace("!","_",$FsName);
                $FsName = str_replace("*","_",$FsName);
                $FsName = str_replace("<","_",$FsName);
                $FsName = str_replace(">","_",$FsName);
                $FsName = str_replace("#","_",$FsName);
                $FsName = str_replace("~","_",$FsName);     
                $FsName = str_replace(":","_",$FsName);
                $FsName = str_replace(";","_",$FsName);
                $FsName = str_replace(",","_",$FsName);
                $FsName = str_replace("+","_",$FsName);
                $FsName = str_replace("$","_",$FsName);
                $FsName = str_replace("^","_",$FsName);
                $FsName = str_replace("`","_",$FsName);


                $sql2 = "ALTER TABLE fourwheelerspecsfeatures CHANGE COLUMN $FName $FsName VARCHAR(100) ";
                $products = DB::select($sql2);
            }
            if ($Pname == '2wheeler') {
                $FsName = $request->input('Feature_Name');
                $FsName = str_replace(" ", "_", $FsName);
                $FsName = str_replace("&", "", $FsName);
                $FsName = str_replace("/", "", $FsName);
                $FsName = str_replace("@", "", $FsName);
                $FsName = str_replace("-", "_", $FsName);
                $FsName = str_replace("(","_",$FsName);
                $FsName = str_replace(")","_",$FsName);
                $FsName = str_replace("{","_",$FsName);
                $FsName = str_replace("}","_",$FsName);
                $FsName = str_replace("[","_",$FsName);
                $FsName = str_replace("]","_",$FsName);
                $FsName = str_replace("'","_",$FsName);
                $FsName = str_replace("%","_",$FsName);
                $FsName = str_replace("?","_",$FsName);
                $FsName = str_replace("!","_",$FsName);
                $FsName = str_replace("*","_",$FsName);
                $FsName = str_replace("<","_",$FsName);
                $FsName = str_replace(">","_",$FsName);
                $FsName = str_replace("#","_",$FsName);
                $FsName = str_replace("~","_",$FsName);
                $FsName = str_replace(":","_",$FsName);
                $FsName = str_replace(";","_",$FsName);
                $FsName = str_replace(",","_",$FsName);
                $FsName = str_replace("+","_",$FsName);
                $FsName = str_replace("$","_",$FsName);
                $FsName = str_replace("^","_",$FsName);
                $FsName = str_replace("`","_",$FsName);

                $sql2 = "ALTER TABLE twowheelerspecsfeatures CHANGE COLUMN $FName $FsName VARCHAR(100) ";
                $products = DB::select($sql2);
            }
            if ($Pname == '3wheeler Pass') {

                $FsName = $request->input('Feature_Name');
                $FsName = str_replace(" ", "_", $FsName);
                $FsName = str_replace("&", "", $FsName);
                $FsName = str_replace("/", "", $FsName);
                $FsName = str_replace("@", "", $FsName);
                $FsName = str_replace("-", "_", $FsName);
                $FsName = str_replace("(","_",$FsName);
                $FsName = str_replace(")","_",$FsName);
                $FsName = str_replace("{","_",$FsName);
                $FsName = str_replace("}","_",$FsName);
                $FsName = str_replace("[","_",$FsName);
                $FsName = str_replace("]","_",$FsName);
                $FsName = str_replace("'","_",$FsName);
                $FsName = str_replace("%","_",$FsName);
                $FsName = str_replace("?","_",$FsName);
                $FsName = str_replace("!","_",$FsName);
                $FsName = str_replace("*","_",$FsName);
                $FsName = str_replace("<","_",$FsName);
                $FsName = str_replace(">","_",$FsName);
                $FsName = str_replace("#","_",$FsName);
                $FsName = str_replace("~","_",$FsName);
                $FsName = str_replace(":","_",$FsName);
                $FsName = str_replace(";","_",$FsName);
                $FsName = str_replace(",","_",$FsName);
                $FsName = str_replace("+","_",$FsName);
                $FsName = str_replace("$","_",$FsName);
                $FsName = str_replace("^","_",$FsName);
                $FsName = str_replace("`","_",$FsName);


                $sql2 = "ALTER TABLE threewheelerpassfeatures CHANGE COLUMN $FName $FsName VARCHAR(100) ";
                $products = DB::select($sql2);
            }
            if ($Pname == '3wheeler Cargo') {

                $FsName = $request->input('Feature_Name');
                $FsName = str_replace(" ", "_", $FsName);
                $FsName = str_replace("&", "", $FsName);
                $FsName = str_replace("/", "", $FsName);
                $FsName = str_replace("@", "", $FsName);
                $FsName = str_replace("-", "_", $FsName);
                $FsName = str_replace("(","_",$FsName);
                $FsName = str_replace(")","_",$FsName);
                $FsName = str_replace("{","_",$FsName);
                $FsName = str_replace("}","_",$FsName);
                $FsName = str_replace("[","_",$FsName);
                $FsName = str_replace("]","_",$FsName);
                $FsName = str_replace("'","_",$FsName);
                $FsName = str_replace("%","_",$FsName);
                $FsName = str_replace("?","_",$FsName);
                $FsName = str_replace("!","_",$FsName);
                $FsName = str_replace("*","_",$FsName);
                $FsName = str_replace("<","_",$FsName);
                $FsName = str_replace(">","_",$FsName);
                $FsName = str_replace("#","_",$FsName);
                $FsName = str_replace("~","_",$FsName);
                $FsName = str_replace(":","_",$FsName);
                $FsName = str_replace(";","_",$FsName);
                $FsName = str_replace(",","_",$FsName);
                $FsName = str_replace("+","_",$FsName);
                $FsName = str_replace("$","_",$FsName);
                $FsName = str_replace("^","_",$FsName);
                $FsName = str_replace("`","_",$FsName);


                $sql2 = "ALTER TABLE threewheelercargofeatures CHANGE COLUMN $FName $FsName VARCHAR(100) ";
                $products = DB::select($sql2);
            }
        }
        //delete
        $Newfeature = Newfeaturemaster::find($id);
        $Newfeature->Feature_Name = $request->input('Feature_Name');
        $Newfeature->Feature_Description = $request->input('Feature_Description');
        $Newfeature->Unit_of_Measurement = $request->input('Unit_of_Measurement');
        $Newfeature->Input_Types = $request->input('Input_Types');
        $Newfeature->Dropdown_Values = $request->input('Dropdown_Values');

        if ($request->hasFile('Featureimage')) {
            $path = 'UploadImages/NewFeatureMaster/' . $Newfeature->Featureimage;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('Featureimage');
            $filename = time() . '.' . $file->GetClientOriginalName();
            $file->move('UploadImages/NewFeatureMaster/', $filename);
            $Newfeature->Featureimage = $filename;
        }
        $Newfeature->update();

        return redirect('/NewFeature/show/')->with('Newfeature', $Newfeature)->with('Suucess', 'Feature update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $sql1 = "select * from newfeaturemasters where id='$id' ";
        $product = DB::select($sql1);

        $Newfeature = Newfeaturemaster::find($id);
        $Newfeature->delete();

        foreach ($product as $product) {
            $Pname = $product->Products;
            $Fname = $product->Feature_Name;
            $FName = str_replace(" ", "_", $Fname);
            $FName = str_replace("&", "", $FName);
            $FName = str_replace("/", "", $FName);
            $FName = str_replace("@", "", $FName);
            $FName = str_replace("-", "_", $FName);
            $FName = str_replace("(", "_",$FName);
            $FName = str_replace(")", "_",$FName);
            $FName = str_replace("{", "_",$FName);
            $FName = str_replace("}", "_",$FName);
            $FName = str_replace("[", "_",$FName);
            $FName = str_replace("]", "_",$FName);
            $FName = str_replace("'", "_",$FName);
            $FName = str_replace("%", "_",$FName);
            $FName = str_replace("?", "_",$FName);
            $FName = str_replace("!", "_",$FName);
            $FName = str_replace("*", "_",$FName);
            $FName = str_replace("<", "_",$FName);
            $FName = str_replace(">", "_",$FName);
            $FName = str_replace("#", "_",$FName);
            $FName = str_replace("~", "_",$FName);
            $FName = str_replace(":","_",$FName);
            $FName = str_replace(";","_",$FName);
            $FName = str_replace(",","_",$FName);
            $FName = str_replace("+","_",$FName);
            $FName = str_replace("$","_",$FName);
            $FName = str_replace("^","_",$FName);
            $FName = str_replace("`","_",$FName);
            
            if ($Pname == '4wheeler') {
                $sql2 = "ALTER TABLE fourwheelerspecsfeatures DROP COLUMN $FName ;";
                $products = DB::select($sql2);
            }
            if ($Pname == '2wheeler') {
                $sql2 = "ALTER TABLE twowheelerspecsfeatures DROP COLUMN $FName ;";
                $products = DB::select($sql2);
            }
            if ($Pname == '3wheeler Pass') {
                $sql2 = "ALTER TABLE threewheelerpassfeatures DROP COLUMN $FName ;";
                $products = DB::select($sql2);
            }
            if ($Pname == '3wheeler Cargo') {
                $sql2 = "ALTER TABLE threewheelercargofeatures DROP COLUMN $FName ;";
                $products = DB::select($sql2);
            }
        }




        return back()->with('Feature deleted successfully....!');
    }
}
