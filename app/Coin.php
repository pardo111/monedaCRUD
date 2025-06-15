<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coin
 *
 * @property $id
 * @property $nombre
 * @property $codigo_moneda
 * @property $codigo_ups
 * @property $pais
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Coin extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'codigo_moneda' => 'required',
		'codigo_ups' => 'required',
		'pais' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','codigo_moneda','codigo_ups','pais'];



}
