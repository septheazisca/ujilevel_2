<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    use HasFactory;
    protected $table = 'kasus';
    protected $fillable = [
        'siswa_id',
        'datapelanggaran_id',
        'tanggal'
    ];

    public function relasitosiswa(){
        return $this->belongsToMany(Siswa::class);
    }

    public function relasitopelanggaran(){
        return $this->belongsToMany(Datapelanggaran::class);
    }
}
