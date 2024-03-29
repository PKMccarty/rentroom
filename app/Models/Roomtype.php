<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    use HasFactory;
    protected $table = 'roomtypes';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'room_name'];
}
