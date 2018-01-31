<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Imagen extends Model {
    protected $table = 'imagenes';
    protected $fillable = [
        'parte_id','imagen_original', 'imagen_grande','imagen_medio','imagen_miniatura','estatus'
    ];
}

