<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = ['name', 'dob', 'nrc_number', 'father_name', 'occupation', 'address'];
}
