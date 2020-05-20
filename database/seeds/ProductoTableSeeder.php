<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $productos = [
            [
                'nombre' => 'Galletas María',
                'descripcion' => 'Galletas sabor vainilla',
                'precio' => 15.50,
                'categoria_id' => 2,
                'created_at' => Carbon::now()
            ],

            [
                'nombre' => 'Galletas Oreo',
                'descripcion' => 'Galletas sabor chocolate',
                'precio' => 30.50,
                'categoria_id' => 1,
                'created_at' => Carbon::now()
            ],

            [
                'nombre' => 'Galletas Emperador',
                'descripcion' => 'Galletas sabor chocolate',
                'precio' => 10.50,
                'categoria_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Galletas Nuez',
                'descripcion' => 'Galletas con nuez natural',
                'precio' => 11.50,
                'categoria_id' => 3,
                'created_at' => Carbon::now()
            ]

        ];
        DB::table('productos')->insert($productos);
    }
}
