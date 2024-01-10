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
            $table->String('job_date');
            $table->String('job_time');
            $table->string('patient_name');
            $table->String('cid');
            $table->String('job_pa_status');
            $table->String('job_re_name');
            $table->String('job_re_re');
            $table->String('job_re_tel');
            $table->String('job_re_date');
            $table->integer('room_type');
            $table->integer('status_id');
            $table->string('job_re_time')->nullable();
            $table->string('doctor_name')->nullable();
            $table->integer('preroom_id')->nullable();
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
