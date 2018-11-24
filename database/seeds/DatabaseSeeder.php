<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class);
        $this->call(FotoSeeder::class);
        $this->call(PublicacaoSeeder::class);
       $this->call(ComentarioSeeder::class);

    }
}
