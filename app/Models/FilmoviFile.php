<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmoviFile extends Model
{
    public $timestamps = false;
    protected $table = 'filmovifile';
    use HasFactory;

    protected $fillable = [
        'film',
        'tip',
        'file',
    ];
}
