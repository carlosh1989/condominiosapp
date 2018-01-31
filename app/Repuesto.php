<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Repuesto extends Model {
    protected $table = 'marcas';
    protected $fillable = [
        'datos_id','email', 'password','role'
    ];

}

