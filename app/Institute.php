<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    //
    protected $table = "institutes";
    public $fillable = ["instituteName","city","district","postcode","address","phone","email","website","logo"];
}
