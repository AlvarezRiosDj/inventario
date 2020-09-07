<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $fillable = [
      'id',
      'nombre',
    ];

    public $incrementing = false;
    protected $keyType = 'string';

}
