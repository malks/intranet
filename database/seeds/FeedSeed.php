<?php

use Illuminate\Database\Seeder;

class FeedSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feeds')->insert([
            'id_user'=>'1',
            'content'=>'Bem-vindo à intranet',
        ]);
        DB::table('feeds')->insert([
            'id_user'=>'1',
            'content'=>'Bom final de semana!',
        ]);
        DB::table('feeds')->insert([
            'id_user'=>'1',
            'content'=>'Parabéns!',
        ]);        
        DB::table('groups_feeds')->insert([
            'id_group'=>1,
            'id_feed'=>1,
        ]);
        DB::table('feed_shared_group')->insert([
            'id_group_shared'=>1,
            'id_feed'=>2,
            'id_user_sharer'=>2,
        ]);
        DB::table('feed_shared_user')->insert([
            'id_user_shared'=>1,
            'id_feed'=>3,
            'id_user_sharer'=>3,
        ]);
        DB::table('feed_shared_user')->insert([
            'id_user_shared'=>1,
            'id_feed'=>1,
            'id_user_sharer'=>3,
        ]);        
    }
}
