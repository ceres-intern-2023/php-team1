<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\User;

class MyPageController extends Controller
{
    public function mypage()
    {
        /*var_dump(User::lanking());*/
        return view('mypage');
    }
    
    public function AnimalIndex(){
        
        $animal = Animal::find(1);
        return view('mypage',["animal"=>$animal]);
    }
}
