<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manager extends Model
{
    protected $table ='manager';
    protected $primaryKey = 'id_manager';
    protected $fillable = ['id_manager','nama_manager',
    'username','password','alamat_manager','no_tlp_manager','email_manager','foto_manager'];
}
