@php
    use Carbon\Carbon;
@endphp

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include jQuery UI Datepicker -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Include jQuery DateTimePicker -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/build/jquery.datetimepicker.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/build/jquery.datetimepicker.full.min.js">
    </script>
   
    <script>
        $(function() {
            $("#datetimepicker").datetimepicker({
                format: 'Y-m-d H:i', // รูปแบบวันที่และเวลา
            });
        });
    </script>
    @if (session('error'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'error',
                    text: '{{ session('error') }}'
                });
            });
        </script>
    @endif


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
                <div class="card mb-5 shadow-lg mb-5 bg-white rounded">
                    <div class="card-header mb-4 py-3 border-left-primary">ลงทะเบียนห้องพิเศษ</div>
                    <div class="card-body">
                        {{-- <div class="row">
                        <div class="col-xl mb-3">
                            <img class="rounded mx-auto d-block img-fluid" src="{{ $roomselect->room_image }}" width="550">
                        </div>
                        <div class="col-xl mb-3">
                            @foreach ($roomsubtype as $room)
                                <p>- {{ $room->room_subtype_name }}</p>
                            @endforeach
                        </div>
                    </div> --}}
                        <div class="row">
                            <div class="col-xl-12">
                                <form action="{{ route('registerusersave') }}" method="post">
                                    @csrf
                                    {{-- <input type="hidden" name="preroom_id" value="{{$roomselect->id}}"> --}}
                                    <div class="row mb-3">
                                        <div class="col-md mt-3">
                                            {{-- <label for="">วัน</label> --}}
                                            <input class="form-control" type="hidden" name="job_date_time" id=""
                                                value="{{ Carbon::now() }}" placeholder="วันที่" readonly required>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md mt-3">
                                            <label>เลขบัตรประจำตัวประชาชน</label>
                                            เลขประจำตัวโรงพยาบาล</label>
                                            <input type="text" id="cid" class="form-control addnumm" name="cid"
                                                placeholder="กรอกเลขบัตรประชาชน 13 หลัก" maxlength="17" required>
                                        </div>
                                        <div class="col-md mt-3">
                                            <label>ชื่อ - สกุล (ผู้ป่วย)</label>
                                            <input type="text" class="form-control" id="name" name="patient_name"
                                                style="background-color: white !important;" value="" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        {{-- <div class="col-md mt-3">
                                            <label for="">สถานะผู้ป่วย</label>
                                            <select class="custom-select w-100" id="statuspatient" name="job_pa_status"
                                                required>
                                                <option value="1">----- กรุณาเลือก -----</option>
                                                @foreach ($statuspatient as $rowss)
                                                    <option value="{{ $rowss->id }}">{{ $rowss->statuspatients_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                        {{-- <div class="col-md mt-3">
                                            <label for="">แพทย์</label><br>
                                            <select class="custom-select w-100 doctor-name" id="doctorid" name="doctorid"
                                                required>
                                                <option value="1">----- กรุณาเลือก -----</option>
                                                @foreach ($listdoctor as $rows)
                                                    <option value="{{ $rows->id }}">{{ $rows->name }}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md mt-3">
                                            <label for="">ผู้จอง</label>
                                           
                                            <input class="form-control" type="text" name="job_rent_name" id="subname"
                                                placeholder="ชื่อผู้จอง" required>
                                        </div>
                                        <div class="col-md mt-3">
                                            <label for="">เบอร์โทรศัพท์</label>
                                            <input class="form-control" type="text" name="job_rent_tell" id="subtell"
                                                placeholder="เบอร์โทรศัพท์" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md mt-3">
                                            <label for="">ความสัมพันธ์</label>
                                            <select class="custom-select" name="job_rent_relation"
                                                required>
                                                <option value="1">----- กรุณาเลือก -----</option>
                                                <option value="2"> ผู้ป่วย </option>
                                                <option value="3"> ญาติผู้ป่วย </option>
                                            </select>
                                        </div>
                                        <div class="col-md mt-3">
                                            <label for="">วันที่จะเข้ารักษา</label>
                                            <input type="text" class="form-control" id="datetimepicker"
                                                name="job_re_date_time" readonly required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <input class="btn btn-primary w-100" type="submit" value="จองห้อง"
                                                name="submit" readonly required>
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