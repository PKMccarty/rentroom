<?php
    require_once 'function/datetime_now.php';
?>
@extends('layouts.screen')
@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-5">
                <div class="card-header">ลงทะเบียนการจอง
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="">วัน</label>
                                        <input class="form-control" type="text" name="" id="" value="<?=$formattedDate?>"
                                            placeholder="วันที่">
                                    </div>
                                    <div class="col">
                                        <label for="">เวลา</label>
                                        <input class="form-control" type="text" name="" id="" value="<?=$formattedTime?>"
                                            placeholder="เวลา">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="">HN</label><br>
                                        <label for="" style="color:red">*หากไม่ทราบ ให้ใส่รหัสประจำตัวประชาชน ในช่อง เลขบัตรประจำตัวประชาชน</label>
                                        <input class="form-control" type="text" name="HN" id=""
                                            placeholder="HN : 000000000">
                                    </div>
                                    <div class="col">
                                        <label for="">รหัสประจำตัวประชาชน</label><br>
                                        <label for="" style="color:red;">*หากไม่ทราบ ให้ใส่เลข HN ในช่อง HN เลขประจำตัวโรงพยาบาล</label>
                                        <input class="form-control" type="text" name="cid" id=""
                                            placeholder="รหัสประจำตัวประชาชน 13 หลัก">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="">ชื่อ-สกุล</label>
                                        <input class="form-control" type="text" name="patient_name" id="patient_name"
                                            placeholder="ชื่อ-สกุล ผู้ป่วย">
                                    </div>
                                    <div class="col">
                                        <label for="">อายุ</label>
                                        <input class="form-control" type="text" name="patient_age" id="patient_age"
                                            placeholder="อายุ ผู้ป่วย">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xl-12">
                                        <label for="">สถานะผู้ป่วย</label>
                                        <select class="custom-select w-100" id="statuspatient" name="statuspatient">
                                            <option value="1">----- กรุณาเลิอก -----</option>
                                            <option value="2">นัดนอนก่อนล่วงหน้า</option>
                                            <option value="3">กำลังรักษาตัว</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="">ผู้จอง * (โปรดระบุคำขึ้นต้น ชื่อ-สกุล)</label>
                                        <input class="form-control" type="text" name="subname" id="subname"
                                            placeholder="วันที่">
                                    </div>
                                    <div class="col">
                                        <label for="">ความเกี่ยวข้อง</label>
                                        <select class="custom-select w-100" id="substatus" name="substatus">
                                            <option value="1">----- กรุณาเลิอก -----</option>
                                            <option value="2">ผู้ป่วย</option>
                                            <option value="3">ญาติผู้ป่วย</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="">เบอร์โทรศัพท์ * (สำหรับติดต่อกลับเพื่อยืนยันสิทธิ์การจอง)</label>
                                        <input class="form-control" type="text" name="subtell" id="subtell"
                                            placeholder="เบอร์โทรศัพท์">
                                    </div>
                                    <div class="col">
                                        <label for="">วันที่จะเข้ารักษา * (กรณีที่ผู้ป่วยมีนัดเข้ารับการผ่าตัด คลอดบุตร เป็นต้น)</label>
                                        <input class="form-control" type="text" name="subvisit" id="subvisit"
                                            placeholder="วันที่จะเข้ารักษา">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
