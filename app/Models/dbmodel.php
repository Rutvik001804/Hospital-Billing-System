<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbmodel extends Model
{
    protected $table = 'patient_details';
    public $timestamps = false;
}
