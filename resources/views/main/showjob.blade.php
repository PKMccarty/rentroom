@extends('layouts.screen')
<style>
    label {
        color: black;
    }
</style>
@section('content')
<div class="row mb-3">
    <div class="col-md">
        <a class="btn btn-primary" href="{{route('checkstatus')}}">ย้อนกลับ</a>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header">สถานะการจองห้องพิเศษ</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            @if ($job->subid == 17)
                                <img class="card-img-top" src="/{{ $preroom->room_image }}" alt="">
                            @else
                                <img class="card-img-top" src="/img/rent/{{ $job->room_subtype_img }}" alt=""
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
                                        <label for="">สถานะผู้ป่วย</label>
                                        @if ($job->job_pa_status == '2')
                                            <p>นัดนอนล่วงหน้า</p>
                                        @elseif($job->job_pa_status == '3')
                                            <p>กำลังรักษาตัว</p>
                                        @endif
                                    </div>
                                    <div class="col">
                                        <label for="">วันที่จอง</label>
                                        <p>{{ $job->job_re_date }}</p>
                                    </div>
                                    <div class="col">
                                        <label for="">ผู้จอง</label>
                                        <p>{{ $job->job_re_name }}</p>
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
