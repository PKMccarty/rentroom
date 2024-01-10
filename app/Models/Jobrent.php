<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobrent extends Model
{
    use HasFactory;
    protected $table = 'jobrents';
    protected $primarykey ='id';
    protected $fillable = ['job_date','job_time','cid','patient_name','job_pa_status','job_re_name','job_re_re','room_type','status_id','job_re_tel','job_re_date','preroom_id'];
}
