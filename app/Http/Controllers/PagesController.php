<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $user = new User();
        $user->name = "Lucien";
        return view('home', ['user' => $user]);
    }
    public function shop(){
        return view('shop');
    }
    public function contact(){
        return view('contact');
    }   
}
