<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyek extends Model
{
    protected $table ='proyek';
    protected $primaryKey = 'id_proyek';
    protected $fillable = ['id_proyek', 'nama_proyek', 'tanggal_mulai', 'tanggal_berakhir'];
}
