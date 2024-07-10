<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoAppointment extends Model
{
    use HasFactory;

    protected $table = 'demo_appointments';

    protected $fillable = [
        'nombre', 'apellidos', 'email', 'pais', 'organizacion', 'posicion'
    ];
}

