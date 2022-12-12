<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Datapelanggaran;
use App\Http\Controllers\SiswapelanggaraController;


class Siswa extends Model
{
    protected $guarded = [];  
    // use HasFactory;
    protected $table = 'siswas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nama', 'kelas', 'jurusan', 'nis', 'jenis_kelamin', 'alamat', 'notelepon', 'email', 'password', 'guru_id',
    ];
    public function guru(){
        return $this->belongsTo(Guru::class);
    }

    protected function  (){
        return $this->belongsToMany('App\Models\Datapelanggaran');
    }

}
