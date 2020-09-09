<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    
    protected $table = 'proveedores';

    protected $fillable = [
    'id',
    'razon_social',
    'tipo_documento_id',
    ];

    public $incrementing = false;
    protected $keyType = 'string';
    
}
