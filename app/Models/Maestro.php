<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    // Especificamos la tabla a usar 
    protected $table = 'maestros';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nickname'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    // Deshabilitamos actualizacióna automatica de fechas
    public $timestamps = false;
}
