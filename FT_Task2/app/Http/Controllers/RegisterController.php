<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;

class RegisterController extends Controller
{
    function getregister(Request $request)
    {
    //return view('register',['name'=>$name, 'age'=>30, 'email'=>'abc@gmail.com']);
    $this->validate($request,
       [ 'name'=>'required',
       'id'=>'required',
       'contact'=>'required|max:14|min:11',
        'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
        'password'=>'required',
        'file'=>'required'
    ]
    );
    if (isset($error))
    {
    $output="<h1>Submitted</h1>";
    $output.="username: ".$request->username;
    $output.="<br>email: ".$request->email;
    $output.="<br>email: ".$request->dob;
    $output.="<br>lan: ".$request->lan;
    $output.="<br>file: ".$request->file;
    return $output;
    }
    else{
        $usetable=new UserModel();
        $usetable->name=$request->name;
        $usetable->id=$request->id;
        $usetable->contact=$request->contact;
        $usetable->email=$request->email;
        $usetable->password=$request->password;
        $usetable->save();
        return view('login');
    }
    }
    /*function getregisterwith()
    {
        $ages=['wname'=>$name,'wage'=>23,'wemail'=>'xyz@gmail.com'];
        return view("register")->with("ages",$ages);
    }*/
}

?>
