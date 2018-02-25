<?php 
namespace App;
use App\CuentaBanco;
use App\ResidenteComprobanteImagen;
use \Illuminate\Database\Eloquent\Model;
 
class ResidenteComprobante extends Model {
    protected $table = 'residentes_comprobantes';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function imagen()
	{
	    return $this->hasOne(ResidenteComprobanteImagen::class, 'residentes_comprobantes_id', 'id')->orderBy('id', 'desc');
	}

	public function residente()
	{
	    return $this->belongsTo(Residente::class, 'residentes_id', 'id')->orderBy('id', 'desc');
	}

	public function banco()
	{
	    return $this->belongsTo(CuentaBanco::class, 'cuentas_bancos_id', 'id')->orderBy('id', 'desc');
	}
}

