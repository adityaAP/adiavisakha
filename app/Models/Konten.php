<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;

    protected $table = 'konten';

    protected $fillable = [
        'konten',
        'judul',
        'tags',
        'kategori',
        'status',
        'created_by',
    ];
}
