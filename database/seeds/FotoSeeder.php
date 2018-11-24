<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\Foto::class, 10)
            ->create()
            ->each(function($obj) {
                $v = rand(1,App\User::count());
                $obj->cod_usuario = 
                    App\User::find($v)->id;
                $obj->save();
           });
        
    }
}

