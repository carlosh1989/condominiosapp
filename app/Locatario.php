<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Locatario extends Model {
    protected $table = 'locatarios';
    
    protected $fillable = [
        'user_id','razon_social', 'rif','direccion','telefono','servicios','horarios','forma_pago','redes_sociales','encargos','responsable','responsable_telefono','responsable_email','email'
    ];

}

