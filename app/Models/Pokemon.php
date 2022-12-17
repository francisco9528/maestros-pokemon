<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    // Especificamos la tabla a usar 
    protected $table = 'pokemon';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'pokemon', 'id_maestro'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    // Deshabilitamos actualizacióna automatica de fechas
    public $timestamps = false;
}
