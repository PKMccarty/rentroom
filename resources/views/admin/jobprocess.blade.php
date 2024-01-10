@extends('layouts.screen')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@php
use Carbon\Carbon;
/* Carbon::now();  */
@endphp
@section('content')
    <div class="row">
        <div class="col">
            <a href="{{ url('admin/tableview') }}" class="btn btn-primary btn-sm">ย้อนกลับ</a>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col">
            <div class="card">
                <div class="card-header mb-4 py-3 border-left-primary">
                    อนุมัติการจอง
                </div>
                <div class="card-body" style="font-size:12px;">
                    <form method="post" action="{{route('processsave')}}">
                        @csrf
                        <input type="hidden" name="jobid" id="jobid" value="{{$job->jobid}}">
                        <input type="hidden" name="status" id="status" value="2">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="roomtype">อาคาร:</label>
                                    <select class="form-control" id="roomtype" name="roomtype">
                                        <option value="">กรุณาเลือกอาคาร</option>
                                        @foreach ($roomtypes as $rows)
                                            <option value="{{ $rows->id }}">{{ $rows->room_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="subroomtype">ห้อง:</label>
                                    <select class="form-control" id="subroomtype" name="subroomtype">
                                        <option value="">กรุณาเลือกห้อง</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       {{--  <div class="row">
                         <div class="col-md">
                                <div class="form-group">
                                    <label>แพทย์</label>
                                    <input class="form-control" type="text" name="doctor_name">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="status">อนุมัติการจอง</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="">กรุณาเลือก</option>
                                        <option value="2">อนุมัติ</option>
                                        <option value="3">ไม่อนุมัติ</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row">
                            <div class="col-md">
                                <p>ข้อมูลเบื้องต้น</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <p>รหัสบัตรประจำตัว หรือ Passport</p>
                                <h5>{{$job->cid}}</h5>
                            </div>
                            <div class="col-md">
                                <p>สถานะผู้ป่วย</p>
                                @if ($job->job_pa_status=='1')
                                    <h5>{{__('นัดนอนล่วงหน้า')}}></h5>
                                @else
                                <h5>{{__('กำลังรักษาตัว')}}</h5>
                                @endif
                            </div>
                            <div class="col-md">
                                <p>ชื่อผู้ป่วย</p>
                                <h5>{{$job->patient_name}}</h5>
                            </div>
                            <div class="col-md">
                                <p>มีความประสงค์ขอห้องพิเศษอาคาร</p>
                                <h5>{{$preroom->room_name}}</h5>
                            </div>
                            <div class="col-md">
                                @php
                                    $datetime2 = Carbon::parse($rows->job_date.' '.$rows->job_time);
                                    $formattedDateTime2 = $datetime2->addYears(543)->format('d/m/Y H:i');
                                    @endphp
                                <p>วันที่ร้องขอ</p>
                                <h5>{{$formattedDateTime2}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                @php
                                    $datetime = Carbon::parse($rows->job_re_date);
                                    $formattedDateTime = $datetime->addYears(543)->format('d/m/Y H:i');
                                    @endphp
                                <p>วันที่จอง</p>
                                <h5>{{$formattedDateTime}}</h5>
                            </div>
                            
                            <div class="col-md">
                                <p>ชื่อผู้จอง</p>
                                <h5>{{$job->job_re_name}}</h5>
                            </div>
                            <div class="col-md">
                                <p>เบอร์โทรศัพท์</p>
                                <h5>{{$job->job_re_tel}}</h5>
                            </div>
                            <div class="col-md">
                                <p>ความสัมพันธ์กับผู้ป่วย</p>
                                @if ($job->job_re_re=='1')
                                <h5>{{__('ผู้ป่วย')}}></h5>
                            @else
                            <h5>{{__('ญาติผู้ป่วย')}}</h5>
                            @endif
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-lg w-50">บันทึก</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <script src="{{ asset('js/demo/dropdownroomtype.js') }}"></script>
            </div>
        </div>
    </div>
@endsection
