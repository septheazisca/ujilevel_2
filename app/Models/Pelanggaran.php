<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    protected $guarded = ['id'];  
    // use HasFactory;
    // protected $table = 'pelanggarans';
    // protected $primaryKey = 'id';
    // protected $fillable = [
    //     'id', 'pelanggaran', 'tindak_lanjut', 'jumlah_poin'
    // ];
}
