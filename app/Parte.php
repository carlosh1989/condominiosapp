<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Parte extends Model {
   protected $table = 'partes';
    protected $fillable = [
        'user_id','marca_id', 'categoria_id','nombre','descripcion','imagen','categoria','marca','modelo','ano','codigo','cantidad','stock','estatus'];

	public function imagenes()
	{
	    return $this->hasMany(Imagen::class, 'parte_id', 'id');
	}

	public function imagen()
	{
	    return $this->hasOne(Imagen::class, 'parte_id', 'id')->orderBy('id', 'desc');
	}

	public function usuario()
	{
		return $this->belongsTo(User::class, 'user_id','id');
	}	

}

