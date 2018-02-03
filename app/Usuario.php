<?php 
namespace App;

use App\Condominio;
use \Illuminate\Database\Eloquent\Model;
 
class Usuario extends Model {
    protected $table = 'usuarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'datos_id','email', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function locatario()
    {
        return $this->hasOne(Locatario::class, 'user_id', 'id');
    }

    public function condominio()
    {
        return $this->hasOne(Condominio::class, 'usuarios_id', 'id');
    }

    public function residente()
    {
        return $this->hasOne(Residente::class, 'usuarios_id', 'id');
    }
}




