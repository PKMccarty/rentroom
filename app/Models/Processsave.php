<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processsave extends Model
{
    use HasFactory;
    protected $table = 'jobrents';
    protected $primarykey ='id';
    protected $fillable = ['room_type','status_id','doctor_id'];
}
