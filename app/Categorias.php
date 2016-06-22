<?php

namespace APIFiat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorias extends Model
{

    protected $table = 'categorias';
    protected $primarykey = "idcategoria";
    protected $fillable = ['descripcion'];

    public function preguntas(){
    	return $this->hasMany('APIFiat\Pregunta');
    }



}
