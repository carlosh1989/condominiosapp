<?php 
namespace App;
use App\Residente;
use \Illuminate\Database\Eloquent\Model;
 
class Saldo extends Model {
    protected $table = 'saldos';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function residente()
	{
	    return $this->belongsTo(Residente::class, 'residentes_id', 'id')->orderBy('id', 'desc');
	}
}

