@if (Auth::check())
    @if (Auth::user()->is_admin == '2')
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
        <style>
            .full-width-table {
                width: 100%;
            }
        </style>
        @extends('layouts.register')
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
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
                        <a class="text-dark" href="{{ route('countward', ['id' => '1']) }}">
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
                        <a class="text-dark" href="{{ route('countward', ['id' => '2']) }}">
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
                        <a class="text-dark" href="{{ route('countward', ['id' => '3']) }}">
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
                <div class="col-sm">
                    <div class="card mb-5 shadow-lg mb-5 bg-white rounded">
                        <div class="card-header mb-4 py-3 border-left-primary">รายชื่อผุ้ป่วยลงทะเบียนห้องพิเศษ</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <h5 class="text-primary">รายการห้องที่จองแล้ว</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <table style="width:100%;font-size:12px !important;"
                                        class="table table-responsive-sm table-bordered" id="sptable1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ชื่อห้อง</th>
                                                <th>ค่าห้อง</th>
                                                <th>ค่าบริการ</th>
                                                {{-- <th>สถานะห้อง</th> --}}
                                                <th>แพทย์</th>
                                                <th>รหัสประจำตัวประชาชน</th>
                                                <th>ชื่อผู้ป่วย</th>
                                                <th>วันเวลา จองห้อง</th>
                                                <th>วันเวลา ขอเข้ารับบริการห้อง</th>
                                                <th>Discharge</th>
                                            </tr>
                                        </thead>
                                        {{-- @php
                                            dd($showjob);
                                        @endphp --}}
                                        <tbody>
                                            @foreach ($showjob as $key => $rows)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $rows->room_subtype_name . ' หมายเลขห้อง ' . $rows->room_number }}
                                                    </td>
                                                    <td class="text-center">{{ $rows->room_subtype_price }}</td>
                                                    <td class="text-center">{{ $rows->room_subtype_nurse_price }}</td>
                                                    {{--  @if ($rows->room_status == 1)
                                                    <td class="text-center">ไม่ว่าง</td>
                                                @endif --}}
                                                    @if ($ddoctorromm->has($key))
                                                        @php
                                                            $doctor = $ddoctorromm->get($key);
                                                        @endphp
                                                        <td class="text-center">{{ $doctor->name }}</td>
                                                    @endif
                                                    <td class="text-center">{{ $rows->cid }}</td>
                                                    <td class="text-center">{{ $rows->patient_name }}</td>
                                                    <td class="text-center">{{ $rows->job_date_time }}</td>
                                                    <td class="text-center">{{ $rows->job_re_date_time }}</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#dischargespnurse"
                                                            data-bs-whatever="{{ $rows->jid }}"
                                                            data-bs-whatever2="{{ $rows->room_id }}">Discharge</a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm">
                                    <h5 class="text-primary">รายการห้องว่าง</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <table style="width:100%;font-size:12px !important;"
                                        class="table table-responsive-sm table-bordered" id="sptable2">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ชื่อห้อง</th>
                                                <th>ค่าห้อง</th>
                                                <th>ค่าบริการ</th>
                                                <th>สถานะห้อง</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{--   @php
                                                dd($showjobempty);
                                            @endphp --}}
                                            @foreach ($showjobempty as $key => $rows)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $rows->room_subtype_name . ' หมายเลขห้อง ' . $rows->room_number }}
                                                    </td>
                                                    <td class="text-center">{{ $rows->room_subtype_price }}</td>
                                                    <td class="text-center">{{ $rows->room_subtype_nurse_price }}</td>
                                                    @if ($rows->room_status == 0)
                                                        <td class="text-center">ว่าง</td>
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
            <div class="modal fade" id="dischargespnurse" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ยืนยันการ Discharge</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('discharge') }}" method="post">
                            @csrf
                            <div class="modal-body m-5">
                                <p>ท่านต้องการจะ Discharge ใช่หรือไม่?</p>
                                <input type="hidden" class="form-control" name="id" id="recipient">
                            </div>
                            <div class="modal-body2 m-5">
                                <input type="hidden" class="form-control" name="roomno" id="recipient2">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                                <input type="submit" name="editip" value="ยืนยัน" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('js/demo/datatables.js') }}"></script>
            <script src="{{ asset('js/demo/modal-spnurse.js') }}"></script>
        @endsection
    @endif
@else
    <script>
        var routeUrl = "{{ route('home') }}";
        window.location.href = routeUrl;
    </script>
@endif
