<?php

//MODEL REDATELJI

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redatelji extends Model
{
    protected $table = 'redatelji';

    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'datum_rodenja',
        'drzava',
    ];
}
