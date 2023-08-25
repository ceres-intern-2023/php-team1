<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\User;
use App\Models\Voice;
use Illuminate\Support\Facades\DB;

class MyPageController extends Controller
{
    public function mypage()
    {
        $users = User::lanking();
        $animal = Animal::randomAnimal();
        $animalName = $animal->value('name');
        $animalId = $animal->value('id');
        $voiceList = Voice::animalNarrowing($animalId);
        $youtube = Voice::selectVoice($voiceList);


        /*var_dump(User::lanking());*/
        return view('mypage', compact('users', 'animalName', 'youtube'));
    }

    public function postLike($id)
    {
        $voice = Voice::find($id);
        $user = User::find($voice->user_id);
        $voice->increment("like");
        $voice->save();
        $user->increment("all_likes");
        $voice->save();
    }
}
