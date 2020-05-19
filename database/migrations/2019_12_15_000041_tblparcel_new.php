<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblparcelNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblparcelnew', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('refNumber')->default('0');
            $table->string('parcelDescription')->default('0');
            $table->string('parcelWeight')->default('0');
            $table->string('parcelLength')->default('0');
            $table->string('parcelWidth')->default('0');
            $table->string('parcelHeight')->default('0');
            $table->string('parcelImage')->default('0');
            $table->string('parcelInvoiceImage')->default('0');
            $table->string('parcelCreateDate')->default('0');
            $table->string('parcelCurrentStatus_id')->default('0');
            $table->string('parcelCurrentStatusName')->default('0');
            $table->string('parcelCurrentStatusDescription')->default('0');
            $table->string('parcelCurrentStatusUpdateDate')->default('0');
            $table->string('parcelDeliveryType_id')->default('0'); // 1 bulsa do dveri /0 bulsa do sklada
            $table->string('parcelDeliveryTypeName')->default('0'); // do dveri yoki do sklada
            $table->string('parcelPlan_id')->default('0');
            $table->string('parcelPlanName')->default('0');
            $table->string('parcelDeliveryTimeFrom')->default('0');
            $table->string('parcelDeliveryTimeTo')->default('0');
            $table->string('parcelPayer_id')->default('0'); //agar 1 BULSA otpravitel tulaydi
            $table->string('parcelPayerName')->default('0');
            $table->string('parcelCourierService')->default('0'); // 1 bulsa vizov is doma emas 0 bulsa vizov iz doma bor
            $table->string('parcelDiscount')->default('0'); // скидка
            $table->string('parcelNalBeznal')->default('0'); // 1 bulsa naxd /0 bulsa payme click umuman kuchirma
            $table->string('parcelPriceUS')->default('0');
            $table->string('parcelPriceRU')->default('0');
            $table->string('parcelPriceUZS')->default('0');
            $table->string('senderUser_id')->default('0');
            $table->string('senderUserRole_id')->default('0');
            $table->string('senderUserName')->default('0');
            $table->string('senderUserPhone')->default('0');
            $table->string('senderUserAdressLongitude')->default('0');
            $table->string('senderUserAdressLattitude')->default('0');
            $table->string('senderUserAdress')->default('0');
            $table->string('senderUserEmail')->default('0');
            $table->string('senderUserBranch_id')->default('0');
            $table->string('senderUserBranchName')->default('0');
            $table->string('senderCompany_id')->default('0');
            $table->string('senderCompanyName')->default('0');
            $table->string('senderDirector_id')->default('0');
            $table->string('senderDirectorName')->default('0');
            $table->string('recipientUser_id')->default('0');
            $table->string('recipientUserRole_id')->default('0');
            $table->string('recipientUserName')->default('0');
            $table->string('recipientUserPhone')->default('0');
            $table->string('recipientUserAdressLongitude')->default('0');
            $table->string('recipientUserAdressLattitude')->default('0');
            $table->string('recipientUserAdress')->default('0');
            $table->string('recipientUserEmail')->default('0');
            $table->string('recipientUserBranch_id')->default('0');
            $table->string('recipientUserBranchName')->default('0');
            $table->string('recipientCompany_id')->default('0');
            $table->string('recipientCompanyName')->default('0');
            $table->string('recipientDirector_id')->default('0');
            $table->string('recipientDirectorName')->default('0');
            $table->string('senderManager_id')->default('0');
            $table->string('senderManagerName')->default('0');
            $table->string('recipientManager_id')->default('0');
            $table->string('recipientManagerName')->default('0');
            $table->string('parcelCourier_id')->default('0');
            $table->string('parcelCourierName')->default('0');
            $table->string('newSender')->default('0');
            $table->string('newRecipient')->default('0');
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
        Schema::dropIfExists('tblparcelNew');
    }
}
