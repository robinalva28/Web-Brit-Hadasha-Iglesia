<?php

namespace App;
use App\User;
use App\Rol;
use Illuminate\Database\Eloquent\Model;

class Rol_User extends Model
{
    //
    protected $table = 'rols_users';
    protected $primaryKey = 'ru_id';
    protected $guarded = [];

    function getUser(){
        return $this->belongsTo('App\User','ru_user_id','user_id');
    }

    function getRol(){
        return $this->belongsTo('App\Rol','ru_rol_id','rol_id');
    }
}
