@php
    use Carbon\Carbon;
@endphp
@if (Auth::check())
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

@if (Auth::user()->is_admin == '4')
    @if (Session::has('success'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    text: '{{ Session::get('success') }}',
                    showConfirmButton: false,
                    timer: 1500
                })
            });
        </script>
    @endif
    @if (Session::has('logsuccess'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    text: '{{ Session::get('logsuccess') }}',
                    showConfirmButton: false,
                    timer: 1500
                })
            });
        </script>
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
                <a class="text-dark" href="{{route('countward')}}">
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
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-5 shadow-lg mb-5 bg-white rounded">
                    <div class="card-header mb-4 py-3 border-left-primary">ลงทะเบียนห้องพิเศษ</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md mb-3">
                                <a class="btn btn-primary" href="{{ route('registerroom') }}">จองห้องพิเศษ</a>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-md">
                                <table class="table table-responsive-xl table-bordered" id="mainnurse" style="font-size: 12px !important;">
                                    <thead>
                                        <tr>
                                            <th>{{__("#")}}</th>
                                            <th>{{__("วัน - เวลาจอง")}}</th>
                                            <th>{{__('ห้องพิเศษ')}}</th>
                                            <th>{{__("แพทย์ผู้ตรวจ")}}</th>
                                            <th>{{__("รหัสประจำตัวประชาชนผู้ป่วย")}}</th>
                                            <th>{{__("ชื่อผู้ป่วย")}}</th>
                                            <th>{{__("สถานะผู้ป่วย")}}</th>
                                            <th>{{__("เบอร์โทรติดต่อ")}}</th>
                                            <th>{{__("วันเวลาที่ขอเข้าพัก")}}</th>
                                            <th>{{__("สถานะการจอง")}}</th>
                                            <th>{{__("พิจารณา")}}</th>
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
                                                <td>
                                                    @if ($rows->bypass == '0')
                                                        <a href="{{ route('acceptnurse', ['id' => $rows->jobid, 'values' => '1']) }}" class="btn btn-primary"> {{__('อนุมัติ')}}</a>
                                                        <a href="{{ route('acceptnurse', ['id' => $rows->jobid, 'values' => '2']) }}" class="btn btn-danger">{{__('ไม่อนุมัติ')}}</a>
                                                    @elseif($rows->bypass =='1')
                                                        <p class="text-success">{{__('อนุมัติ')}}</p>
                                                    @else
                                                        <p class="text-danger">{{__('ไม่อนุมัติ')}}</p>
                                                    @endif
                                                </td>
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
@else
    <script>
        var routeUrl = "{{ route('home') }}";
        window.location.href = routeUrl;
    </script>
@endif
