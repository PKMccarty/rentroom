<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dropdownroomtype extends Model
{
    use HasFactory;
    protected $table = "roomtypes";
    protected $fillable = ['room_name'];

    public function dropdownsubroomtype()
    {
        return $this->hasMany(dropdownsubroomtype::class);
    }
}
