<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\EmailVerification;
use App\Mail\VerifyEmail;


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
          // Create a new EmailVerification record
          $verification = new EmailVerification();
          $verification->token = Str::random(40);
          $verification->user_id = $user->id;
          $verification->save();
  
          // Send the verification email to the user
          Mail::to($user->email)->send(new VerifyEmail($user, $verification->token));
  
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

    public function verify($token) {
      $verification = EmailVerification::where('token', $token)->firstOrFail();

      $user = User::find($verification->user_id);
      $user->email_verified_at = now();
      $user->save();

      $verification->delete();

      return redirect('/')->with('success', 'Your email has been verified!');
  }

      
}
