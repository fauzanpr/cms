<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testi extends Model
{

    protected $table = 'testi';
    protected $fillable = ['testi_jabatan', 'testi_uraian', 'testi_name'];

    use HasFactory;
}
