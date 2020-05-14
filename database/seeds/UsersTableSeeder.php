<?php

use Illuminate\Database\Seeder;

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
            'password' => bcrypt('Password'),
            'tipo' => 'admin'            
        ]);

        DB::table('users')->insert([
            'nombre' => 'César',
            'apellido' => 'Ramirez',
            'email' => 'cesar@cookie.mx',
            'password' => bcrypt('12345678'),
            'tipo' => 'user'            
        ]);
    }
}
