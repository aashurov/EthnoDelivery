<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblParcelPlanModel extends Model
{
    protected $table = 'tblparcelplan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'parcelPlanName', 'parcelPlanPrice', 'parcelPlanDate'
    ];
}
