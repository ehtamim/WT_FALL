<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function Apilist()
    {
        return employee::all();
    }

    public function createEmployee(Request $req)
    {
        $employee=new employee();
        $employee->name=$req->name;
        $employee->id=$req->id;
        $employee->email=$req->email;
        $employee->password=$req->password;
        $employee->save();
    }

    public function updateEmployee(Request $req)
    {
        if($req->id=="")
        {
            echo "Id is needed";
        }
        else
        {
            $uid=$req->id;
            $employee=new employee();
            $empupdate = $employee->where('id', $uid)->update(['name' => $request->name]);
            $empupdate = $employee->where('id', $uid)->update(['email' => $request->email]);
            $empupdate = $employee->where('id', $uid)->update(['password' => $request->password]);
            $empupdate->save();
        }
    }
}
