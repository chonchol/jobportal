<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    //
    protected $table = "job_applicants";
    public $fillable = ["attachedResume","status"];
}
