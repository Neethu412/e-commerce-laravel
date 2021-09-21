<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $req){
        // return $req->input();
        // return $req->username;
        $user =  User::where(['email'=>$req->username])->first();
        // return $user;
        if(!$user||!Hash::check($req->password,$user->password)){
            return "Password does not match";
        }else{
            session(['user' => $user->name]);
            // return $data = $req->session()->all();
            // echo $value = session('user');
            // die;
            return redirect('/products');
        }


    }
}
