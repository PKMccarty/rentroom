@extends('layouts.screen')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js">
    </script>
    <!-- Page Heading -->
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-header">ตรวจสอบสถานะการจอง</div>
        <div class="card-body">
            <form action="{{ route('showlist') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6 text-center mb-3">
                        <input class="form-control" type="text" name="cid" id="idNumber"
                            placeholder="กรุณากรอกเลขบัตรประชาชน 13 หลัก">
                    </div>
                    <div class="col-sm-2 text-start">
                        <input id="searchButton" class="btn btn-primary w-100" type="submit" name="buttonsubmit"
                            value="ค้นหา">
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if (isset($job))
        @if (!empty($job))
            <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="font-size:14px;">
                {{-- <div class="card-header">{{ $job->first()->job_re_name }}</div> --}}
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>อาคาร</th>
                                <th>ห้อง/ชั้น</th>
                                <th>เลขบัตรประจำตัวประชาชนผู้ป่วย/Passport</th>
                                <th>ชื่อผู้ป่วย</th>
                                <th>วันที่ร้องของ</th>
                                <th>เบอร์โทรติดต่อ</th>
                                <th>สถานะผู้ป่วย</th>
                                <th>สถานะการจอง</th>
                                <th>รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                @foreach ($job as $key => $rows)

                                <tr> <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rows->room_name }}</td>
                                    <td>{{ $rows->room_subtype_name }}</td>
                                    <td>{{ $rows->cid }}</td>
                                    <td>{{ $rows->patient_name }}</td>
                                    <td>{{ $rows->job_re_date }}</td>
                                    <td>{{ $rows->job_re_tel }}</td>
                                    <td>
                                        @if ($rows->job_pa_status == '2')
                                            <p>นัดนอนล่วงหน้า</p>
                                        @elseif($rows->job_pa_status== '3')
                                            <p>กำลังรักษาตัว</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($rows->status_id == '1')
                                            <p class="{{ $rows->status_color }}">{{ $rows->status_name }}</p>
                                        @elseif($rows->job_pa_status== '2')
                                        <p class="{{ $rows->status_color }}">{{ $rows->status_name }}</p>
                                        @endif
                                    </td>
                                    <td><a href="{{ route('showjob', ['id' => base64_encode($rows->rentid)]) }}">รายละเอียด</a></td>
                                </tr>
                        
                @endforeach
            </tbody>
        </table>
            </div>
            </div>
        @endif
    @endif
    @if (Session::has('error'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'error',
                    title: '{{ Session::get('error') }}',
                    text: 'กรุณาลองใหม่'
                })
               
            });
        </script>
        @php
            Session::forget('error');
        @endphp
    @endif
    @if (Session::has('success'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'จองเสร็จสิ้น',
                    text: 'ท่านได้จองห้องพิเศษเรียบร้อยแล้ว'
                }).then(function() {
                        window.location = '/';
                    });
                    
            });
        </script>
        @php
        session()->forget('success')
    @endphp
    @endif
@endsection
