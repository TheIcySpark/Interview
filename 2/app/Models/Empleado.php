<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $empleadoID
 * @property $departamentoID
 * @property $nombre
 * @property $salario
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'empleadoID' => 'required',
		'departamentoID' => 'required',
		'nombre' => 'required',
		'salario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empleadoID','departamentoID','nombre','salario'];



}
