<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->date('date_from');
            $table->string('time_from');
            $table->date('date_to');
            $table->string('time_to');

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');

            $table->boolean('same_client_owner')->default(true);

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

            $table->integer('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');

            $table->boolean('unrestricted')->default(false);
            $table->double('p_base');
            $table->double('p_k1');
            $table->double('p_k2');
            $table->double('p_k3');
            $table->double('p_k4');
            $table->double('p_k5');
            $table->double('p_k6');
            $table->double('p_k7');
            $table->double('p_k8');
            $table->double('p_total');

            $table->string('policy_serial');
            $table->string('policy_number')->unique();
            $table->string('receipt_number')->unique();

            $table->boolean('exported')->default(false);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('policies');
    }
}
