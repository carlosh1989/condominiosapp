<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Condominio extends Model {
    protected $table = 'condominios';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

}

