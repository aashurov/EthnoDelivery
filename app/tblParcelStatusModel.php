<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblParcelStatusModel extends Model
{
    protected $table = 'tblparcelstatus';
    protected $primaryKey = 'id';

    protected $fillable = [
        'parcelStatus'
    ];
}
