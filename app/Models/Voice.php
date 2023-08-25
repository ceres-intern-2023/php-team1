<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Voice extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'youtube_url',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
    ];

    public static function animalNarrowing($animalId)
    {
        $voices = DB::table('voices')->where('animal_id', '=', $animalId)->get();
        return $voices;
    }

}
