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
            'email' => 'admin@ccommerce.mx',
            'password' => bcrypt('Password'),
            'tipo' => 'admin'            
        ]);
    }
}
