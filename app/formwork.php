<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formwork extends Model
{
     protected $table = 'formwork';

    protected $fillable = [
        'nama', 'ttl', 'alamat', 'phone', 'email', 'asal', 'st', 'workshop',
    ];
}
