<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parfum extends Model
{
    use HasFactory;

    protected $table = 'parfums';

    protected $fillable = [
        'name',
        'id_outlet'
    ];


}

