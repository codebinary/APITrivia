<?php

namespace APIFiat;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';
    protected $primaryKey = 'idpregunta';
    protected $fillable = ['categoria_id', 'descripcion'];

    public function categoria(){
    	return $this->belongTo('APIFiat\Categorias');
    }

    public function respuestas(){
    	return $this->hasMany('APIFiat\Respuesta');
    }
}
