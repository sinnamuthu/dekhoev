<?php

namespace App\Http\Controllers\Registration;
use App\Http\Controllers;
use App\Models\Registration;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationFormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('Registration.create');
    }


    public function create()
    {
        // $Registrations=Registration find::all();
        // return view('Registration.create');
        // // $Registrations=Registration::all();
        
        $Registrations = Registration::all();
        return view ('Registration.create')->with('Registration', $Registrations);
        
    }


    public function store(Request $request )
    {
        // dd($request->all());
        // $request->validate(
        //     [
        //     'username'=>'required',
        //     'email'=>'required',
        //     'password'=>'required|confirmed',
        //     'role'=>'required'
        //     ]
        //     );
            
            
            // $user=new user();
            // $user->username = $request->input('username');
            // $user->email = $request->input('email');
            // $user->password = $request->input('password');
            // $user->password = Hash::make( $request->input('password'));
            // $user->role=json_encode($request->input('role'));
            // $user->save();
            
            $Registration =new Registration();
            $Registration->id = $request->input('id');
            $Registration->username = $request->input('username');
            $Registration->email = $request->input('email');
            $Registration->password=Hash::make( $request->input('password'));
            // $Registration->password=Hash::make( $request->input('confirm_password'));
            $Registration->role=json_encode($request->input('role'));
            $Registration->save();
            
            $Registrations = Registration::all();
            //  return view('Registration.create')->with('Registration Added Successfully');
              return view ('Registration.create')->with('Registration', $Registrations);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        Registration::destroy($id);
        $Registrations = Registration::all();
        return view ('Registration.create')->with('Registration', $Registrations);
        // return redirect('Registration')->with('flash_message', ' Deleted successfully!!!');
    }
}
