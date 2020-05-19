<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblCompanyModel extends Model
{
    protected $table = 'tblcompany';
    protected $primaryKey = 'id';

    protected $fillable = [
        'companyName', 'companyPhone', 'companyEmail', 'companyAddress', 'companyCity', 'companyCountry', 'companyBalance'
    ];
}
