<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
    protected $table = 'seminar';

    protected $fillable = [
        'nama', 'ttl', 'alamat', 'phone', 'email', 'asal', 'ns', 'seminar',
    ];
}
