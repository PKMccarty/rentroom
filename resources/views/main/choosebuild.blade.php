<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<style>
    #choose p {
        color: #858796;
        text-decoration: none;
    }
    
    #choose p:hover,#choose a:hover,#choose p:focus,#choose a:focus{
        color: #858796;
        text-decoration: none !important;
    }
</style>
@extends('layouts.screen')
@section('content')
<div class="row mb-3">
    <div class="col-md">
        <button class="btn btn-primary" onclick="goBack()">ย้อนกลับ</button>
    </div>
</div>
    <!-- Page Heading -->
    <div id="choose">
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-5 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-header">ลงทะเบียนการจอง</div>
                    <div class="card-body mx-auto">
                        <div class="row">
                            <a href="{{ route('choosebuild_process', ['room_type' => base64_encode('1')]) }}">
                                <div class="col mb-3 alig-middle d-flex justify-content-center">
                                    <div class="card" style="width: 20rem;">
                                        <img src="{{ asset('img/rent/room/mother.png') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body text-center"> <!-- Add text-center class here -->
                                            <p style="font-size:16.5px;" class="card-title">ห้องพิเศษ ตึกแม่และเด็ก 10 ชั้น
                                            </p>
                                            <a href="{{ route('choosebuild_process', ['room_type' => base64_encode('1')]) }}" class="btn btn-primary">จองห้อง</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('choosebuild_process', ['room_type' => base64_encode('2')]) }}">
                                <div class="col mb-3 alig-middle d-flex justify-content-center">
                                    <div class="card" style="width: 20rem;">
                                        <img src="{{ asset('img/rent/room/med.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center"> <!-- Add text-center class here -->
                                            <p style="font-size:16.5px;" class="card-title">ห้องพิเศษ ตึกเฉลิมพระเกียรติ 10
                                                ชั้น
                                            </p>
                                            <a href="{{ route('choosebuild_process', ['room_type' => base64_encode('2')]) }}" class="btn btn-primary">จองห้อง</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('choosebuild_process', ['room_type' => base64_encode('3')]) }}">
                                <div class="col mb-3 alig-middle d-flex justify-content-center">
                                    <div class="card" style="width: 20rem;">
                                        <img src="{{ asset('img/rent/room/surgery.png') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body text-center"> <!-- Add text-center class here -->
                                            <p style="font-size:16.5px;" class="card-title">ห้องพิเศษ ตึกศัลยกรรม 8 ชั้น</p>
                                            <a href="{{ route('choosebuild_process', ['room_type' => base64_encode('3')]) }}" class="btn btn-primary">จองห้อง</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
