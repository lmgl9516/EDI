<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class cUser
{
    public $aMail;
    public $aPassword;

    public function __construct($pEmail, $pPassword) 
    {
        $this->aMail     = $pEmail;
        $this->aPassword = $pPassword;
    }
}

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [ new cUser('mborcast@outlook.com', 'bunny'),
                      new cUser('jimena@outlook.com', 'jimena'),
                      new cUser('arturo@outlook.com', 'arturo'),
		      new cUser('leo@outlook.com', 'leo')];

        foreach ($usuarios as $usuario) 
        { 
            DB::table('users')->insert
            ([
                'email'    => $usuario->aMail,
                'password' => bcrypt($usuario->aPassword),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
