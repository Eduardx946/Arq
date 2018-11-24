<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    /**
	 * Indicates if the model should be timestamped.
	 *
	 * @var boolean
	 */
	public $timestamps = false;

	public function usuario()
    {
    	return $this->hasOne(
            User::class);
    }

    public function comentario()
    {
        return $this->hasMany(
            Comentario::class);
    }
}
