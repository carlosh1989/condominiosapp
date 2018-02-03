<?php 
namespace App;
use App\CondominioImagen;
use App\Usuario;
use \Illuminate\Database\Eloquent\Model;
 
class Condominio extends Model {
    protected $table = 'condominios';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function imagen()
	{
	    return $this->hasOne(CondominioImagen::class, 'condominios_id', 'id')->orderBy('id', 'desc');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'usuarios_id','id');
	}
}

