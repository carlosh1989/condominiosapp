<?php 
namespace App;
use App\CondominioCobro;
use \Illuminate\Database\Eloquent\Model;
 
class ResidentePago extends Model {
    protected $table = 'residentes_pagos';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

	public function cobro()
	{
	    return $this->belongsTo(CondominioCobro::class, 'condominios_cobros_id', 'id')->orderBy('id', 'desc');
	}

}

