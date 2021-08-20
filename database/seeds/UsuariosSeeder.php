<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
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
            'name' => 'Mario Alejandro Jimenez',
            'email' => 'cuentas.alexjimenez@gmail.com',
            'password' => Hash::make('Majt04109612!'),
            'created_at' =>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Mario Alejandro Jimenez',
            'email' => 'marioche041096@gmail.com',
            'password' => Hash::make('Majt04109612!'),
            'created_at' =>date('Y-m-d H:i:s')
        ]);
    }
}
