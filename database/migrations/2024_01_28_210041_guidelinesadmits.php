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
         //
         Schema::create('guidelinesadmits', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->string('bypass');
            $table->integer('guide_no1');
            $table->integer('guide_no2');
            $table->integer('guide_no3');
            $table->integer('guide_no4');
            $table->integer('guide_no5');
            $table->integer('guide_no6');
            $table->integer('guide_no7');
            $table->integer('guide_no8');
            $table->integer('guide_no9');
            $table->integer('guide_no10');
            $table->integer('guide_no11');
            $table->integer('guide_no12');
            $table->integer('guide_no13');
            $table->integer('guide_no14');
            $table->integer('guide_no15');
            $table->integer('guide_no16');
            $table->integer('guide_no17');
            $table->integer('guide_no18');
            $table->integer('guide_no19');
            $table->integer('guide_no20');
            $table->integer('guide_no21');
            $table->integer('guide_no22');
            $table->integer('guide_no23');
            $table->integer('guide_no24');
            $table->integer('guide_no25');
            $table->integer('guide_no26');
            $table->integer('guide_no27');
            $table->integer('guide_no28');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
