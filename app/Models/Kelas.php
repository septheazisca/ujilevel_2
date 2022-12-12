<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];  
    // use HasFactory;
    protected $table = 'kelas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nama_wali_kelas', 'guru_id'
    ];

    // public function siswa(){
    //     return $this -> hasMany(Siswa::class, 'id');
    // }

    // public function relationToGuru(){
    //     return $this->belongsTo('App\Model\Guru');
    // }
}
