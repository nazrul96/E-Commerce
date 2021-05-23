<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $count = \DB::table('products')->count();

        $data= Product::all();
        return view('Product' , ['products'=>$data]);  
    }
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function viewDetail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function count()
    {
        $count = DB::table('products')->count();
    }
}
