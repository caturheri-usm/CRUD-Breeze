<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkuls';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $fillable  = ['kode', 'matkul', 'dosen', 'sks', 'total_mhs', 'ruangan',];
    use HasFactory;
}
