<?php

namespace App\Http\Controllers;
use App\Models\beusers;
    
use Illuminate\Http\Request;

class beusersController extends Controller
{

    //dashoard
    public function index(){
        return view('index');
    }
    
     //login
     public function login(){
        return view('login');
    }

     //submit login
     public function submit_login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $chackbeusers=beusers::where(['username'=>$request->username, 'password'=>$request->password])->count();
        if($chackbeusers>0){
            session(['adminlogin',true]);
            return redirect('admin');
        }else{
            return redirect('admin/login')->with('msg','invalid Username or password!');
        }
    }

    //logout
    public function logout(){
        session()->forget('adminlogin');
        return redirect('admin/login');
    }

}