<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urlaub extends Model
{
    //Name der Tabelle angeben
    protected $table = 'urlaub';

    //mass assignment
    protected $fillable = [
        'von',
        'bis',
        'anzahlTage'
    ];
}
