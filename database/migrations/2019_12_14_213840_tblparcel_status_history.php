<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblparcelStatusHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblparcelstatushistory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('refNumber');
            $table->string('parcelStatus_id');
            $table->string('parcelStatus');
            $table->string('parcelCurrentStatusDescription');
            $table->string('parcelStatusDate');
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
        Schema::dropIfExists('tblparcelStatusHistory');
    }
}
