<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'field_id',
        'name',
         'no_telepon',
          'date',
          'time',
          'duration',
          'total_price',
          'status',
          'proof_of_payment',
    ];

    public function field()
    {
        return $this->belongsTo(Field::class, 'field_id');
    }
}
