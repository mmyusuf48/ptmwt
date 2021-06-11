<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deskripsi extends Model
{
    protected $table = 'deskripsi';
    protected $primaryKey = 'id_deskripsi';
    protected $fillable = [
        'id_deskripsi','id_proyek', 'deskripsi', 'status',
        'image', 'keterangan', 'is_delete', 'create_at', 'updated_at'];
}
