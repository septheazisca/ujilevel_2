<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapelanggarans_kasus extends Model
{
    use HasFactory;
    protected $table="datapelanggaran_kasus";
    protected $guarded=['id'];
}
