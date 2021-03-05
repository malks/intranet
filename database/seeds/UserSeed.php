<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Karl',
            'email'=>'karl@nbwdigital.com.br',
            'password'=>Hash::make(Config::get('app.adm_pass')),
        ]);
        DB::table('users')->insert([
            'name'=>'Alessandro',
            'email'=>'alessandro.a@lunelli.com.br',
            'password'=>Hash::make(Config::get('app.adm_pass')),
        ]);        
    }
}
