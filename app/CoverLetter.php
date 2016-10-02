<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoverLetter extends Model
{
    //
    protected $table = "coverletters";
    public $fillable = ["coverLetterTitle","actualText"];
}
