<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblBranchModel extends Model
{
    protected $table = 'tblbranch';
    protected $primaryKey = 'id';

    protected $fillable = [
        'branchName', 'branchPhone', 'branchEmail', 'branchAddress', 'branchCity', 'branchCountry'
    ];
}
