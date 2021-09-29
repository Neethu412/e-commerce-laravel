<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\carts;
use App\Models\User;
use Illuminate\Support\Facades\session;


class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        // print_r($products);
        // var_dump($products);
        // die;
        return view('products.list',['products'=>$products]);
    }
    public function productdetails($productid){
        $singleproduct = Products::find($productid);
        // var_dump($singleproduct);
        // die;
        return view('products.productdetail',['details'=>$singleproduct]);
    }
    public function addtocart(Request $req){
       
        if($req->session()->has('user'))
        {
            $cart = new carts;
            $cart->user_id = $req->session()->get('user')['id'];
            // return $user_id = Users::find($req->session()->get('users'));
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect("/products");
            // session_unset();
            // Session::flush();
        }
        else
        {
            return redirect('/login');
        }

    }
    static public function cartitem(){
        $user_id = session::get('user')['id'];
        $cart_item = carts::where('user_id',$user_id)->count();
        return $cart_item;
    }
}
