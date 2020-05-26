<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'nombre' => 'Admin',
            'apellido' => '-',
            'email' => 'admin@cookie.mx',
            'password' => bcrypt('password'),
            'tipo' => 'admin',
            'created_at' => Carbon::now()            
        ]);

        DB::table('users')->insert([
            'nombre' => 'Usuario',
            'apellido' => 'Prueba',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
            'tipo' => 'user',
            'created_at' => Carbon::now()            
        ]);

        factory(App\User::class,10)->create();
    }
}
