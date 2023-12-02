<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoEmpleado extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'fecha_pago', 'valor_pago'];

}
