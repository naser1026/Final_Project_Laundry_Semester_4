<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custumer extends Model
{
    use HasFactory;

    protected $tabel = 'custumers';

    protected $fillable = [
        'name',
        'phone_number',
        'created_by'
    ];
}
