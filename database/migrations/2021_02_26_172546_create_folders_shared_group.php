<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersSharedGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders_shared_group', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_folder');
            $table->integer('id_user_sharer');
            $table->integer('id_group_shared');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folders_shared_group');
    }
}
