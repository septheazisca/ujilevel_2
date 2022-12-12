<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    // use HasFactory;
    protected $guarded = [];  
    protected $table = 'gurus';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nip', 'nama', 'jenis_kelamin', 'alamat', 'notelepon', 'email', 'notelepon', 'wali_kelas'
    ];

    public function siswa(){
        return $this->hasMany(Siswa::class);
    }

    // one to one table guru dan table kelas
    // public function relationToKelas(){
    //     return $this->hasOne('App\Models\Kelas');
    // }


    
}

