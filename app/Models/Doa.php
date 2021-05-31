<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doa extends Model
{
    use HasFactory;
    protected $fillable = ['doa_id', 'judul', 'lafaz', 'arti', ' tentang'];
}
