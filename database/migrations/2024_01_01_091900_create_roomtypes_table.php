<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roomtypes', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->string('room_image');
            $table->timestamps();
        });

        DB::table('roomtypes')->insert([
            [
                'room_name' => 'ห้องพิเศษ ตึกแม่และเด็ก 10 ชั้น',
                'room_image' => 'img/rent/room/mother.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'room_name' => 'ห้องพิเศษ ตึกเฉลิมพระเกียรติ 10 ชั้น',
                'room_image' => 'img/rent/room/med.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'room_name' => 'ห้องพิเศษ ตึกศัลยกรรม 8 ชั้น',
                'room_image' => 'img/rent/room/surgery.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'room_name' => 'อยู่ในขั้นตอนพิจารณา',
                'room_image' => 'img/rent/room/cph.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomtypes');
    }
};
