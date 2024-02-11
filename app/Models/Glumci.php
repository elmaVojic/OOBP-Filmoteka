<?php

//MODEL GLUMCI

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glumci extends Model
{
    protected $table = 'glumci';

    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'datum_rodenja',
        'drzava',
        'ocjena',
        'nagrade',
    ];
}
