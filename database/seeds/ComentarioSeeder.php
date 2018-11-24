<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\Comentario::class, 10)
            ->create()
            ->each(function($obj) {
                $v = rand(1,App\User::count());
                $n = rand(1,App\Foto::count());
                $obj->cod_usuario = App\User::find($v)->id;
                $obj->cod_imagem = App\Foto::find($n)->id;
                $obj->save();
            });

            

           


                
    }
}