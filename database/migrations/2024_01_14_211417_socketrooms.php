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
        Schema::create('socketrooms', function (Blueprint $table) {
            $table->id();
            $table->integer('loginname');
            $table->string('ward');
            $table->string('socket');
            $table->timestamps();
        });
        DB::table('socketrooms')->insert(
            [[
                'loginname'=> 7,
                'ward'=> '20',
                'socket'=> '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'loginname'=> 9,
                'ward'=> '21',
                'socket'=> '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'loginname'=> 4,
                'ward'=> '22',
                'socket'=> '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'loginname'=> 5,
                'ward'=> '23',
                'socket'=> '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'loginname'=> 6,
                'ward'=> '26',
                'socket'=> '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'loginname'=> 10,
                'ward'=> '29',
                'socket'=> '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'loginname'=> 8,
                'ward'=> '30',
                'socket'=> '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'loginname'=> 3,
                'ward'=> '33',
                'socket'=> '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'loginname'=> 2,
                'ward'=> '34',
                'socket'=> '15',
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
        //
    }
};
