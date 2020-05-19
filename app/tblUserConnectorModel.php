<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cache;
class tblUserConnectorModel extends Model
{

    protected $table = 'tbluserconnector';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id', 'role_id', 'branch_id', 'company_id'
    ];
    public function isOnline()
    {
        return Cache::has('user-is-online-'. $this->id);
    }
}
