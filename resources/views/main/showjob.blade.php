@extends('layouts.screen')
<style>
    label {
        color: black;
    }
</style>
@php
    use Carbon\Carbon;

@endphp
@section('content')
<div class="row mb-3">
    <div class="col-md">
        <a class="btn btn-primary" href="{{route('checkstatus')}}">ย้อนกลับ</a>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg mb-5 bg-white rounded">
                <div class="card-header mb-4 py-3 border-left-primary">สถานะการจองห้องพิเศษ</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            @if ($job->room_type == 15)
                                <img class="img-fluid" src="/img/rent/cph.png" alt="" width="550">
                            @else
                                <img class="img-fluid" src="/img/rent/{{ $job->room_subtype_img }}" alt=""
                                srcset="">
                            @endif
                            
                        </div>
                        <div class="col-md-6">
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="col">
                                        <label for="">อาคารที่จอง</label>
                                        <p>{{ $job->room_name }}</p>
                                    </div>
                                    <div class="col">
                                        <label for="">ห้องที่จอง</label>
                                        <p>{{ $job->room_subtype_name }}</p>
                                    </div>
                                    <div class="col">
                                        <label for="">ชื่อ - สกุล</label>
                                            <p>{{$job->patient_name}}</p>
                                    </div>
                                    <div class="col">
                                        <label for="">วัน อนุมัติห้องพิเศษ</label>
                                        @php
                                            $ddate = Carbon::parse($job->job_re_date_time);
                                        @endphp
                                        <p>{{ $ddate->addYears(543)->format('d-m-Y H:i').' น.' }}</p>
                                    </div>
                                    <div class="col">
                                        <label for="">สถานะการจอง</label>
                                        <p class="{{ $job->status_color }}">{{ $job->status_name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

