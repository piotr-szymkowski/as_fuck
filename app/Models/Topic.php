<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function initializeDatabase()
    {
        foreach ([
            'Prywata',
            'Projekty',
            'Polityka',
            'Sklep',
         ] as $item) {
            Topic::create([
                'name' => $item
            ]);
        }
    }
}
