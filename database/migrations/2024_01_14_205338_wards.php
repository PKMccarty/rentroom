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
        Schema::create('wards', function (Blueprint $table) {
            $table->id();
            $table->string('ward');
            $table->string('name');
            $table->timestamps();
        });
        DB::table('wards')->insert(
            [
                [
                    "ward" => "01",
                    "name" => "ตึกสงฆ์อาพาธ",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "02",
                    "name" => "หอผู้ป่วยเด็กเล็ก",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "03",
                    "name" => "หอผู้ป่วยเด็กโต",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "04",
                    "name" => "หอผู้ป่วยทารกแรกเกิด",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "05",
                    "name" => "ตึกศัลยกรรมหญิง",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "06",
                    "name" => "ตึกศัลยกรรมชาย1",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "07",
                    "name" => "ตึกศัลยกรรมชาย2",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "08",
                    "name" => "ตึกศัลยกรรมกระดูก(ชาย)",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "09",
                    "name" => "ตึกอายุรกรรมหญิง1",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "10",
                    "name" => "ตึกอายุรกรรมหญิง2",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "11",
                    "name" => "ตึกอายุรกรรมชาย1",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "12",
                    "name" => "ตึกกึ่งวิกฤติอายุรกรรม",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "13",
                    "name" => "ตึกอายุรกรรมชาย2",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "14",
                    "name" => "ตึกห้องคลอด",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "15",
                    "name" => "ตึกหลังคลอด",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "16",
                    "name" => "ตึกนรีเวช",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "17",
                    "name" => "ตึกจักษุ",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "18",
                    "name" => "ตึกโสต ศอ นาสิก",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "19",
                    "name" => "ICU(อายุรกรรม)",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "20",
                    "name" => "ตึกพิเศษชั้น5",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "21",
                    "name" => "ตึกพิเศษชั้น7",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "22",
                    "name" => "ตึกฉก.7(พิเศษ)",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "23",
                    "name" => "ตึกฉก.8(พิเศษ)",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "24",
                    "name" => "ตึกER",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "25",
                    "name" => "NICU",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "26",
                    "name" => "ตึกฉก.9(พิเศษ)",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "27",
                    "name" => "ICU(ศัลยกรรม)",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "28",
                    "name" => "ตึกเคมีบำบัด",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "29",
                    "name" => "พิเศษ 8 อาคารผู้ป่วย 8 ชั้น",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "30",
                    "name" => "พิเศษ 6 อาคารผู้ป่วย 8 ชั้น",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "31",
                    "name" => "Stroke Unit",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "32",
                    "name" => "PICU",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "33",
                    "name" => "พิเศษสูติกรรมชั้น9",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "34",
                    "name" => "พิเศษสูติกรรมชั้น10",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "35",
                    "name" => "ICUอายุรกรรม2",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "36",
                    "name" => "ตึกศัลยกรรมกระดูก(หญิง)",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "37",
                    "name" => "หอผู้ป่วยจิตเวช",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "38",
                    "name" => "หอผู้ป่วยราชทัณฑ์",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "39",
                    "name" => "หอผู้ป่วยAIIR",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "40",
                    "name" => "ห้องผู้ป่วยหนักอุบัติเหตุ",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "41",
                    "name" => "หอผู้ป่วยชั้น 3 อาคารภูมิสวัสดิ์รักษ์",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "42",
                    "name" => "PUI-ER",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "43",
                    "name" => "Cohort ศัลยกรรมชาย2",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "44",
                    "name" => "โรงพยาบาลสนาม1",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "45",
                    "name" => "โรงพยาบาลสนาม2",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "46",
                    "name" => "CI วิทยาลัยสงฆ์",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "47",
                    "name" => "CI บ้านค่าย",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "48",
                    "name" => "CI ห้วยบง",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "49",
                    "name" => "Cohort พ.5 ตึก8ชั้น",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "50",
                    "name" => "Cohort พ.7 ตึก8ชั้น",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "51",
                    "name" => "Cohort พ.8 ตึก8ชั้น",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "52",
                    "name" => "Cohort พ.6 ตึก8ชั้น",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "53",
                    "name" => "Cohort พิเศษสูติกรรมชั้น10",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "55",
                    "name" => "Cohort ภูมิ 2 ",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "56",
                    "name" => "Cohort ภูมิ 3 ",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "57",
                    "name" => "Cohort พิเศษสูติกรรมชั้น9",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "58",
                    "name" => "CI ซีลอง",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "59",
                    "name" => "CI นาเสียว",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "60",
                    "name" => "โรงพยาบาลสนาม3",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "61",
                    "name" => "Cohort PICU",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "62",
                    "name" => "CI เรือนจำ",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "63",
                    "name" => "HI รพ.ชัยภูมิ",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "64",
                    "name" => "ODS Ward",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "65",
                    "name" => "Cataract",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "66",
                    "name" => "ตึกอายุรกรรมรวม",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "67",
                    "name" => "ตึกจิตเวชชาย",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "68",
                    "name" => "ตึกจิตเวชหญิง",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "69",
                    "name" => "CI รพ.ชัยภูมิ(เอราวัณ)",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "70",
                    "name" => "ตึกHigh Risk",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "71",
                    "name" => "CI เวชกรรมสังคม",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "72",
                    "name" => "CI รพ.ชัยภูมิ(สิริวัณวรี)",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "73",
                    "name" => "CI โพนทอง",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "74",
                    "name" => "CI บุ่งคล้า",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "75",
                    "name" => "CI ลาดใหญ่",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "76",
                    "name" => "AE Ward",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "77",
                    "name" => "CI เทศบาล(เอราวัณ)",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "78",
                    "name" => "พิเศษ5(CI)",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "79",
                    "name" => "ICUCovidสนาม",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "80",
                    "name" => "Neurosurgery ICU",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "81",
                    "name" => "MICU3",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "82",
                    "name" => "CCU",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "83",
                    "name" => "Cath Lab",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "84",
                    "name" => "CCUและCardio Ward",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "85",
                    "name" => "INR",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "86",
                    "name" => "Home  Ward",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "87",
                    "name" => "Cardio Ward",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "88",
                    "name" => "Sleep Lab Ward",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "89",
                    "name" => "RICU WARD",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "ward" => "90",
                    "name" => "Stroke ICU",
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
        //
    }
};
