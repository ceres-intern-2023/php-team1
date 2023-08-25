<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\User;

class MyPageController extends Controller
{
    public function mypage()
    {
        $users = User::lanking();
        $animal = Animal::randomAnimal();

        /*var_dump(User::lanking());*/
        return view('mypage', compact('users', 'animal'));
    }
}
