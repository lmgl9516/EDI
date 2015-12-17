<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert
        ([
        	'email' => 'mborcast@outlook.com',
        	'password' => bcrypt('bunny')
        ]);

        DB::table('users')->insert
        ([
            'email' => 'jimena@outlook.com',
            'password' => bcrypt('jimena')
        ]);

        DB::table('users')->insert
        ([
            'email' => 'arturo@outlook.com',
            'password' => bcrypt('arturo')
        ]);
    }
}
