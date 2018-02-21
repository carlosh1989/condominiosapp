<?php 
namespace App;
use App\Servicio;
use \Illuminate\Database\Eloquent\Model;
 
class CondominioCobro extends Model {
    protected $table = 'condominios_cobros';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function servicio()
	{
		return $this->belongsTo(Servicio::class, 'condominios_servicios_id','id');
	}
}

