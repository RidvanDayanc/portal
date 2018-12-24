<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['company_id','address'];

    public function networks(){
        return $this->hasMany('App\Network');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }
}
