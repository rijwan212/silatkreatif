<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formsilat extends Model
{
     protected $table = 'formsilat';

    protected $fillable = [
        'nama', 'ttl', 'alamat', 'phone', 'email', 'asal', 'ns', 'seminar',
    ];
}
