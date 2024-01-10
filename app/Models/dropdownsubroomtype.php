<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dropdownsubroomtype extends Model
{
    use HasFactory;
    protected $table = "roomtypesubs";
    protected $fillable = ['room_subtype_name', 'roomtype_id'];

    public function dropdownroomtype()
    {
        return $this->belongsTo(dropdownsubroomtype::class);
    }
}
