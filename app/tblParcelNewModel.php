<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblParcelNewModel extends Model
{
    protected $table = 'tblparcelnew';
    protected $primaryKey = 'id';

    protected $fillable = [
        'refNumber',
        'parcelDescription',
        'parcelWeight',
        'parcelLength',
        'parcelWidth',
        'parcelHeight',
        'parcelImage',
        'parcelInvoiceImage',
        'parcelCreateDate',
        'parcelCurrentStatus_id',
        'parcelCurrentStatusName',
        'parcelCurrentStatusDescription',
        'parcelCurrentStatusUpdateDate',
        'parcelDeliveryType_id',
        'parcelDeliveryTypeName',
        'parcelPlan_id',
        'parcelPlanName',
        'parcelDeliveryTimeFrom',
        'parcelDeliveryTimeTo',
        'parcelPayer_id',
        'parcelPayerName',
        'parcelCourierService',
        'parcelDiscount',
        'parcelNalBeznal',
        'parcelPriceUS',
        'parcelPriceRU',
        'parcelPriceUZS',
        'senderUser_id',
        'senderUserRole_id',
        'senderUserName',
        'senderUserPhone',
        'senderUserAdressLongitude',
        'senderUserAdressLattitude',
        'senderUserAdress',
        'senderUserEmail',
        'senderUserBranch_id',
        'senderUserBranchName',
        'senderCompany_id',
        'senderCompanyName',
        'senderDirector_id',
        'senderDirectorName',
        'recipientUser_id',
        'recipientUserRole_id',
        'recipientUserName',
        'recipientUserPhone',
        'recipienUserAdressLongitude',
        'recipienUserAdressLattitude',
        'recipientUserAdress',
        'recipientUserEmail',
        'recipientUserBranch_id',
        'recipientUserBranchName',
        'recipientCompany_id',
        'recipientCompanyName',
        'recipientDirector_id',
        'recipientDirectorName',
        'senderManager_id',
        'senderManagerName',
        'recipientManager_id',
        'recipientManagerName',
        'parcelCourier_id',
        'parcelCourierName',
        'newSender',
        'newRecipient'
    ];
}
