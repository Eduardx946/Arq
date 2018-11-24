<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    public function getId()
    {
      return $this->id;
    }

    public function fotos()
    {
        return $this->hasMany(
            Foto::class, 
            'cod_usuario');
    }

    public function publicacao()
    {
        return $this->hasMany(
            Publicacao::class, 
            'cod_usuario');
    }

    public function comentario()
    {
        return $this->hasMany(
            Comentario::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
