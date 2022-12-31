<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens';
    protected $primaryKey = 'nidn';
    public $incrementing = false;
    protected $fillable  = ['nidn', 'nama', 'pendidikan', 'univ', 'foto'];
    use HasFactory;
}
