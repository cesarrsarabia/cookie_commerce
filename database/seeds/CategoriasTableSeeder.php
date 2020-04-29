<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorias')->insert([
            'nombre' => 'Chocolate',
            'Descripcion' => 'Galleta Sabor chocolate',             
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Vainilla',
            'Descripcion' => 'Galletas Sabor Vainilla',             
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'nuez',
            'Descripcion' => 'Galletas Sabor Nuez',             
        ]);

    }
}
