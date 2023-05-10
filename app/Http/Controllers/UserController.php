<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class UserController extends Controller
{
    public function loginview(){
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);


        $user = User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return ('Login successful');    
            }else{
                return ('Login fail');
            }
        } else {
            return ('Login fail');
        }
    }

    public function registerview(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
          'name'=>'required',
          'email'=>'required|email|unique:users',
          'password'=>'required',
          'confirmpass' => 'required'
        ]);
      
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
      
        $existingUser = User::where('email', $user->email)->first();
        
        if($existingUser){
          return response()->json([
            'status' => 'fail',
            'message' => 'Email already exists'
          ]);
        }
      
        $res = $user->save();
        if($res){
          return response()->json([
            'status' => 'success'
          ]);
        } else {
          return response()->json([
            'status' => 'fail',
            'message' => 'Registration failed'
          ]);
        }
    }
      
}
