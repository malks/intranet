<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedSharedUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_shared_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_feed');
            $table->integer('id_user_sharer');
            $table->integer('id_user_shared');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feed_shared_user');
    }
}
