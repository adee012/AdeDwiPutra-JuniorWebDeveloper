<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'tbanggota';

    protected $fillable = ['idanggota', 'nama', 'jeniskelamin', 'alamat', 'status', 'foto'];
}
