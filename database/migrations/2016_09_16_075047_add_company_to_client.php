<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompanyToClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('last_name')->nullable()->change();
            $table->string('first_name')->nullable()->change();
            $table->string('middle_name')->nullable()->change();
            $table->date('date_birth')->nullable()->change();
            $table->string('passport_serial')->nullable()->change();
            $table->string('passport_number')->nullable()->change();

            $table->boolean('is_company')->default(false);
            $table->string('company_name')->nullable();
            $table->string('company_inn')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('policies', function (Blueprint $table) {
            $table->string('last_name')->nullable(false)->change();
            $table->string('first_name')->nullable(false)->change();
            $table->string('middle_name')->nullable(false)->change();
            $table->date('date_birth')->nullable(false)->change();
            $table->string('passport_serial')->nullable(false)->change();
            $table->string('passport_number')->nullable(false)->change();

            $table->dropColumn('is_company');
            $table->dropColumn('company_name');
            $table->dropColumn('company_inn');
        });
    }
}
