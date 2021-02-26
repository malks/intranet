<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs_files', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_doc');
            $table->tinyInteger('approved')->default(0);
            $table->tinyInteger('published')->default(0);
            $table->string('file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docs_files');
    }
}
