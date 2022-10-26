<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use Hasfactory;

    protected $fillable = ['nama', 'gender', 'age',];
}
