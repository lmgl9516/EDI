<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsuariosTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(BloquesTableSeeder::class);
        $this->call(PlanTableSeeder::class);

        Model::reguard();
    }
}
