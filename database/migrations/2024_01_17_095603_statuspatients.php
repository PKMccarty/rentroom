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
        //
        Schema::create('statuspatients', function (Blueprint $table) {
            $table->id();
            $table->String('statuspatients_name')->nullable();
            $table->timestamps();
        });

        DB::table('statuspatients')->insert([[
            'statuspatients_name' => 'ผู้ป่วยแจ้ง',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'statuspatients_name' => 'ญาติผู้ป่วยแจ้ง',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'statuspatients_name' => 'หมอแจ้ง',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'statuspatients_name' => 'พยาบาลแจ้ง',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
