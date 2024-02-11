<?php

//MODEL ZANROVI

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zanrovi extends Model
{
    protected $table = 'zanrovi';

    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'naziv',
        'popularnost',
        'glumci'
    ];
}

