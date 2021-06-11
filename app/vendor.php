<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    protected $table = 'vendor';
    protected $primaryKey = 'id_vendor';
    protected $fillable = [
        'id_vendor', 'nama_vendor',
        'email', 'alamat_vendor', 'no_tlp_vendor', 'foto_vendor'
    ];
}

