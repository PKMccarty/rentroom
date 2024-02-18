<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@php
    use Carbon\Carbon;
@endphp
@if (Auth::user()->is_admin == '3')
    @if (Session::has('success'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    text: '{{ Session::get('success') }}',
                    showConfirmButton: false,
                    timer: 1500
                });

            });
        </script>
        @php
            Session::forget('success');
        @endphp
    @endif
    @if (Session::has('error'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'error',
                    text: '{{ Session::get('error') }}',
                    showConfirmButton: false,
                    timer: 1500
                });

            });
        </script>
        @php
            Session::forget('error');
        @endphp
    @endif
    @extends('layouts.register')
    @section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <p style="font-size: 14px;">{{ __('จำนวนห้อง') }}</p>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @if (isset($showsum))
                                    {{ $showsum }} {{ __('ห้อง') }}
                                @else
                                    {{ __('0 ห้อง') }}
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <p style="font-size: 14px;">{{ __('จำนวนห้อง อาคารแม่และเด็ก') }}</p>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @if (isset($showwardCount1))
                                    {{ $showwardCount1 }} {{ __('ห้อง') }}
                                @else
                                    {{ __('0 ห้อง') }}
                                @endif
                            </div>
                            <hr>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <p style="font-size: 14px;">{{ __('จำนวนห้องว่าง อาคารแม่และเด็ก') }}</p>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @if (isset($showlesswardCount1))
                                    {{ $showlesswardCount1 }} {{ __('ห้อง') }}
                                @else
                                    {{ __('0 ห้อง') }}
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a class="text-dark" href="{{route('countward', ['id' => '1'])}}">
                    <div class="card-footer position-relative bg-white">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                               <p style="font-size:16px;">รายละเอียดเพิ่มเติม</p> 
                            </div>
                    </div> 
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <p style="font-size: 14px;">{{ __('จำนวนห้อง อาคารศัลยกรรม') }}</p>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @if (isset($showwardCount2))
                                    {{ $showwardCount2 }} {{ __('ห้อง') }}
                                @else
                                    {{ __('0 ห้อง') }}
                                @endif
                            </div>
                            <hr>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <p style="font-size: 14px;">{{ __('จำนวนห้องว่าง อาคารศัลยกรรม') }}</p>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @if (isset($showlesswardCount2))
                                    {{ $showlesswardCount2 }} {{ __('ห้อง') }}
                                @else
                                    {{ __('0 ห้อง') }}
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a class="text-dark" href="{{route('countward', ['id' => '2'])}}">
                    <div class="card-footer position-relative bg-white">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                               <p style="font-size:16px;">รายละเอียดเพิ่มเติม</p> 
                            </div>
                    </div> 
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <p style="font-size: 14px;">{{ __('จำนวนห้อง อาคารเฉลิมพระเกียรติ์') }}</p>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @if (isset($showwardCount3))
                                    {{ $showwardCount3 }} {{ __('ห้อง') }}
                                @else
                                    {{ __('0 ห้อง') }}
                                @endif
                            </div>
                            <hr>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <p style="font-size: 14px;">{{ __('จำนวนห้องว่าง อาคารเฉลิมพระเกียรติ์') }}</p>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @if (isset($showlesswardCount3))
                                    {{ $showlesswardCount3 }} {{ __('ห้อง') }}
                                @else
                                    {{ __('0 ห้อง') }}
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a class="text-dark" href="{{route('countward', ['id' => '3'])}}">
                    <div class="card-footer position-relative bg-white">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                               <p style="font-size:16px;">รายละเอียดเพิ่มเติม</p> 
                            </div>
                    </div> 
                </a>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-5 shadow-lg mb-5 bg-white rounded">
                    <div class="card-header mb-4 py-3 border-left-primary">รายชื่อผุ้ป่วยลงทะเบียนห้องพิเศษ</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <table style="width:100%;font-size:12px !important;" class="table table-responsive-md table-bordered" id="mainnurse">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>วัน - เวลาจอง</th>
                                            <th>ห้องพิเศษ</th>
                                            <th>แพทย์ผู้ตรวจ</th>
                                            <th>รหัสประจำตัวประชาชนผู้ป่วย</th>
                                            <th>ชื่อผู้ป่วย</th>
                                            <th>สถานะผู้ป่วย</th>
                                            <th>เบอร์โทรติดต่อ</th>
                                            <th>วันเวลาที่ขอเข้าพัก</th>
                                            <th>สถานะการจอง</th>
                                            <th>อนุมัติ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($showjob as $key => $rows)
                                            @php
                                                $datetime = Carbon::parse($rows->job_date_time);
                                                $formattedDateTime = $datetime->addYears(543)->format('d/m/Y H:i');

                                                $datetime2 = Carbon::parse($rows->job_re_date_time);
                                                $formattedDateTime2 = $datetime2->addYears(543)->format('d/m/Y H:i');
                                            @endphp
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $formattedDateTime }}</td>
                                                <td>{{ $rows->room_subtype_name }}
                                                    @if ($rows->room_subtype_name != 'อยู่ขั้นตอนการพิจารณา')
                                                       {{__(' หมายเลขห้อง ').$rows->room_number}}
                                                   @endif
                                               </td>
                                                <td>{{ $rows->name }}</td>
                                                <td>{{ $rows->cid }}</td>
                                                <td>{{ $rows->patient_name }}</td>
                                                <td>{{ $rows->statuspatients_name }}</td>
                                                <td>{{ $rows->job_re_tel }}</td>
                                                <td>{{ $formattedDateTime2 }}</td>
                                                <td>
                                                    <p class="{{ $rows->status_color }}">{{ $rows->status_name }}</p>
                                                </td>
                                                @if ($rows->accept_id == 1)
                                                    <td>
                                                        <a class="btn btn-success">อนุมัติ</a>
                                                    </td>
                                                @elseif ($rows->accept_id == 2)
                                                    <td>
                                                        <a class="btn btn-danger">ไม่อนุมัติ</a>
                                                    </td>
                                                @elseif ($rows->status_id == 3)
                                                    <td>
                                                        <a class="btn btn-danger">ยกเลิก</a>
                                                    </td>
                                                @elseif ($rows->status_id == 4)
                                                    <td>
                                                        <a class="btn btn-info">Discharge</a>
                                                    </td>
                                                @else
                                                    <td>
                                                        <a class="btn btn-primary m-1"
                                                            href="{{ route('doctoraccept', ['id' => $rows->jid, 'count' => '1']) }}">อนุมัติ</a>
                                                        <a class="btn btn-danger m-1"
                                                            href="{{ route('doctoraccept', ['id' => $rows->jid, 'count' => '2']) }}">ไม่อนุมัติ</a>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@else
@endif
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/demo/datatables.js') }}"></script>
