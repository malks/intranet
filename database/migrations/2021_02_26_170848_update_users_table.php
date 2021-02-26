<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('unit',100)->nullable();
                $table->string('phone',20)->nullable();
                $table->string('job',100)->nullable();
                $table->string('sector',100)->nullable();
                $table->string('address_street')->nullable();
                $table->string('address_district')->nullable();
                $table->string('address_city',150)->nullable();
                $table->string('address_state',100)->nullable();
            });            
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
