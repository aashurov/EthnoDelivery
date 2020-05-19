<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblParcelCurrencyModel extends Model
{
    protected $table = 'tblparcelcurrency';
    protected $primaryKey = 'id';

    protected $fillable = [
        'currencyName', 'currencyCode', 'currencyPrice'
    ];
}
