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
        Schema::create('roomtypesubs', function (Blueprint $table) {
            $table->id();
            $table->string('roomtype_id');
            $table->integer('socket_id');
            $table->integer('room_status');
            $table->string('room_subtype_name');
            $table->integer('room_subtype_price');
            $table->integer('room_subtype_nurse_price');
            $table->string('room_subtype_img');
            $table->timestamps();
        });

        DB::table('roomtypesubs')->insert([[
            'roomtype_id' => '3',
            'room_subtype_name' => 'ห้องพิเศษเดี่ยว (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษศัลยกรรมชาย 2)',
            'room_subtype_price' => 1000, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 50, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VIP8(8)NEW/VIP8(8)NEW.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '3',
            'room_subtype_name' => 'ห้องพิเศษเดี่ยว (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษศัลยกรรมชาย 1)',
            'room_subtype_price' => 1000, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 50, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VIP8(8)NEW/VIP8(8)NEW.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '3',
            'room_subtype_name' => 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5)',
            'room_subtype_price' =>1400, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VIP5(8)OLD/VIP5(8)OLD-1.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '3',
            'room_subtype_name' => 'ห้องพิเศษ VIP (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5 (VIP))',
            'room_subtype_price' => 2000, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VVIP5(8)OLD/VVIP5(8)OLD.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '2',
            'room_subtype_name' => 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)',
            'room_subtype_price' => 1600, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VIP7(10)NEW/VIP7(10)NEW.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '1',
            'room_subtype_name' => 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)',
            'room_subtype_price' => 1600, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VIP9(SU)OLD/VIP9(SU)OLD.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '1',
            'room_subtype_name' => 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)',
            'room_subtype_price' => 1600, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VIP10(SU)NEW/VIP10(SU)NEW.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '2',
            'room_subtype_name' => 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)',
            'room_subtype_price' => 1600, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VIP8(10)OLD/VIP8(10)OLD2.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '2',
            'room_subtype_name' => 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)',
            'room_subtype_price' => 1600, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VIP9(10)OLD/VIP9(10)OLD.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '3',
            'room_subtype_name' => 'ห้องพิเศษ VIP (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6 (VIP))',
            'room_subtype_price' => 2000, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VVIP6(8)OLD/VVIP6(8)OLD2.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '3',
            'room_subtype_name' => 'ห้องพิเศษ VIP (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7 (VIP))',
            'room_subtype_price' => 2000, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VVIP7(8)NEW/VVIP7(8)NEW2.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '3',
            'room_subtype_name' => 'ห้องพิเศษ VIP (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8 (VIP))',
            'room_subtype_price' => 2000, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VVIP8(8)NEW/VVIP8(8)NEW.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '3',
            'room_subtype_name' => 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)',
            'room_subtype_price' => 1400, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VIP6(8)OLD/VIP6(8)OLD-2.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '3',
            'room_subtype_name' => 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)',
            'room_subtype_price' => 1400, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VIP7(8)NEW/VIP7(8)NEW.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '3',
            'room_subtype_name' => 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)',
            'room_subtype_price' => 1400, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 300, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'VIP8(8)NEW/VIP8(8)NEW.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'roomtype_id' => '4',
            'room_subtype_name' => 'อยู่ขั้นตอนการพิจารณา',
            'room_subtype_price' => 0, // แทนค่าตามที่คุณต้องการ
            'room_subtype_nurse_price' => 0, // แทนค่าตามที่คุณต้องการ
            'room_subtype_img' => 'cph.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]
        ]
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomtypesubs');
    }
};
