<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function Apilist()
    {
        return product::all();
    }

    public function createProduct(Request $req)
    {
        $product=new product();
        $product->name=$req->pname;
        $product->code=$req->code;
        $product->mdate=$req->mdate;
        $product->edate=$req->edate;
        $product->save();
    }

}
