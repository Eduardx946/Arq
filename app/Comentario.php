<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    /**
	 * Indicates if the model should be timestamped.
	 *
	 * @var boolean
	 */
	public $timestamps = false;

	public function fotos()
    {
        return $this->belongsTo(
            Foto::class,'cod_imagem');
    }

    public function usuario()
    {
        return $this->belongsTo(
            User::class,'cod_usuario');
    }

}
