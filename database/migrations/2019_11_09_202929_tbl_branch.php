<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBranch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbranch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('branchName');
            $table->string('branchPhone');
            $table->string('branchEmail');
            $table->string('branchAddress');
            $table->string('branchCity');
            $table->string('branchCountry');
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
        Schema::dropIfExists('tblBranch');
    }
}
