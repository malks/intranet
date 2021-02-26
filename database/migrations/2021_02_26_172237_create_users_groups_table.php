<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_groups', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('id_user');
            $table->integer('id_group');
            $table->tinyInteger('admin')->default(0);
            $table->tinyInteger('feed_write')->default(0);
            $table->tinyInteger('doc_write')->default(0);
            $table->tinyInteger('link_write')->default(0);
            $table->tinyInteger('follows')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_groups');
    }
}
