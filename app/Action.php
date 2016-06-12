<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    //
    protected $table = "actions";
    public $fillable = ['uri','action'];
/*
    public function permissions()
    {
        return $this->hasMany('App\Permission');
    }
*/
}
