<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
class AdminController extends Controller
{
    //Admin Dashboard.....
    public function index(){
        return view('index');
    }

      //Admin login....
      public function login(){
        return view('login');
    }

    //Submit login....
    public function submit_login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $chackAdmin=Admin::where(['email'=>$request->email, 'password'=>$request->password])->count();
        if($chackAdmin>0){
            return redirect('admin');
        }
    }
}
