<?php 
namespace App;
use App\ResidenteImagen;
use App\Usuario;
use \Illuminate\Database\Eloquent\Model;
 
class Residente extends Model {
    protected $table = 'residentes';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'usuarios_id','id');
	}

	public function imagen()
	{
	    return $this->hasOne(ResidenteImagen::class, 'residentes_id', 'id')->orderBy('id', 'desc');
	}
}

