<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'Pendidikan';
    protected $primaryKey = 'id';
    protected $fillable =['nama','tingkatan','tahun_masuk','tahun_keluar',];
}
