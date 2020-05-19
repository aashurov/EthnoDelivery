<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblParcelConnector extends Model
{
    protected $table = 'tblparcelconnector';
    protected $primaryKey = 'id';

    protected $fillable = [
        'refNUmber',
        'sender_id',
        'senderBranch_id',
        'senderManager_id',
        'senderDirector_id',
        'senderCompany_id',
        'recipient_id',
        'recipientRole_id',
        'recipientBranch_id',
        'recipientManager_id',
        'recipientDirector_id',
        'recipientCompany_id',
        'parcelType_id',
        'parcelDeliveryType_id',
        'parcelSenderType_id',
        'parcelPlan_id',
        'parcelStatus_id',
        'parcelPayer_id'

    ];
}
