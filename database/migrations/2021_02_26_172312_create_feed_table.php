<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_user');
            $table->integer('id_group');
            $table->string('link');
            $table->text('content');
            $table->tinyInteger('in_landing')->default(0);
            $table->string('cover')->nullable();
            $table->datetime('prioritize_until')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feed');
    }
}
