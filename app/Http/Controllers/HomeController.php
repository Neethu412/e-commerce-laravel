<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function index(){
        $product = Products::all();
        // print_r($products);
        // var_dump($product);
        // die;
        return view('home',['product'=>$product]);
    }

}
