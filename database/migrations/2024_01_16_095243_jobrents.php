<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobrents', function (Blueprint $table) {
            $table->id();
            $table->String('job_date_time')->nullable();
            $table->integer('doctor_id')->nullable();
            $table->integer('ward_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('room_id');
            $table->integer('accept_id');
            $table->string('patient_name')->nullable();
            $table->String('cid')->nullable();
            $table->String('job_pa_status')->nullable();
            $table->String('job_re_tel')->nullable();
            $table->String('job_re_date_time')->nullable();
            $table->string('job_discharge')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobrents');
    }
};
