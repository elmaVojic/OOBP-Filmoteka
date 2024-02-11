<?php

//MODEL FILMOVI

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmovi extends Model
{
    protected $table = 'filmovi';

    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'naslov',
        'godina',
        'ocjena',
        'trajanje',
        'zanr',
        'redatelj',
    ];
}
