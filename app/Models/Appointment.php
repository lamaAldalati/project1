<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'first_name', 
        'last_name', 
        'address', 
        'phone', 
        'appointment_date', 
        'appointment_time', 
        'status'
    ];
}
