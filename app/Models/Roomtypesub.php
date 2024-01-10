<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomtypesub extends Model
{
    use HasFactory;
    protected $table = 'roomtypesubs';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'roomtype_id', 'room_subtype_name', 'room_subtype_price', 'room_subtype_nurse_price', 'room_subtype_img'];
}
