<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\user;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function login(Request $request){

        $email = $request->email; 
        $password = $request->password; 

        $users = user::where('email', '=', $email)->where('password', '=', $password)->first();
        if(@$users->id != null){
            @session_start();
            $_SESSION['id_user'] = $users->id;
            $_SESSION['name_user'] = $users->name;
            $_SESSION['level_user'] = $users->level;

            if($_SESSION['level_user'] == 'admin'){
                return view('products.create');
            }else{
                $products = product::orderby('id', 'desc')->paginate(10);
                return view('products.index', ['products' => $products]);
            }


        }else{
            echo "<script language='javascript'> window.alert('Dados Incorretos!') </script>";
            return view('home');
        }
        
    }
    public function logout(){

        @session_start();
        @session_destroy();
        return view('home');


    }
}
