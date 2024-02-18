<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobrent extends Model
{
    use HasFactory;
    protected $table = 'jobrents';
    protected $primarykey ='id';
    protected $fillable = ['job_date_time','doctor_id','ward_id','status_id','room_id','patient_name','cid','job_pa_status','job_re_tel','job_re_date_time','accept_id','job_rent_name','job_rent_tell','job_rent_relation'];
}
