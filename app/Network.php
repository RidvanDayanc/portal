<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    protected $fillable = ['branch_id','bssid'];

    public function branch(){
        return $this->belongsTo('App\Branch');
    }
}
