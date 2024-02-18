@php
    use Carbon\Carbon;
@endphp
@if (Auth::check())

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include jQuery UI Datepicker -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Include jQuery DateTimePicker -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/build/jquery.datetimepicker.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/build/jquery.datetimepicker.full.min.js">
    </script>
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
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
                                <form action="{{ route('jobrequest') }}" method="post">
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
                                                placeholder="กรอกเลขบัตรประชาชน 13 หลัก" maxlength="17" required required>
                                        </div>
                                        <div class="col-md mt-3">
                                            <label>ชื่อ - สกุล (ผู้ป่วย)</label>
                                            <input type="text" class="form-control" id="name" name="patient_name"
                                                style="background-color: white !important;"  required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md mt-3">
                                            <label for="">สถานะผู้ป่วย</label>
                                            <select class="custom-select w-100" id="statuspatient" name="job_pa_status" value="1" required>
                                                <option value="1">----- กรุณาเลือก -----</option>
                                                @foreach ($statuspatient as $rowss)
                                                    <option value="{{ $rowss->id }}">{{ $rowss->statuspatients_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md mt-3">
                                            <label for="">แพทย์</label><br>
                                            <select class="custom-select w-100 doctor-name" id="doctorid" name="doctorid" value="1" required>
                                                <option value="1">----- กรุณาเลือก -----</option>
                                                @foreach ($listdoctor as $rows)
                                                    <option value="{{ $rows->id }}">{{ $rows->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md mt-3">
                                            <label for="">ผู้จอง</label>
                                            <input class="form-control" type="hidden" name="ward_id" id="ward_id"
                                                value="{{ Auth::user()->id }}">
                                            <input class="form-control" type="text" name="job_re_name" id="subname"
                                                placeholder="ชื่อผู้จอง" value="{{ Auth::user()->name }}" required
                                                readonly>
                                        </div>
                                        <div class="col-md mt-3">
                                            <label for="">เบอร์โทรศัพท์ (IP phone)</label>
                                            <input class="form-control" type="text" name="job_re_tel" id="subtell"
                                                placeholder="เบอร์โทรศัพท์" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">

                                        <div class="col-md mt-3">
                                            <label for="">วันที่จะเข้ารักษา * (กรณีที่ผู้ป่วยมีนัดเข้ารับการผ่าตัด
                                                คลอดบุตร เป็นต้น)</label>
                                            <input type="text" class="form-control" id="datetimepicker"
                                                name="job_re_date_time" readonly required>
                                        </div>
                                        <div class="col-md mt-3"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h5 class="display6">แนวทางการ Admit หอผู้ป่วยพิเศษรพ.ชัยภูมิ</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <table class="table table-responsive-xl table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>Check All</td>
                                                        <td></td>
                                                        <td class="text-center">ไม่</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="text-center"><input type="radio" id="selectAllBtn" name="checkOption"></td>

                                                    </tr>
                                                    <tr>
                                                        <th>ปัจจัยเสี่ยง</th>
                                                        <th>ใช่</th>
                                                        <th>ไม่ใช่</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ผู้ป่วยเด็ก</td>
                                                        <td class="text-center"><input type="radio" id="row_1_yes" name="row1_option" value="0" required></td>
                                                        <td class="text-center"><input type="radio" id="row_1_no" name="row1_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Acute stroke ( onset. &lt; 3 days )</td>
                                                        <td class="text-center"><input type="radio" id="row_2_yes" name="row2_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_2_no" name="row2_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intracranial bleeding</td>
                                                        <td class="text-center"><input type="radio" id="row_3_yes" name="row3_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_3_no" name="row3_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Acute coronoary syndrome( STEMI / NSTEMI/UA)</td>
                                                        <td class="text-center"><input type="radio" id="row_4_yes" name="row4_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_4_no" name="row4_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hyperglycemic emergency(DKA/HHS)</td>
                                                        <td class="text-center"><input type="radio" id="row_5_yes" name="row5_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_5_no" name="row5_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Acute PE.</td>
                                                        <td class="text-center"><input type="radio" id="row_6_yes" name="row6_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_6_no" name="row6_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Acute arterial occlusion</td>
                                                        <td class="text-center"><input type="radio" id="row_7_yes" name="row7_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_7_no" name="row7_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>UGIB</td>
                                                        <td class="text-center"><input type="radio" id="row_8_yes" name="row8_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_8_no" name="row8_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>off ETT within 48 hr</td>
                                                        <td class="text-center"><input type="radio" id="row_9_yes" name="row9_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_9_no" name="row9_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Post partum hemorrhage ( NL &gt;= 500 ml, C/S &gt;= 1000 ml)
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_10_yes" name="row10_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_10_no" name="row10_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>fever in pregnant or post partum fever</td>
                                                        <td class="text-center"><input type="radio" id="row_11_yes" name="row11_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_11_no" name="row11_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pregnant with ( asthma, hyperthyroidism, CKD, Heart disease,
                                                            Epilepsy)</td>
                                                        <td class="text-center"><input type="radio" id="row_12_yes" name="row12_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_12_no" name="row12_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>high-risk pregnancy</td>
                                                        <td class="text-center"><input type="radio" id="row_13_yes" name="row13_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_13_no" name="row13_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>perioperative complication</td>
                                                        <td class="text-center"><input type="radio" id="row_14_yes" name="row14_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_14_no" name="row14_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>post-operative bleeding &gt; 1 L</td>
                                                        <td class="text-center"><input type="radio" id="row_15_yes" name="row15_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_15_no" name="row15_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>gynecologic malignancy</td>
                                                        <td class="text-center"><input type="radio" id="row_16_yes" name="row16_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_16_no" name="row16_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hemodynamic or respiration instability*</td>
                                                        <td class="text-center"><input type="radio" id="row_17_yes" name="row17_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_17_no" name="row17_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MEW score. &gt;= 4</td>
                                                        <td class="text-center"><input type="radio" id="row_18_yes" name="row18_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_18_no" name="row18_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>severe headache. PS &gt; 5</td>
                                                        <td class="text-center"><input type="radio" id="row_19_yes" name="row19_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_19_no" name="row19_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>severe abdominal pain PS &gt;5</td>
                                                        <td class="text-center"><input type="radio" id="row_20_yes" name="row20_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_20_no" name="row20_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>ต้องการ observe. Abdominal sign</td>
                                                        <td class="text-center"><input type="radio" id="row_21_yes" name="row21_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_21_no" name="row21_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>ต้องการ observe. N/S</td>
                                                        <td class="text-center"><input type="radio" id="row_22_yes" name="row22_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_22_no" name="row22_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>จําเป็นต้องใช้ HAD. ที่ต้อง closed monitor.#</td>
                                                        <td class="text-center"><input type="radio" id="row_23_yes" name="row23_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_23_no" name="row23_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>จําเป็นต้องทําหตัถการ กึ่งเร่งด่วน แล้วยังไม่ได้ทำ ได้แก่ LP.
                                                            pleural trapping. abdominal trapping. Bone marrow
                                                            study.</td>
                                                        <td class="text-center"><input type="radio" id="row_24_yes" name="row24_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_24_no" name="row24_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Na &lt; 120 mEq/L or &gt; 155 mEq/L</td>
                                                        <td class="text-center"><input type="radio" id="row_25_yes" name="row25_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_25_no" name="row25_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>K &gt;6 mEq/L or &lt; 2.5 mEq/L</td>
                                                        <td class="text-center"><input type="radio" id="row_26_yes" name="row26_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_26_no" name="row26_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hb &lt; 7gm/dL</td>
                                                        <td class="text-center"><input type="radio" id="row_27_yes" name="row27_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_27_no" name="row27_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>sepsis + lactate &gt;= 4 mmol/L</td>
                                                        <td class="text-center"><input type="radio" id="row_28_yes" name="row28_option" value="0" required>
                                                        </td>
                                                        <td class="text-center"><input type="radio" id="row_28_no" name="row28_option" value="1" required>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
        <script>
            document.addEventListener('DOMContentLoaded', function() {
              const radioButtons = document.querySelectorAll('input[type="radio"]');
              const selectAllBtn = document.getElementById('selectAllBtn');
        
              selectAllBtn.addEventListener('click', function() {
                // Toggle the checked state of all radio buttons
                radioButtons.forEach(function(radio) {
                  radio.checked = !radio.checked;
                });
              });
            });
          </script>
        <script>
            $(document).ready(function() {
                $('.doctor-name').select2();
            });
        </script>
    @endsection
@else
    <script>
        var routeUrl = "{{ route('home') }}";
        window.location.href = routeUrl;
    </script>
@endif
