<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pregunta
 *
 * @property $id
 * @property $preguntas
 * @property $respuestas
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pregunta extends Model
{
    
    static $rules = [
		'preguntas' => 'required',
		'respuestas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['preguntas','respuestas'];



}
