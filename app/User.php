<?php 
namespace App;

use \Illuminate\Database\Eloquent\Model;
 
class User extends Model {
    protected $table = 'users';


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
}

