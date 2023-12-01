<?php

namespace App\Http\Controllers\Auth;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required'

            ]
            );

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make( $request->input('password'));
        $user->confirm_password =$request->input('password');
        $user->save();

        Auth::login($user);
        
        // $sql = "select * from users ";
        // $User = DB::select($sql);

        return back();

    }
    
    public function register()
    {
        return view('Auth.register');
    }
    public function show_admin()
    {
        $User = User::all();
        return view('Auth.show_admins')->with('User',$User);
    }
    public function delete_admin($id)
    {
        User::destroy($id);
        return back()->with('success', 'Admin deleted successfully!');
    }
    
    
    
}