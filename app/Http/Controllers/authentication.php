<?php

namespace App\Http\Controllers;

use DateTime;
use Hash;
use Illuminate\Http\Request;
use App\Models\user;
use Session;

class authentication extends Controller
{
   public function login(){
        return view('auth\login');
    }
    public function register(){
        return view('auth\register');
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:16',
            'sex'=>'required',
            'blood'=>'required',


        ]);
        if($request->password!=$request->passCon){
            return back()->with("FAILED","Password does not macth!");
        }
        else {
        $user =new user ;
        $user->name =$request->name;
        $user->password =Hash::make($request->password);
        $user->email =$request->email;
        $user->sex=$request->sex;
        $user->blood=$request->blood;
        
        $res =$user->save();

        if($res){
            return back()->with("SUCCESS","YOU HAVE REGISTERED SUCCEFULLY");
        }
        ELSE{
            return back()->with("FAILED","THERE IS A WRONG");
        }
    }
    }
   
    public function userLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',


        ]);   
        $user=User::where('email','=',$request->email)->first();

        if ($user) {
            if(HASH::check($request->password,$user->password)){
                if($user->isApproved=='true')
               { $request->session()->put('loginid',$user->id);
                if($user->role=='admin'){
                    $user->last_login=new DateTime;
                    $user->save();
                    return redirect('adminDashboard');
                }
                else{$user->last_login=new DateTime;
                    $user->save();

                 return redirect('dashboard');}}
                else{
                    return  back()->with('fail','your registraction still not certified.');

                }
            }
            else{
                return  back()->with('fail','the password is not matched!');

            }
            

        } else{
          return  back()->with('fail','this emial is not registered.');

        }

    }
    
    public function adminDashboard(){
        
        return view('adminDashboard');

       
    }
    public function logout(){
            if (Session::has('loginid'))
            Session::pull('loginid');
            return redirect('');
    }
}
