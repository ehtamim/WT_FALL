<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class loginController extends Controller
{
    function checklogin(Request $request)
    {
        //$output="";
        $usertable=new UserModel();
        $result=$usertable->where('id',$request->id)->where('password',$request->password);
        //$pass=$usertable->where('password',$request->password);
        if(!empty($result))
        {
            //return view("profile")->with("name",$request->name);
            $uid=$request->id;
            session()->put("id",$uid);
            return redirect()->intended('/dashboard');
        }
        else
        {
            $output="Wrong Info";
            return $output;
        }
    }
}
