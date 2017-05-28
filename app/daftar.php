<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftar extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'npd', 'ttl','alamat', 'telephon', 'jenis_kelamin', 'agama','psb','pst',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'daftar';
}

