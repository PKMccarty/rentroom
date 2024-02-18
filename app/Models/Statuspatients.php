<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuspatients extends Model
{
    use HasFactory;
    protected $table = "statuspatients";
    protected $primaryKey = 'id';
}
