<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_lapangan',
        'cover',
         'nama_lapangan',
         'slug',
          'kategori_id',
          'harga',
          'ket',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'kategori_id');
    }
}
