<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class FormaPago extends Model {
    protected $table = 'pago_formas';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

}

