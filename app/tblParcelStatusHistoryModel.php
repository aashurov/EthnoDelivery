<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblParcelStatusHistoryModel extends Model
{
    protected $table = 'tblparcelstatushistory';
    protected $primaryKey = 'id';

    protected $fillable = [
        'refNumber', 'parcelStatus_id', 'parcelStatus', 'parcelCurrentStatusDescription', 'parcelStatusDate'
    ];
}
