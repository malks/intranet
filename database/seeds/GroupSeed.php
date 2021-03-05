<?php

use Illuminate\Database\Seeder;

class GroupSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name'=>'Lunelli',
            'description'=>'Lunelli',
            'fixed'=>'1',
        ]);
        DB::table('groups')->insert([
            'name'=>'Karl Timeline',
            'description'=>'Karl Timeline',
            'fixed'=>'0',
        ]);
        DB::table('groups')->insert([
            'name'=>'Ale Timeline',
            'description'=>'Ale Timeline',
            'fixed'=>'0',
        ]);
        DB::table('groups')->insert([
            'name'=>'Marketing',
            'description'=>'Marketing',
        ]);
        DB::table('groups')->insert([
            'name'=>'Comercial',
            'description'=>'Comercial',
        ]);
        DB::table('groups')->insert([
            'name'=>'RH',
            'description'=>'RH',
        ]);        
        DB::table('users_groups')->insert([
            'id_user'=>'1',
            'id_group'=>'1',
            'admin'=>'1',
            'feed_write'=>'1',
            'doc_write'=>'1',
            'link_write'=>'1',
        ]);
        DB::table('users_groups')->insert([
            'id_user'=>'2',
            'id_group'=>'1',
            'admin'=>'0',
            'feed_write'=>'0',
            'doc_write'=>'0',
            'link_write'=>'0',
        ]);
        DB::table('users_groups')->insert([
            'id_user'=>'2',
            'id_group'=>'2',
            'admin'=>'1',
            'feed_write'=>'1',
            'doc_write'=>'1',
            'link_write'=>'1',
        ]);
        DB::table('users_groups')->insert([
            'id_user'=>'2',
            'id_group'=>'4',
            'admin'=>'0',
            'feed_write'=>'0',
        ]);
        DB::table('users_groups')->insert([
            'id_user'=>'3',
            'id_group'=>'5',
            'admin'=>'0',
            'feed_write'=>'0',
        ]);
        DB::table('users_groups')->insert([
            'id_user'=>'3',
            'id_group'=>'3',
            'admin'=>'1',
            'feed_write'=>'1',
            'doc_write'=>'1',
            'link_write'=>'1',
        ]);        
        DB::table('users_groups')->insert([
            'id_user'=>'3',
            'id_group'=>'1',
            'admin'=>'0',
            'feed_write'=>'1',
            'doc_write'=>'0',
            'link_write'=>'0',
        ]);        
        DB::table('users_groups_followers')->insert([
            'id_user'=>'1',
            'id_group'=>'1',
        ]);
        DB::table('users_groups_followers')->insert([
            'id_user'=>'3',
            'id_group'=>'1',
        ]);
        DB::table('users_groups_followers')->insert([
            'id_user'=>'3',
            'id_group'=>'2',
        ]);
        DB::table('users_groups_followers')->insert([
            'id_user'=>'1',
            'id_group'=>'2',
        ]);
        DB::table('users_groups_followers')->insert([
            'id_user'=>'1',
            'id_group'=>'3',
        ]);
        DB::table('users_groups_followers')->insert([
            'id_user'=>'3',
            'id_group'=>'5',
        ]);
        DB::table('users_groups_followers')->insert([
            'id_user'=>'2',
            'id_group'=>'4',
        ]);        
    }
}
