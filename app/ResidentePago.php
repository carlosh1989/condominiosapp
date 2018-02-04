<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class ResidentePago extends Model {
    protected $table = 'residentes_pagos';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

}

