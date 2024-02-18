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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->boolean('is_admin')->nullable();
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'name' => 'Admin',
                'is_admin' => 1,
                'password' => '$2y$12$oPP/4HToe.zUGPwe3dmcFuyFpi.inkw3DE0YQiSiGRYi/0zyIcLl2',
                'email' => 'admin@admin.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'spward01',
                'name' => 'พิเศษสูติกรรมชั้น 10',
                'is_admin' => 2,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'spward01@spward01.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'spward02',
                'name' => 'พิเศษสูติกรรมชั้น 9',
                'is_admin' => 2,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'spward02@spward02.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'spward03',
                'name' => 'พิเศษฉก.7 ชั้น 7',
                'is_admin' => 2,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'spward03@spward03.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'spward04',
                'name' => 'พิเศษฉก.8 ชั้น 8',
                'is_admin' => 2,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'spward04@spward04.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'spward05',
                'name' => 'พิเศษฉก.9 ชั้น 9',
                'is_admin' => 2,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'spward05@spward05.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'spward06',
                'name' => 'พิเศษ 5 พิเศษศัลยกรรม 8 ชั้น',
                'is_admin' => 2,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'spward06@spward06.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'spward07',
                'name' => 'พิเศษ 6 พิเศษศัลยกรรม 8 ชั้น',
                'is_admin' => 2,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'spward07@spward07.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'spward08',
                'name' => 'พิเศษ 7 พิเศษศัลยกรรม 8 ชั้น',
                'is_admin' => 2,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'spward08@spward08.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'spward09',
                'name' => 'พิเศษ 8 พิเศษศัลยกรรม 8 ชั้น',
                'is_admin' => 2,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'spward09@spward09.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor01', 'name' => 'นพ.กิตติเวทย์ ลิมปวิทยากุล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor01@doctor01.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor02', 'name' => 'นพ.กิตติศักดิ์ ชัยชูบุตร', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor02@doctor02.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor03', 'name' => 'นพ.กิติกร สมฤาแสน', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor03@doctor03.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor04', 'name' => 'นพ.เกียรติศักดิ์ ปลัดกอง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor04@doctor04.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor05', 'name' => 'นพ.เจษฎากร พรนภา', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor05@doctor05.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor06', 'name' => 'นพ.ฉัตรบดี รัตนเสริมพงศ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor06@doctor06.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor07', 'name' => 'นพ.ชนัฐพงษ์ อิ่มดี', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor07@doctor07.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor08', 'name' => 'นพ.ชนินทร์ ชำนาญวงษ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor08@doctor08.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor09', 'name' => 'นพ.ชลพรรษ ตั้งบุตราวงศ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor09@doctor09.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor10', 'name' => 'นพ.ชัยวัฒน์ เพ็ชรแสง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor10@doctor10.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor11', 'name' => 'นพ.ชาญ กุศลเลิศจริยา', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor11@doctor11.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor12', 'name' => 'นพ.ชุมพร ปานเปีย', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor12@doctor12.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor13', 'name' => 'นพ.เชฏฐา ฐานคร', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor13@doctor13.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor14', 'name' => 'นพ.ฐานันดร์ ฐานวิเศษ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor14@doctor14.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor15', 'name' => 'นพ.ณรงค์ศักดิ์ บำรุงถิ่น', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor15@doctor15.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor16', 'name' => 'นพ.ณัฐ ตั้งพร้อมพันธ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor16@doctor16.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor17', 'name' => 'นพ.ณัฐพงษ์ ก้านคูณ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor17@doctor17.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor18', 'name' => 'นพ.ณัฐพงษ์ ฐานวิเศษ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor18@doctor18.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor19', 'name' => 'นพ.ณัฐพงษ์ นันกลาง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor19@doctor19.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor20', 'name' => 'นพ.โตณณาการ ขุนโหร', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor20@doctor20.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor21', 'name' => 'นพ.ธนโชติ กิจมีรัศมีโยธิน', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor21@doctor21.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor22', 'name' => 'นพ.ธนพงษ์ สื่อสัตรัตน์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor22@doctor22.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor23', 'name' => 'นพ.ธนะพล จีระวัฒนสุข', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor23@doctor23.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor24', 'name' => 'นพ.ธนิศศักดิ์ ทวีโคตร', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor24@doctor24.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor25', 'name' => 'นพ.ธิติ พิริยาพิทักษ์ภรณ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor25@doctor25.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor26', 'name' => 'นพ.ธิปก เวียงพล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor26@doctor26.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor27', 'name' => 'นพ.ธีรภัทร ชาติละออง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor27@doctor27.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor28', 'name' => 'นพ.ปกครอง ลิมป์วรรณธะ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor28@doctor28.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor29', 'name' => 'นพ.ปฎิพัทธ์ ศิริอุดมสิน', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor29@doctor29.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor30', 'name' => 'นพ.ประมุข ผลสมบูรณ์สุข', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor30@doctor30.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor31', 'name' => 'นพ.ปิ่นพงศ์ เลยยุทธ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor31@doctor31.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor32', 'name' => 'นพ.พยุงศักดิ์ สุจิตวัฒนศักดิ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor32@doctor32.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor33', 'name' => 'นพ.พัษดี น่าชม', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor33@doctor33.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor34', 'name' => 'นพ.พิสุทธิ์ นิพนธ์รัตนา', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor34@doctor34.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor35', 'name' => 'นพ.พีรพัฒน์ แมนเมือง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor35@doctor35.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor36', 'name' => 'นพ.ภควัต ชีวกมล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor36@doctor36.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor37', 'name' => 'นพ.ภัทรภูมิ ประจงสุข', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor37@doctor37.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor38', 'name' => 'นพ.ภาณุกร แพถนอม', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor38@doctor38.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor39', 'name' => 'นพ.ภูมิ ธำรงค์เทพพิทักษ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor39@doctor39.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor40', 'name' => 'นพ.เมธี บุญพิมพ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor40@doctor40.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor41', 'name' => 'นพ.เมธี บุญพิมพ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor41@doctor41.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor42', 'name' => 'นพ.ยุทธชัย ผันแกน', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor42@doctor42.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor43', 'name' => 'นพ.ระพีพัฒน์ คำมนตรี', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor43@doctor43.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor44', 'name' => 'นพ.โรจกร ลือมงคล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor44@doctor44.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor45', 'name' => 'นพ.โรจนกาล พานดวงแก้ว', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor45@doctor45.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor46', 'name' => 'นพ.วัชร สุฐิติวนิช', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor46@doctor46.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor47', 'name' => 'นพ.วัชรากร เลิศด้วยลาภ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor47@doctor47.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor48', 'name' => 'นพ.วิชยุตม์ วิศรุตเวศม์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor48@doctor48.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor49', 'name' => 'นพ.วิชัย ศิริปัญญาชัยพาณิช', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor49@doctor49.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor50', 'name' => 'นพ.วิสาร ศศิวิบูลย์วงศ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor50@doctor50.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor51', 'name' => 'นพ.ศรัณยู เทพจั้ง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor51@doctor51.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor52', 'name' => 'นพ.ศรีปกรณ์ อ่อนละม้าย', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor52@doctor52.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor53', 'name' => 'นพ.ศุภชัย ชัยบุตร', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor53@doctor53.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor54', 'name' => 'นพ.สกล ด่านภักดี', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor54@doctor54.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor55', 'name' => 'นพ.สรศักดิ์ ดอนเตาเหล็ก', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor55@doctor55.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor56', 'name' => 'นพ.สัจจะ ตติยานุพันธ์วงศ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor56@doctor56.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor57', 'name' => 'นพ.สาธิต ก้านทอง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor57@doctor57.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor58', 'name' => 'นพ.สิทธิ ชัยบุตร', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor58@doctor58.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor59', 'name' => 'นพ.สิวะยศ ดีเทศน์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor59@doctor59.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor60', 'name' => 'นพ.สุกิจ พรหมรับ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor60@doctor60.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor61', 'name' => 'นพ.สุรชัย อาชีวกุลมาศ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor61@doctor61.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor62', 'name' => 'นพ.สุวิทย์ ใหมเจริญ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor62@doctor62.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor63', 'name' => 'นพ.อนวัช วรรธนะมณีกุล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor63@doctor63.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor64', 'name' => 'นพ.อภิรักษ์ ปุสวิโร', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor64@doctor64.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor65', 'name' => 'นพ.อภิสิทธิ์ ทองงาม', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor65@doctor65.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor66', 'name' => 'นพ.อรรถวุฒิ เพชรสุริยวงศ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor66@doctor66.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor67', 'name' => 'นพ.อังกูร บุญโนนแต้', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor67@doctor67.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor68', 'name' => 'นพ.อาชัญ เจษฎัพัฒนานนท์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor68@doctor68.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor69', 'name' => 'นพ.อาทิตย์ ประทุมถิ่น', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor69@doctor69.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor70', 'name' => 'นพ.อำนาจ สุขทั่วญาติ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor70@doctor70.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor71', 'name' => 'นพ.อำพน พรงาม', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor71@doctor71.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor72', 'name' => 'นพ.อิสระ นราภิรมย์สุข', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor72@doctor72.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor73', 'name' => 'นพ.อุดมโชค อินทรโชติ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor73@doctor73.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor74', 'name' => 'นพ.เอกภพ นันทวงศ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor74@doctor74.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor75', 'name' => 'นพ.บุญญฤทธิ์ ภิรมย์กิจ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor75@doctor75.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor76', 'name' => 'นพ.ตุลภัทร บุบผัน', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor76@doctor76.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor77', 'name' => 'พญ.เบญจา อุดมลาภสกุล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor77@doctor77.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor78', 'name' => 'พญ.กาญจนา โม้ทอง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor78@doctor78.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor79', 'name' => 'พญ.กนกกร นวมะชิติ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor79@doctor79.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor80', 'name' => 'พญ.กนกกร ลาภไพศาล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor80@doctor80.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor81', 'name' => 'พญ.กนกทิพย์ อัครชัยยันต์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor81@doctor81.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor82', 'name' => 'พญ.กิตติมา คนชาญ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor82@doctor82.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor83', 'name' => 'พญ.จงกล คลังสมบัติ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor83@doctor83.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor84', 'name' => 'พญ.จิตติมา ปูชิตเสถียร', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor84@doctor84.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor85', 'name' => 'พญ.จิตมณี ปะตังถาโต', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor85@doctor85.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor86', 'name' => 'พญ.จิราภา อรุณปรีย์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor86@doctor86.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor87', 'name' => 'พญ.จุฑาทิพย์ พฤฒิจิระวงศ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor87@doctor87.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor88', 'name' => 'พญ.จุฑาทิพย์ อุดมทรัพย์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor88@doctor88.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor89', 'name' => 'พญ.ชมนาด ศิริรัตน์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor89@doctor89.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor90', 'name' => 'พญ.ชลธิชา จิตเอื้อโอภาส', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor90@doctor90.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor91', 'name' => 'พญ.ณปภัช ไชยมงคล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor91@doctor91.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor92', 'name' => 'พญ.ณัฐวรรณ สวงโท', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor92@doctor92.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor93', 'name' => 'พญ.ดิษยา คูณสิริไพบูลย์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor93@doctor93.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor94', 'name' => 'พญ.ทิตยา วิชัยแสง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor94@doctor94.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor95', 'name' => 'พญ.ธัชทร ทองเจริญ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor95@doctor95.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor96', 'name' => 'พญ.ธัญชนก เอื้อจิรกาล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor96@doctor96.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor97', 'name' => 'พญ.ธาริณี ศิริธนาศาสตร์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor97@doctor97.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor98', 'name' => 'พญ.ธาริณี ศิริธนาศาสตร์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor98@doctor98.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor99', 'name' => 'พญ.นลินพร ใต้ชัยภูมิ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor99@doctor99.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor100', 'name' => 'พญ.นันท์ชนก คุ้มหมู่', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor100@doctor100.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor101', 'name' => 'พญ.นันทวรรณ ดวงภมร', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor101@doctor101.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor102', 'name' => 'พญ.น้ำผึ้ง นันทวงศ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor102@doctor102.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor103', 'name' => 'พญ.บรรจง ครอบบัวบาน', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor103@doctor103.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor104', 'name' => 'พญ.บุณฑริกา อาจนาเสียว', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor104@doctor104.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor105', 'name' => 'พญ.บุปผารัตน์ อ่อนชมจันทร์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor105@doctor105.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor106', 'name' => 'พญ.ปภาวี กุลพรหม', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor106@doctor106.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor107', 'name' => 'พญ.ปรางทิพย์ คงสตรี', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor107@doctor107.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor108', 'name' => 'พญ.ปวีณา กาละดี', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor108@doctor108.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor109', 'name' => 'พญ.ปิยาภรณ์ อ่อนละม้าย', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor109@doctor109.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor110', 'name' => 'พญ.พนารัตน์ เพียงปราชญ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor110@doctor110.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor111', 'name' => 'พญ.พรประภา เชี่ยวขจร', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor111@doctor111.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor112', 'name' => 'พญ.พลอยไพลิน ลิ้มสุวัฒน์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor112@doctor112.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor113', 'name' => 'พญ.พิมพ์นรา ชนูดหอม', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor113@doctor113.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor114', 'name' => 'พญ.เพ็ญนภา วงษ์สีชา', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor114@doctor114.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor115', 'name' => 'พญ.ฟาริดา เจียรชัยกุล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor115@doctor115.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor116', 'name' => 'พญ.ภคอร ศุภมงคล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor116@doctor116.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor117', 'name' => 'พญ.ภริตา ศิริอนันต์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor117@doctor117.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor118', 'name' => 'พญ.ภัคพิชา ควรคำนวน', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor118@doctor118.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor119', 'name' => 'พญ.ภิญญดา วงศ์ใหญ่', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor119@doctor119.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor120', 'name' => 'พญ.มณีรัตณ์ ทิวทอง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor120@doctor120.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor121', 'name' => 'พญ.มรกต ภัทรพงศ์สินธุ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor121@doctor121.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor122', 'name' => 'พญ.รติกร สิทธิวงศ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor122@doctor122.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor123', 'name' => 'พญ.เรืองศรี ชัยวิรัตนะ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor123@doctor123.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor124', 'name' => 'พญ.วชิรญาณ์ พลแก้ง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor124@doctor124.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor125', 'name' => 'พญ.วรรณวิไล เลิศไพศาลกุล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor125@doctor125.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor126', 'name' => 'พญ.วริษา เจริญวัฒน์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor126@doctor126.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor127', 'name' => 'พญ.วัลยาณี เนื่องโพธิ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor127@doctor127.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor128', 'name' => 'พญ.วาทินี วิภูภิญโญ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor128@doctor128.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor129', 'name' => 'พญ.วารุณี สินธุพันธุ์ประทุม', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor129@doctor129.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor130', 'name' => 'พญ.วิชุนันท์ กันชัย', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor130@doctor130.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor131', 'name' => 'พญ.วินิธา ลักษณากร', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor131@doctor131.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor132', 'name' => 'พญ.วิริญญา ลิมป์สดใส', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor132@doctor132.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor133', 'name' => 'พญ.ศศินิภา ปิ่นทอง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor133@doctor133.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor134', 'name' => 'พญ.ศศินิภา จันทร์แสง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor134@doctor134.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor135', 'name' => 'พญ.ศิดาพร ศรีโรจนกุล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor135@doctor135.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor136', 'name' => 'พญ.ศิโรรัตน์ วราอัศวปติ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor136@doctor136.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor137', 'name' => 'พญ.ศุภาพิชญ์ ลิ้มชูพรวิกุล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor137@doctor137.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor138', 'name' => 'พญ.สมฤดี ผดุงพล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor138@doctor138.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor139', 'name' => 'พญ.สวรส แสงชโยสวัสดิ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor139@doctor139.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor140', 'name' => 'พญ.สุธาทิพย์ วัฒนะพนาลัย', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor140@doctor140.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor141', 'name' => 'พญ.สุพรรณิการ์ ยานกาย', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor141@doctor141.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor142', 'name' => 'พญ.สุภานัน สื่อสัมฤทธิ์', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor142@doctor142.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor143', 'name' => 'พญ.สุภาวดี ภัทรสัจจธรรม', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor143@doctor143.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor144', 'name' => 'พญ.สุมนมาลย์ ต่อสกุล', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor144@doctor144.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor145', 'name' => 'พญ.สุมิตรา จันทร์เพ็ง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor145@doctor145.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor146', 'name' => 'พญ.สุวนันท์ มีศรี', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor146@doctor146.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor147', 'name' => 'พญ.อรอนงค์ คิดบรรจง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor147@doctor147.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor148', 'name' => 'พญ.อัจฉราชนก พันธ์ทอง', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor148@doctor148.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor149', 'name' => 'พญ.อารียา ศรีไตรภพ', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor149@doctor149.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'doctor150', 'name' => 'พญ.อุษณีย์  เกียรติก้องชูชัย', 'is_admin' => 3, 'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'email' => 'doctor150@doctor150.com', 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward01',
                'name' => 'ตึกสงฆ์อาพาธ',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward01@ward01.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward02',
                'name' => 'หอผู้ป่วยเด็กเล็ก',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward02@ward02.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward03',
                'name' => 'หอผู้ป่วยเด็กโต',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward03@ward03.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward04',
                'name' => 'หอผู้ป่วยทากรกแรกเกิด',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward04@ward04.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward05',
                'name' => 'ศัลยกรรมหญิง',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward05@ward05.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward06',
                'name' => 'ศัลยกรรมชาย 1',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward06@ward06.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward07',
                'name' => 'ศัลยกรรมชาย 2',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward0@7ward07.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward08',
                'name' => 'ศัลยกรรมกระดูก ชาย',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward08@ward08.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward09',
                'name' => 'อายุรกรรมหญิง 1',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward09@ward09.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward10',
                'name' => 'อายุรกรรมหญิง 2',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward10@ward10.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward11',
                'name' => 'อายุรกรรมชาย 1',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward11@ward11.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward12',
                'name' => 'กึ่งวิกฤติอายุรกรรม',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward12@ward12.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward13',
                'name' => 'อายุรกรรมชาย 2',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward13@ward13.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward14',
                'name' => 'ห้องคลอด',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward14@ward14.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward15',
                'name' => 'หลังคลอด',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward15@ward15.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward16',
                'name' => 'นรีเวช',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward16@ward16.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward17',
                'name' => 'จักษุ',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward17@ward17.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward18',
                'name' => 'โสต ศอ นาสิก',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward18@ward18.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward19',
                'name' => 'MICU',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward19@ward19.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward20',
                'name' => 'พิเศษศัลยกรรม 5',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward20@ward20.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward21',
                'name' => 'พิเศษศัลยกรรม 7',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward21@ward21.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward22',
                'name' => 'พิเศษฉก. 7',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward22@ward22.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward23',
                'name' => 'พิเศษฉก. 8',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward23@ward23.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward24',
                'name' => 'ER',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward24@ward24.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward25',
                'name' => 'NICU',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward25@ward25.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward26',
                'name' => 'พิเศษฉก. 9',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward26@ward26.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward27',
                'name' => 'SICU',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward27@ward27.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward28',
                'name' => 'เคมีบำบัด',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward28@ward28.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward29',
                'name' => 'พิเศษศัลยกรรม 8',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward29@ward29.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward30',
                'name' => 'พิเศษศัลยกรรม 6',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward30@ward30.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward31',
                'name' => 'Stoke Unit',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward31@ward31.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward32',
                'name' => 'PICU',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward32@ward32.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward33',
                'name' => 'พิเศษสูติกรรมชั้น 9',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward33@ward33.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward34',
                'name' => 'พิเศษสูติกรรมชั้น 10',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward34@ward34.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward35',
                'name' => 'MICU2',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward35@ward35.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward36',
                'name' => 'ศัลยกรรมกระดูกหญิง',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward36@ward36.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward40',
                'name' => 'TICU',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward40@ward40.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward67',
                'name' => 'จิตเวชชาย',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward67@ward67.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward68',
                'name' => 'จิตเวชหญิง',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward68@ward68.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward80',
                'name' => 'Neurosugery ICU',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward80@ward80.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward81',
                'name' => 'MICU3',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward81@ward81.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward82',
                'name' => 'CCU WARD',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward82@ward82.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward83',
                'name' => 'Cath Lab',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward83@ward83.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward84',
                'name' => 'CCU & Cardio ward',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward84@ward84.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward85',
                'name' => 'INR',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward85@ward85.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward86',
                'name' => 'Home ward',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward86@ward86.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward87',
                'name' => 'Cardio Ward',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward87@ward87.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'ward66',
                'name' => 'อายุรกรรมรวม',
                'is_admin' => 4,
                'password' => '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy',
                'email' => 'ward66@ward66.com',
            ]
            // เพิ่มข้อมูลอื่น ๆ ตามลำดับ
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
