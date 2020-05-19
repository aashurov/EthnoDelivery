<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcompany', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyName');
            $table->string('companyPhone');
            $table->string('companyEmail');
            $table->string('companyAddress');
            $table->string('companyCity');
            $table->string('companyCountry');
            $table->string('companyBalance');
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
        Schema::dropIfExists('tblCompany');
    }
}
