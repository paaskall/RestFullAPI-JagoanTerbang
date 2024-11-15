<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbangan extends Model
{
    use HasFactory;

    protected $table = 'penerbangan';

    protected $fillable = [
        'date_of_journey', 'source', 'destination', 'transit', 'dep_time', 'arrival_time', 'airline', 'flight_number'
    ];
}
