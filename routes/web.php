<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandMaster\newbrandmasterController;
use App\Http\Controllers\Post\postcontroller;
use App\Http\Controllers\Post\metadescriptioncontroller;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Admin\admin4wspecsController;
use App\Http\Controllers\Admin\admin2wspecsController;
use App\Http\Controllers\Admin\admin3wspecscargoController;
use App\Http\Controllers\Admin\admin3wspecspassController;
// use App\Http\Controllers\Admin\reviewController;
use App\Http\Controllers\Admin\contributorsController;
use App\Http\Controllers\Registration\RegistrationController;
use App\Http\Controllers\NewFeature\newfeaturemasterController;
use App\Http\Controllers\NewModel\NewmodelController;
use App\Http\Controllers\ExistingModel\ExistingmodelController;
use App\Http\Controllers\NewModelfeature\NewmodelfeatureController;
use App\Http\Controllers\NewModelFearureimage\NewmodelfeatureimageController;
use App\Http\Controllers\Modelfeaturedump\ModelfeaturedumpController;
use App\Http\Controllers\Fourwheelerspecsfeature\FourwheelerspecsfeatureController;
use App\Http\Controllers\Threewheelerpassfeature\ThreewheelerpassfeatureController;
use App\Http\Controllers\Twowheelerspecsfeature\TwowheelerspecsfeatureController;
use App\Http\Controllers\Threewheelercargofeature\ThreewheelercargofeatureController;
use App\Http\Controllers\Website\indexController;
use App\Http\Controllers\Website\homepageController;
use App\Http\Controllers\DekhoevWebsite\DekhoEVHomeController;
use App\Http\Controllers\Feedback\FeedbackController;
use App\Http\Controllers\Review\ReviewController;
use App\Http\Controllers\Comparison\ComparisonController;
use App\Http\Controllers\WebsiteOEM\OEMmodelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Website
Route::get('', function () {
    return view('DekhoevWebsite.index');
});

//Superadmin panel
Route::view('register','Auth/register');
Route::post('store',[RegisterController::class,'store']);
Route::get('Auth/show_admin',[RegisterController::class,'show_admin']);
Route::get('Auth/delete_admin/{id}',[RegisterController::class,'delete_admin']);
Route::view('home','home')->middleware('auth');

Route::view('login','Auth.login')->middleware('guest')->name('login');
Route::post('Auth/authenticate',[LoginController::class,'authenticate']);
Route::get('logout',[LoginController::class,'logout']);





//** OEM Brand Master**//
// Route::get('/BrandMaster/create',[brandmasterController::class,'create']);
// Route::post('/BrandMaster/store',[brandmasterController::class,'store']);
// Route::get('/BrandMaster/twowheeloemsubcategory',[brandmasterController::class,'twowheeloemsubcategory']);

Route::get('/BrandMaster/index', [newbrandmasterController::class, 'index']);
// Route::get('/BrandMaster/twowheelersubcategory',[newbrandmasterController::class,'twowheelersubcategory']);
// Route::get('/BrandMaster/fourwheelersubcategory',[newbrandmasterController::class,'fourwheelersubcategory']);
// Route::get('/BrandMaster/threewheelercargosubcategory',[newbrandmasterController::class,'threewheelercargosubcategory']);
// Route::get('/BrandMaster/threewheelerpasssubcategory',[newbrandmasterController::class,'threewheelerpasssubcategory']);
Route::get('/BrandMaster/create', [newbrandmasterController::class, 'create']);
Route::post('/BrandMaster/store', [newbrandmasterController::class, 'store'])->name('brandmaster');
Route::get('/BrandMaster/show', [newbrandmasterController::class, 'show'])->name('brandmaster');
Route::get('/BrandMaster/delete/{id}', [newbrandmasterController::class, 'destroy'])->name('brandmaster');
Route::get('/BrandMaster/edit/{id}', [newbrandmasterController::class, 'edit'])->name('brandmaster');
Route::post('/BrandMaster/update/{id}', [newbrandmasterController::class, 'update'])->name('brandmaster');

//** Post**//
Route::get('/Post/index', [Postcontroller::class, 'index']);
Route::get('/Post/create', [Postcontroller::class, 'create']);
Route::post('/Post/store', [Postcontroller::class, 'store'])->name('post');
Route::get('/Post/show/{id}', [Postcontroller::class, 'show'])->name('post');
Route::get('/Post/edit/{id}', [Postcontroller::class, 'edit'])->name('post');
Route::post('/Post/update/{id}', [Postcontroller::class, 'update'])->name('post');
Route::get('/Post/delete/{id}', [Postcontroller::class, 'destroy'])->name('post');


//*Metadescription**//
Route::get('/Metadescription/index', [metadescriptioncontroller::class, 'index']);
Route::get('/Metadescription/create', [metadescriptioncontroller::class, 'create']);
Route::post('/Metadescription/store', [metadescriptioncontroller::class, 'store'])->name('post');
Route::get('/Metadescription/show/{id}', [metadescriptioncontroller::class, 'show'])->name('Metadescription');
Route::get('/Metadescription/edit/{id}', [metadescriptioncontroller::class, 'edit'])->name('post');
Route::post('/Metadescription/update/{id}', [metadescriptioncontroller::class, 'update'])->name('post');
// Route::get('/Metadescription/delete/{id}', [Postcontroller::class, 'destroy'])->name('post');

//Post Search Table
Route::get('/post_search_table', [Postcontroller::class, 'post_date_search'])->name('post');


//** Blog**//
Route::get('/Blog/create', [BlogController::class, 'create']);
Route::post('/Blog/store', [BlogController::class, 'store'])->name('Blog');

//** Registration**//
Route::get('/Registration/create', [RegistrationController::class, 'create'])->name('Registration');
Route::post('/Registration/store', [RegistrationController::class, 'store'])->name('Registration');
Route::get('/Registration/delete/{id}', [RegistrationController::class, 'destroy'])->name('Registration');


//** New feature**//
// Route::get('/NewFeatureMaster/create',[newfeaturemasterController::class,'create']);
Route::get('/NewFeature/index', [newfeaturemasterController::class, 'index']);
// Route::get('/NewFeature/twowheelersubcategory',[newfeaturemasterController::class,'twowheelersubcategory']);
// Route::get('/NewFeature/fourwheelersubcategory',[newfeaturemasterController::class,'fourwheelersubcategory']);
// Route::get('/NewFeature/threewheelercargosubcategory',[newfeaturemasterController::class,'threewheelercargosubcategory']);
// Route::get('/NewFeature/threewheelerpasssubcategory',[newfeaturemasterController::class,'threewheelerpasssubcategory']);
Route::get('/NewFeature/create', [newfeaturemasterController::class, 'create']);
Route::post('/NewFeature/store', [newfeaturemasterController::class, 'store'])->name('newfeature');
Route::get('/NewFeature/show/', [newfeaturemasterController::class, 'show'])->name('newfeature');
Route::get('/NewFeature/edit/{id}', [newfeaturemasterController::class, 'edit'])->name('newfeature');
Route::post('/NewFeature/update/{id}', [newfeaturemasterController::class, 'update'])->name('newfeature');
Route::get('/NewFeature/delete/{id}', [newfeaturemasterController::class, 'destroy'])->name('newfeature');
Route::get('/Editfeaturemaster/index/', [newfeaturemasterController::class, 'show'])->name('Editfeature');

//** Start New Model ** // 
Route::get('/NewModel/viewmodel/', [NewmodelController::class, 'create'])->name('Newmodel');
Route::get('/NewModel/destroy/{id}', [NewmodelController::class, 'destroy'])->name('Newmodel');
Route::get('/NewModel/createnewmodel', [NewmodelController::class, 'createnewmodel'])->name('Newmodel');
Route::get('/NewModel/twowheeler', [NewmodelController::class, 'twowheeler'])->name('Newmodel');
Route::get('/NewModel/threewheelercargo', [NewmodelController::class, 'threewheelercargo'])->name('Newmodel');
Route::get('/NewModel/fourwheeler', [NewmodelController::class, 'fourwheeler'])->name('Newmodel');
Route::get('/NewModel/threewheeler', [NewmodelController::class, 'threewheeler'])->name('Newmodel');
// 4W Specs
Route::post('/NewModel/store', [NewmodelController::class, 'store'])->name('Newmodel');
Route::get('/NewModel/edit/{id}', [NewmodelController::class, 'edit'])->name('Newmodel');
Route::post('/NewModel/update', [NewmodelController::class, 'update'])->name('Newmodel');

Route::post('/NewModel/storetpass', [NewmodelController::class, 'storetpass'])->name('Newmodel');
Route::post('/NewModel/threewheelerpassupdate', [NewmodelController::class, 'threewheelerpassupdate'])->name('Newmodel');
Route::post('/NewModel/storetwospecs', [NewmodelController::class, 'storetwospecs'])->name('Newmodel');
Route::post('/NewModel/twospecsupdate', [NewmodelController::class, 'twospecsupdate'])->name('Newmodel');
Route::post('/NewModel/tcargostore', [NewmodelController::class, 'tcargostore'])->name('Newmodel');
Route::post('/NewModel/threewheelercargoupdate', [NewmodelController::class, 'threewheelercargoupdate'])->name('Newmodel');
// Route::get('/NewModel/fourwheelercategory',[NewmodelController::class,'fourwheelercategory'])->name('Newmodel');
// Route::get('/NewModel/twowheelercategory',[NewmodelController::class,'twowheelercategory'])->name('Newmodel');
// Route::get('/NewModel/threewheelercargocategory',[NewmodelController::class,'threewheelercargocategory'])->name('Newmodel');
// Route::get('/NewModel/threewheelerpasscategory',[NewmodelController::class,'threewheelerpasscategory'])->name('Newmodel');

//*** Products Feature ***//
Route::get('/fourwheelerspecsfeature/create', [FourwheelerspecsfeatureController::class, 'create'])->name('Newmodel');
Route::post('/Fourwheelerspecsfeature/store', [FourwheelerspecsfeatureController::class, 'store'])->name('Newmodel');
Route::get('/Fourwheelerspecsfeature/index', [FourwheelerspecsfeatureController::class, 'index'])->name('Newmodel');
Route::get('/Fourwheelerspecsfeature/edit/{id}', [FourwheelerspecsfeatureController::class, 'edit'])->name('Newmodel');
Route::post('/Fourwheelerspecsfeature/update', [FourwheelerspecsfeatureController::class, 'update'])->name('Newmodel');
// Route::post('/Fourwheelerspecsfeature/update', [FourwheelerspecsfeatureController::class, 'images_update'])->name('Newmodel');
Route::get('/Fourwheelerspecsfeature/delete/{id}', [FourwheelerspecsfeatureController::class, 'destroy'])->name('Newmodel');
Route::get('/Fourwheelerspecsfeature/show/{id}', [FourwheelerspecsfeatureController::class, 'show'])->name('Newmodel');
//Images delete function 
Route::get('/Fourwheelerspecsfeature/Modelimage_delete/{id}', [FourwheelerspecsfeatureController::class, 'Modelimge_delete'])->name('Newmodel');
Route::get('/Fourwheelerspecsfeature/Front_Modelimage/{id}', [FourwheelerspecsfeatureController::class, 'Front_Modelimage'])->name('Newmodel');
Route::get('/Fourwheelerspecsfeature/Back_Modelimage/{id}', [FourwheelerspecsfeatureController::class, 'Back_Modelimage'])->name('Newmodel');
Route::get('/Fourwheelerspecsfeature/Leftside_Modelimage/{id}', [FourwheelerspecsfeatureController::class, 'Leftside_Modelimage'])->name('Newmodel');
Route::get('/Fourwheelerspecsfeature/Rightside_Modelimage/{id}', [FourwheelerspecsfeatureController::class, 'Rightside_Modelimage'])->name('Newmodel');
//Active & InActive 
Route::get('/Fourwheelerspecsfeature/Active/{id}', [FourwheelerspecsfeatureController::class, 'Active'])->name('Newmodel');
Route::get('/Fourwheelerspecsfeature/InActive/{id}', [FourwheelerspecsfeatureController::class, 'InActive'])->name('Newmodel');


Route::get('/comparision1/', [FourwheelerspecsfeatureController::class, 'comparision1'])->name('Newmodel');
Route::get('/comparision2/', [FourwheelerspecsfeatureController::class, 'comparision2'])->name('Newmodel');

Route::get('/Threewheelerpassfeature/create', [ThreewheelerpassfeatureController::class, 'create'])->name('Newmodel');
Route::post('/Threewheelerpassfeature/store', [ThreewheelerpassfeatureController::class, 'store'])->name('Newmodel');
Route::get('/Threewheelerpassfeature/index', [ThreewheelerpassfeatureController::class, 'index'])->name('Newmodel');
Route::get('/Threewheelerpassfeature/edit/{id}', [ThreewheelerpassfeatureController::class, 'edit'])->name('Newmodel');
Route::post('/Threewheelerpassfeature/update', [ThreewheelerpassfeatureController::class, 'update'])->name('Newmodel');
// Route::post('/Threewheelerpassfeature/update', [ThreewheelerpassfeatureController::class, 'images_update'])->name('Newmodel');
Route::get('/Threewheelerpassfeature/delete/{id}', [ThreewheelerpassfeatureController::class, 'destroy'])->name('Newmodel');
Route::get('/Threewheelerpassfeature/show/{id}', [ThreewheelerpassfeatureController::class, 'show'])->name('Newmodel');
//Images delete function 
Route::get('/Threewheelerpassfeature/Modelimage_delete/{id}', [ThreewheelerpassfeatureController::class, 'Modelimge_delete'])->name('Newmodel');
Route::get('/Threewheelerpassfeature/Front_Modelimage/{id}', [ThreewheelerpassfeatureController::class, 'Front_Modelimage'])->name('Newmodel');
Route::get('/Threewheelerpassfeature/Back_Modelimage/{id}', [ThreewheelerpassfeatureController::class, 'Back_Modelimage'])->name('Newmodel');
Route::get('/Threewheelerpassfeature/Leftside_Modelimage/{id}', [ThreewheelerpassfeatureController::class, 'Leftside_Modelimage'])->name('Newmodel');
Route::get('/Threewheelerpassfeature/Rightside_Modelimage/{id}', [ThreewheelerpassfeatureController::class, 'Rightside_Modelimage'])->name('Newmodel');
//Active & InActive 
Route::get('/Threewheelerpassfeature/Active/{id}', [ThreewheelerpassfeatureController::class, 'Active'])->name('Newmodel');
Route::get('/Threewheelerpassfeature/InActive/{id}', [ThreewheelerpassfeatureController::class, 'InActive'])->name('Newmodel');


Route::get('/Threewheelercargofeature/create', [ThreewheelercargofeatureController::class, 'create'])->name('Newmodel');
Route::post('/Threewheelercargofeature/store', [ThreewheelercargofeatureController::class, 'store'])->name('Newmodel');
Route::get('/Threewheelercargofeature/index', [ThreewheelercargofeatureController::class, 'index'])->name('Newmodel');
Route::get('/Threewheelercargofeature/edit/{id}', [ThreewheelercargofeatureController::class, 'edit'])->name('Newmodel');
Route::post('/Threewheelercargofeature/update', [ThreewheelercargofeatureController::class, 'update'])->name('Newmodel');
// Route::post('/Threewheelercargofeature/update', [ThreewheelercargofeatureController::class, 'images_update'])->name('Newmodel');
Route::get('/Threewheelercargofeature/delete/{id}', [ThreewheelercargofeatureController::class, 'destroy'])->name('Newmodel');
Route::get('/Threewheelercargofeature/show/{id}', [ThreewheelercargofeatureController::class, 'show'])->name('Newmodel');
//Images delete function 
Route::get('/Threewheelercargofeature/Modelimage_delete/{id}', [ThreewheelercargofeatureController::class, 'Modelimge_delete'])->name('Newmodel');
Route::get('/Threewheelercargofeature/Front_Modelimage/{id}', [ThreewheelercargofeatureController::class, 'Front_Modelimage'])->name('Newmodel');
Route::get('/Threewheelercargofeature/Back_Modelimage/{id}', [ThreewheelercargofeatureController::class, 'Back_Modelimage'])->name('Newmodel');
Route::get('/Threewheelercargofeature/Leftside_Modelimage/{id}', [ThreewheelercargofeatureController::class, 'Leftside_Modelimage'])->name('Newmodel');
Route::get('/Threewheelercargofeature/Rightside_Modelimage/{id}', [ThreewheelercargofeatureController::class, 'Rightside_Modelimage'])->name('Newmodel');
//Active & InActive 
Route::get('/Threewheelercargofeature/Active/{id}', [ThreewheelercargofeatureController::class, 'Active'])->name('Newmodel');
Route::get('/Threewheelercargofeature/InActive/{id}', [ThreewheelercargofeatureController::class, 'InActive'])->name('Newmodel');


Route::get('/Twowheelerspecsfeature/create', [TwowheelerspecsfeatureController::class, 'create'])->name('Newmodel');
Route::post('/Twowheelerspecsfeature/store', [TwowheelerspecsfeatureController::class, 'store'])->name('Newmodel');
Route::get('/Twowheelerspecsfeature/index/', [TwowheelerspecsfeatureController::class, 'index'])->name('Newmodel');
Route::get('/Twowheelerspecsfeature/edit/{id}', [TwowheelerspecsfeatureController::class, 'edit'])->name('Newmodel');
Route::post('/Twowheelerspecsfeature/update', [TwowheelerspecsfeatureController::class, 'update'])->name('Newmodel');
// Route::post('/Twowheelerspecsfeature/update', [TwowheelerspecsfeatureController::class, 'images_update'])->name('Newmodel');
Route::get('/Twowheelerspecsfeature/delete/{id}', [TwowheelerspecsfeatureController::class, 'destroy'])->name('Newmodel');
Route::get('/Twowheelerspecsfeature/show/{id}', [TwowheelerspecsfeatureController::class, 'show'])->name('Newmodel');
Route::get('/compare2', [TwowheelerspecsfeatureController::class, 'comparetwowheeler'])->name('Newmodel');
//Images delete function 
Route::get('/Twowheelerspecsfeature/Modelimage_delete/{id}', [TwowheelerspecsfeatureController::class, 'Modelimge_delete'])->name('Newmodel');
Route::get('/Twowheelerspecsfeature/Front_Modelimage/{id}', [TwowheelerspecsfeatureController::class, 'Front_Modelimage'])->name('Newmodel');
Route::get('/Twowheelerspecsfeature/Back_Modelimage/{id}', [TwowheelerspecsfeatureController::class, 'Back_Modelimage'])->name('Newmodel');
Route::get('/Twowheelerspecsfeature/Leftside_Modelimage/{id}', [TwowheelerspecsfeatureController::class, 'Leftside_Modelimage'])->name('Newmodel');
Route::get('/Twowheelerspecsfeature/Rightside_Modelimage/{id}', [TwowheelerspecsfeatureController::class, 'Rightside_Modelimage'])->name('Newmodel');
//Active & InActive 
Route::get('/Twowheelerspecsfeature/Active/{id}', [TwowheelerspecsfeatureController::class, 'Active'])->name('Newmodel');
Route::get('/Twowheelerspecsfeature/InActive/{id}', [TwowheelerspecsfeatureController::class, 'InActive'])->name('Newmodel');


//end model//

// Route::get('/NewModel/featurepart',[NewmodelController::class,'featurepart'])->name('Newmodel');
Route::get('/NewModel/existmodel', [NewmodelController::class, 'existmodel'])->name('Newmodel');
// Route::post('/NewModel/threewheelcargostore',[NewmodelController::class,'threewheelcargostore'])->name('Newmodel');
// // New model Feature //
// Route::post('/Newmodelfeature/store',[NewmodelfeatureController::class,'store'])->name('Newmodel');
// //new model feature image //
// Route::post('/Newmodelfeatureimage/store',[NewmodelfeatureimageController::class,'store'])->name('Newmodelfeatureimage');



// Model feature Dump //
Route::get('/Modelfeaturedump/create', [ModelfeaturedumpController::class, 'create'])->name('Modelfeaturedump');
Route::post('/Modelfeaturedump/store', [ModelfeaturedumpController::class, 'store'])->name('Modelfeaturedump');
Route::get('/Modelfeaturedump/file_test', [ModelfeaturedumpController::class, 'file_test'])->name('Modelfeaturedump');

// ** Existing Model **//
Route::get('/ExistingModel/create', [ExistingmodelController::class, 'create'])->name('ExistingModel');
Route::get('/ExistingModel/index/', [ExistingmodelController::class, 'index'])->name('ExistingModel');
Route::get('/ExistingModel/fourwheelerExistingmodel', [ExistingmodelController::class, 'fourwheelerspecs'])->name('ExistingModel');
Route::get('/ExistingModel/twowheelerExitmodel', [ExistingmodelController::class, 'twowheelerspecs'])->name('ExistingModel');
Route::get('/ExistingModel/threewheelercargoExistingmodel', [ExistingmodelController::class, 'threewheelercargo'])->name('ExistingModel');
Route::get('/ExistingModel/threewheelerpassExistingModel', [ExistingmodelController::class, 'threewheelerpass'])->name('ExistingModel');

// Route::get('/Fourwheelerspecsfeature/index',[FourwheelerspecsfeatureController::class,'index'])->name('Newmodel');

Route::get('ajax', function () {
    return view('message');
});
// Route::post('/get2w','NewmodelController@call2wfeatures');

// Route::get('/Blog/create',[BlogController::class,'create']);

//Admin //

//Route::get('/addproduct', function () {
//     return view('Admin/Products/addproduct/add_product');
// });

Route::get('/admin', function () {
    return view('Admin/Adminlayout/home');
});

//4wspecs
Route::get('/Admin/4wspecs/', [admin4wspecsController::class, 'create']);
Route::get('/Admin/4wspecsmodel', [admin4wspecsController::class, 'addmodel']);
Route::post('/Admin/store', [admin4wspecsController::class, 'store']);
Route::get('/Admin/edit/{model_id}', [admin4wspecsController::class, 'edit']);
Route::post('/Admin/update/{model_id}', [admin4wspecsController::class, 'update']);
// Route::get('/Admin/4wspecsfeature',[admin4wspecsController::class,'addfeature']);
// Route::get('/Admin/4wspecsproduct',[admin4wspecsController::class,'addproduct']);
//2wspecs
Route::get('Admin/2wspecs', [admin2wspecsController::class, 'create']);
Route::get('/Admin/2wspecsmodel', [admin2wspecsController::class, 'addmodel']);
Route::post('/Admin/twowspecs/store', [admin2wspecsController::class, 'store']);
Route::get('/Admin/twowspecs/edit/{model_id}', [admin2wspecsController::class, 'edit']);
Route::post('/Admin/twowspecs/update/{model_id}', [admin2wspecsController::class, 'update']);
//3wspecscargo
Route::get('Admin/3wspecscargo', [admin3wspecscargoController::class, 'create']);
Route::get('/Admin/3wspecscargonewmodel', [admin3wspecscargoController::class, 'addmodel']);
Route::post('/Admin/threewcargospecs/store', [admin3wspecscargoController::class, 'store']);
Route::get('/Admin/threewcargospecs/edit/{model_id}', [admin3wspecscargoController::class, 'edit']);
Route::post('/Admin/threewcargospecs/update/{model_id}', [admin3wspecscargoController::class, 'update']);
//3wspecspass
Route::get('Admin/3wspecspass', [admin3wspecspassController::class, 'create']);
Route::get('/Admin/3wspecspassnewmodel', [admin3wspecspassController::class, 'addmodel']);
Route::post('/Admin/threewpassspecs/store', [admin3wspecspassController::class, 'store']);
Route::get('/Admin/threewpassspecs/edit/{model_id}', [admin3wspecspassController::class, 'edit']);
Route::post('/Admin/threewpassspecs/update/{model_id}', [admin3wspecspassController::class, 'update']);

//reviews
Route::get('Admin/review', [reviewController::class, 'create']);

//contributors
Route::get('Admin/contributors', [contributorsController::class, 'create']);

//website 

// Route::get('Website/index',[indexController::class,'index']);
// Route::get('Website/afterfilter',[indexController::class,'filter']);

// Route::get('Website/Header', [homepageController::class, 'header']);
// Route::get('Website/Footer', [homepageController::class, 'footer']);
// Route::get('Website/Index',[homepageController::class,'index']);
// Route::get('Website/Comparisions',[homepageController::class,'comparision']);
// Route::get('Website/add_two_vehicle',[homepageController::class,'addtwovehicle']);


Route::get('/test', function () {
    return view('test');
});


//DekhoEV Website Route Starts

Route::get('/Home', [DekhoEVHomeController::class, 'Index']);
Route::get('', [DekhoEVHomeController::class, 'Index']);
Route::get('/Comparisions-new', [DekhoEVHomeController::class, 'Comparision_new']);
Route::get('/who-we-are', [DekhoEVHomeController::class, 'who_we_are']);
Route::get('/who-are-you', [DekhoEVHomeController::class, 'who_are_you']);
Route::get('/terms-and-condition', [DekhoEVHomeController::class, 'terms_and_condition']);
// Route::get('/Website/Threep-Comparisions',[DekhoEVHomeController::class,'Threep_Comparision']);
// Route::get('/Website/Threec-Comparisions',[DekhoEVHomeController::class,'Threec_Comparision']);
// Route::get('/Website/Four-Comparisions',[DekhoEVHomeController::class,'Four_Comparision']);
// Route::get('/Website/Two-Comparisions',[DekhoEVHomeController::class,'Two_Comparision']);

Route::post('Comparisions-Table-Three-Wheeler-Pass', [DekhoEVHomeController::class, 'Comparision_Table_Three_Wheeler_Pass']);
Route::post('/Comparisions-Table-Three-Wheeler-Cargo', [DekhoEVHomeController::class, 'Comparision_Table_Three_Wheeler_Cargo']);
Route::post('/Comparisions-Table-Four-Wheeler', [DekhoEVHomeController::class, 'Comparision_Table_Four_Wheeler']);
Route::post('/Comparisions-Table-Two-Wheeler', [DekhoEVHomeController::class, 'Comparision_Table_Two_Wheeler']);


//get method link get for seo
Route::get('/Comparisions-Table-Three-Wheeler-Pass', [DekhoEVHomeController::class, 'Comparision_Table_Three_Wheeler_Pass']);
Route::get('/Comparisions-Table-Three-Wheeler-Cargo', [DekhoEVHomeController::class, 'Comparision_Table_Three_Wheeler_Cargo']);
Route::get('/Comparisions-Table-Four-Wheeler', [DekhoEVHomeController::class, 'Comparision_Table_Four_Wheeler']);
Route::get('/Comparisions-Table-Two-Wheeler', [DekhoEVHomeController::class, 'Comparision_Table_Two_Wheeler']);

//get method link get for seo
Route::get('/compare-three-wheeler-pass', [DekhoEVHomeController::class, 'Compare_Three_Wheeler_Pass']);
Route::get('/compare-three-wheeler-cargo', [DekhoEVHomeController::class, 'Compare_Three_Wheeler_Cargo']);
Route::get('/compare-four-wheeler', [DekhoEVHomeController::class, 'Compare_Four_Wheeler']);
Route::get('/compare-two-wheeler', [DekhoEVHomeController::class, 'Comparision_Table_Two_Wheelerdata']);

Route::get('/compare-two-wheeler/{first}', [DekhoEVHomeController::class, 'Comparision_Table_Two_Wheelerfirst']);
Route::get('/compare-three-wheeler-cargo/{first}', [DekhoEVHomeController::class, 'Comparision_Table_Three_Wheelercargofirst']);
Route::get('/compare-three-wheeler-pass/{first}', [DekhoEVHomeController::class, 'Comparision_Table_Three_Wheelerpassfirst']);
Route::get('/compare-four-wheeler/{first}', [DekhoEVHomeController::class, 'Comparision_Table_Four_Wheelerfirst']);

Route::get('/compare-two-wheeler/{first}vs{second}', [DekhoEVHomeController::class, 'Comparision_Table_Two_Wheelersecond']);

 
// Comparision starts Nov month 
Route::get('/Comparisions-Two-Wheeler-Specs', [ComparisonController::class, 'Comparision_Two_Wheeler_Specs']);
Route::get('/Comparisions-cars-and-suvs', [ComparisonController::class, 'Comparision_Four_Wheeler_Specs']);
Route::get('/Comparisions-Three-Wheeler-Cargo', [ComparisonController::class, 'Comparision_Three_Wheeler_Cargo']);
Route::get('/Comparisions-Three-Wheeler-Pass', [ComparisonController::class, 'Comparision_Three_Wheeler_Pass']);

//
Route::get('/compare-two-wheeler/{first}-{second}-{third}', [DekhoEVHomeController::class, 'Compare_Two_Wheelerthird']);
 

//all search

Route::get('/all_Search', [OEMmodelController::class, 'Allsearch']);

Route::get('/infos/{id}', [DekhoEVHomeController::class, 'getInfo']);
 


Route::get('/Four-Wheeler-Vehicle-Catalogue', [DekhoEVHomeController::class, 'Four_Wheeler_Vehicle_Catelogue']);
Route::get('/Two-Wheeler-Vehicle-Catalogue', [DekhoEVHomeController::class, 'Two_Vehicle_Vehicle_Catelogue']);
Route::get('/electric-car-charging-station-in-kerala', [DekhoEVHomeController::class, 'Electric_car_charging_station_in_kerala']);
Route::get('/electric-car-charging-station-in-mumbai', [DekhoEVHomeController::class, 'electric_car_charging_station_in_mumbai']);
Route::get('/Three-Wheeler-Cargo-Vehicle-Catalogue', [DekhoEVHomeController::class, 'Three_Wheeler_cargo_Vehicle_Catelogue']);
Route::get('/Three-Wheeler-Pass-Vehicle-Catalogue', [DekhoEVHomeController::class, 'Three_Wheeler_pass_Vehicle_Catelogue']);
Route::get('/Four-Wheeler-Product-Details', [DekhoEVHomeController::class, 'Four_Wheeler_Product_Details']);

Route::get('/Four-Wheeler-Product-Details/Model', [DekhoEVHomeController::class, 'Four_Wheeler_Product_Details']);

Route::get('/Two-Wheeler-Product-Details', [DekhoEVHomeController::class, 'Two_Wheeler_Product_Details']);
Route::get('/Three-Wheeler-Cargo-Product-Details', [DekhoEVHomeController::class, 'Three_Wheeler_Cargo_Product_Details']);
Route::get('/Three-Wheeler-Pass-Product-Details', [DekhoEVHomeController::class, 'Three_Wheeler_Pass_Product_Details']);

 
Route::get('/Three-Wheeler-Cargo/{oem}-{brand}', [DekhoEVHomeController::class, 'Three_Wheeler_Cargo_show_Product']);

Route::get('/Four-Wheeler/{oem}-{brand}', [DekhoEVHomeController::class, 'Four_Wheeler_showProduct']);
Route::get('/Two-Wheeler/{oem}-{brand}', [DekhoEVHomeController::class, 'Two_Wheeler_showProduct']);
Route::get('/Three-Wheeler-Pass/{oem}-{brand}', [DekhoEVHomeController::class, 'Three_Wheeler_Pass_showProduct']);

//home page controller
Route::get('/Twowheeler-details', [DekhoEVHomeController::class, 'twowheelerproducts']);
Route::get('/Fourwheeler-details', [DekhoEVHomeController::class, 'fourwheelerproducts']);
Route::get('/Threewheelercargo-details', [DekhoEVHomeController::class, 'threewheelercargoproducts']);
Route::get('/Threewheelerpass-details', [DekhoEVHomeController::class, 'threewheelerpassproducts']);

//Feedback Route
Route::get('//Feedback', [FeedbackController::class, 'create']);
Route::post('//Feedback/save/', [FeedbackController::class, 'store']);
Route::get('/Feedback/View/', [FeedbackController::class, 'show']);
Route::get('/Feedback/delete/{id}', [FeedbackController::class, 'destroy']);
Route::get('/Feedback/view/{id}', [FeedbackController::class, 'Viewcomments']);



// Route::get('/Website/3WCproduct',[DekhoEVHomeController::class,'threecargoproduct']);
// Route::get('/Website/Comparisions',[DekhoEVHomeController::class,'replaceimage']);

//Review
Route::get('Review/index/', [ReviewController::class, 'index']);
Route::get('ReviewForm1', [ReviewController::class, 'review_form1']);
Route::post('/Review/Owner_Store', [ReviewController::class, 'Owner_review_store']);
Route::post('Review/Blogger_store', [ReviewController::class, 'Blogger_review_store']);
Route::post('Review/Oem_store', [ReviewController::class, 'Oem_review_store']);

Route::post('Review/login_store', [ReviewController::class, 'login_review_store']);
Route::post('Review/oemlogin_store', [ReviewController::class, 'oemlogin_review_store']);

Route::post('Review/Rating_store', [ReviewController::class, 'Ratings_review_store']);
Route::get('Review/Owner', [ReviewController::class, 'Owner_review']);
Route::get('Review/Blogger', [ReviewController::class, 'Blogger_review']);
Route::get('Review/Oem', [ReviewController::class, 'oem_review']);

Route::get('/ratings_review/delete/{id}', [ReviewController::class, 'ratings_review_delete']);
Route::get('/owner_review/delete/{id}', [ReviewController::class, 'owner_review_delete']);

Route::get('/SearchEVvehicle', [ReviewController::class, 'SearchEVvehicle']);

Route::get('/contributors/View/', [ReviewController::class, 'Contributors_view']);
Route::get('/contributors/delete/{id}', [ReviewController::class, 'Contributors_delete']);


// Route::post('/Website/Contributors/store',[ReviewController::class,'Contributors_store']);

//disclaimer
Route::get('/Disclaimer', [DekhoEVHomeController::class, 'disclaimer']);

//header

Route::get('/Header', [DekhoEVHomeController::class, 'header']);
Route::get('/footer', [DekhoEVHomeController::class, 'footer']);
Route::get('/Gyaan', [DekhoEVHomeController::class, 'Gyaan']);
Route::get('/Gyaan/Details', [DekhoEVHomeController::class, 'Gyaan_details']);

Route::get('/Gyaan/{post_id}', [DekhoEVHomeController::class, 'Post_blog']);


// OEM Image Search again Model 
Route::get('/4Wheeler_OEM_Search', [OEMmodelController::class, 'Fourwheeler_OEM']);
Route::get('/2Wheeler_OEM_Search/', [OEMmodelController::class, 'Twowheeler_OEM']);
Route::get('/3Wheeler_Cargo_OEM_Search', [OEMmodelController::class, 'Threewheeler_Cargo_OEM']);
Route::get('/3Wheeler_Pass_OEM_Search', [OEMmodelController::class, 'Threewheeler_Pass_OEM']);

//Ajax comparision Three Wheeler Pass route

Route::get('/Ajax3wp', [ComparisonController::class, 'Comparision_Three_Wheeler_Pass_ajax']);
Route::get('/Ajax3wp1', [ComparisonController::class, 'Comparision_Three_Wheeler_Pass_ajax1']);
Route::get('/Ajax3wp2', [ComparisonController::class, 'Comparision_Three_Wheeler_Pass_ajax2']);

//Ajax comparision Three Wheeler Cargo route

Route::get('/Ajax3wc', [ComparisonController::class, 'Comparision_Three_Wheeler_Cargo_ajax']);
Route::get('/Ajax3wc1', [ComparisonController::class, 'Comparision_Three_Wheeler_Cargo_ajax1']);
Route::get('/Ajax3wc2', [ComparisonController::class, 'Comparision_Three_Wheeler_Cargo_ajax2']);

//Ajax comparision Two Wheeler route

Route::get('/Ajax2w', [ComparisonController::class, 'Comparision_Two_Wheeler_ajax']);
Route::get('/Ajax2w1', [ComparisonController::class, 'Comparision_Two_Wheeler_ajax1']);
Route::get('/Ajax2w2', [ComparisonController::class, 'Comparision_Two_Wheeler_ajax2']);

//Ajax comparision Four Wheeler route

Route::get('/Ajax4w', [ComparisonController::class, 'Comparision_Four_Wheeler_ajax']);
Route::get('/Ajax4w1', [ComparisonController::class, 'Comparision_Four_Wheeler_ajax1']);
Route::get('/Ajax4w2', [ComparisonController::class, 'Comparision_Four_Wheeler_ajax2']);



