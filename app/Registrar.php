<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrar extends Model
{
    protected $table = 'registrar';

    protected $fillable = [
        'npd', 'name', 'birth', 'address', 'phone', 'gender', 'religion', 'psb', 'pst',
    ];

}
