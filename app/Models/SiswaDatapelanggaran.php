<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaDatapelanggaran extends Model
{
    use HasFactory;
    protected $table = 'datapelanggaran_siswa';
    protected $guarded = [];
}
