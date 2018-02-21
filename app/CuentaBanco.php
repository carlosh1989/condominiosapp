<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class CuentaBanco extends Model {
    protected $table = 'cuentas_bancos';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

}

