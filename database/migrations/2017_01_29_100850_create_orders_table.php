<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->string('email');
			$table->string('phone');
			$table->text('comment');
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('order_statuses')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('order_types')->onDelete('cascade')->onUpdate('cascade');
			
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
