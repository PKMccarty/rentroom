<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guidelinesadmits extends Model
{
    use HasFactory;
    protected $table = "guidelinesadmits";
    protected $primarykey ="id";
    protected $fillable = [
        'job_id',
        'bypass',
        'guide_no1',
        'guide_no2',
        'guide_no3',
        'guide_no4',
        'guide_no5',
        'guide_no6',
        'guide_no7',
        'guide_no8',
        'guide_no9',
        'guide_no10',
        'guide_no11',
        'guide_no12',
        'guide_no13',
        'guide_no14',
        'guide_no15',
        'guide_no16',
        'guide_no17',
        'guide_no18',
        'guide_no19',
        'guide_no20',
        'guide_no21',
        'guide_no22',
        'guide_no23',
        'guide_no24',
        'guide_no25',
        'guide_no26',
        'guide_no27',
        'guide_no28',
    ];
}
