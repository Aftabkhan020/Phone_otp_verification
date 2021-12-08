<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_id');
            $table->string('seller_id');
            $table->string('product_sub_category_id');
            $table->string('sector_id');
            $table->string('company_name');
            $table->string('company_name_slug');
            $table->string('company_description');
            $table->string('company_email');
            $table->string('company_phone');
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
        Schema::dropIfExists('register_companies');
    }
}
