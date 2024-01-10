<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include jQuery UI Datepicker -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- Include jQuery DateTimePicker -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/build/jquery.datetimepicker.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/build/jquery.datetimepicker.full.min.js"></script>

<!-- Initialize jQuery DateTimePicker -->
<script>
  $( function() {
    $("#datetimepicker").datetimepicker({
      format: 'Y-m-d H:i',     // รูปแบบวันที่และเวลา
    });
  });
</script>




    @php
    use Carbon\Carbon;
    /* Carbon::now();  */
    @endphp
@extends('layouts.register')
@section('content')
    <!-- Page Heading -->
    <!-- แสดงข้อมูลอื่น ๆ ตามต้องการ -->
    <div class="row mb-3">
        <div class="col-md">
            <button class="btn btn-primary" onclick="goBack()">ย้อนกลับ</button>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-5 shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header">ลงทะเบียนห้องพิเศษ {{ $roomselect->room_name }}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl mb-3">
                            <img class="rounded mx-auto d-block card-img-top" src="{{ $roomselect->room_image }}">
                        </div>
                        <div class="col-xl mb-3">
                            @foreach ($roomsubtype as $room)
                                <p>- {{ $room->room_subtype_name }}</p>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xl-12">
                            <form action="{{route('jobrequest')}}" method="post">
                                @csrf
                                <input type="hidden" name="preroom_id" value="{{$roomselect->id}}">
                                <div class="row mb-3">
                                    <div class="col-xl">
                                        <label for="">วัน</label>
                                        <input class="form-control" type="text" name="job_date" id=""
                                            value="{{Carbon::now()->format('Y-m-d')}}" placeholder="วันที่" readonly required>
                                    </div>
                                    <div class="col-xl">
                                        <label for="">เวลา</label>
                                        <input class="form-control" type="text" name="job_time" id=""
                                            value="{{Carbon::now()->format('H:i')}}" placeholder="เวลา" readonly required>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xl">
                                        <label>เลขบัตรประจำตัวประชาชน</label>
                                            เลขประจำตัวโรงพยาบาล</label>
                                        <input type="text" id="cid" class="form-control addnumm" name="cid"
                                            placeholder="กรอกเลขบัตรประชาชน 13 หลัก" maxlength="17" required required>
                                    </div>
                                    <div class="col-xl">
                                        <label>ชื่อ - สกุล (ผู้ป่วย)</label>
                                        <input type="text" class="form-control" id="name" name="patient_name"
                                            style="background-color: white !important;" value=""
                                             required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xl-12">
                                        <label for="">สถานะผู้ป่วย</label>
                                        <select class="custom-select w-100" id="statuspatient" name="job_pa_status" required>
                                            <option value="1">----- กรุณาเลือก -----</option>
                                            <option value="2">นัดนอนล่วงหน้า</option>
                                            <option value="3">กำลังรักษาตัว</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xl">
                                        <label for="">ผู้จอง * (โปรดระบุคำขึ้นต้น ชื่อ-สกุล)</label>
                                        <input class="form-control" type="text" name="job_re_name" id="subname"
                                            placeholder="ชื่อผู้จอง" required>
                                    </div>
                                    <div class="col-xl">
                                        <label for="">ความเกี่ยวข้อง</label>
                                        <select class="custom-select w-100" id="substatus" name="job_re_re" required>
                                            <option value="1">----- กรุณาเลือก -----</option>
                                            <option value="2">ผู้ป่วย</option>
                                            <option value="3">ญาติผู้ป่วย</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xl">
                                        <label for="">เบอร์โทรศัพท์ *
                                            (สำหรับติดต่อกลับเพื่อยืนยันสิทธิ์การจอง)</label>
                                        <input class="form-control" type="text" name="job_re_tel" id="subtell"
                                            placeholder="เบอร์โทรศัพท์" required>
                                    </div>
                                    <div class="col-xl">
                                        <label for="">วันที่จะเข้ารักษา * (กรณีที่ผู้ป่วยมีนัดเข้ารับการผ่าตัด
                                            คลอดบุตร เป็นต้น)</label>
                                        <input type="text" class="form-control" id="datetimepicker" name="job_re_date" readonly required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <input class="btn btn-primary w-100" type="submit" value="จองห้อง" name="submit" readonly>
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