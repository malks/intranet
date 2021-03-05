<?php

use Illuminate\Database\Seeder;

class AdmSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Adm',
            'email'=>'osmar@nbwdigital.com.br',
            'password'=>Hash::make(Config::get('app.adm_pass')),
        ]);
    }
}
