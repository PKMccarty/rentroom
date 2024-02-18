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
        Schema::create('statusrents', function (Blueprint $table) {
            $table->id();
            $table->string('status_name');
            $table->string('status_color');
            $table->timestamps();
        });
        DB::table('statusrents')->insert([
            [
                'status_name' => 'กำลังดำเนินการ',
                'status_color' => 'text-info',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'status_name' => 'ดำเนินการเรียบร้อย',
                'status_color' => 'text-success',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'status_name' => 'ยกเลิก',
                'status_color' => 'text-danger',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // เพิ่มข้อมูลอื่น ๆ ตามลำดับ
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statusrents');
    }
};
