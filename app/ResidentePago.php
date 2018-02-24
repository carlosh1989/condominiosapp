<?php 
namespace App;
use App\CondominioCobro;
use App\ResidenteComprobante;
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

	public function residente()
	{
	    return $this->belongsTo(Residente::class, 'residentes_id', 'id')->orderBy('id', 'desc');
	}

	public function comprobante()
	{
	    return $this->belongsTo(ResidenteComprobante::class, 'residentes_comprobantes_id', 'id')->orderBy('id', 'desc');
	}
}

