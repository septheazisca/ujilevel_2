<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapelanggaran extends Model
{
    protected $guarded = ['id'];  
    // use HasFactory;
    protected $table = 'datapelanggarans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'pelanggaran', 'poin', 'tindak_lanjut', 'keterangan'
    ];

    protected function relationToSiswa(){
        return $this->belongsToMany(Siswa::class);
    }
}
