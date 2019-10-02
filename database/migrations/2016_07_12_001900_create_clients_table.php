<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->date('date_birth');
            $table->string('passport_serial');
            $table->string('passport_number');
            $table->string('full_address');
            $table->text('full_address_json');
            $table->string('cell_phone');
            $table->string('email');
            $table->text('notes');
            $table->text('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
