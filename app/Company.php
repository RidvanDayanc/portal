<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable=['name','icon_text','icon_image'];
    
    public function branchs(){
          return $this->hasMany('App\Branch');
    }
}

