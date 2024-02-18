@php
        use Carbon\Carbon;
        /* Carbon::now();  */
    @endphp
@if (Auth::check())
@extends('layouts.register')
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    @if (session('success') == true)
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'เข้าสู่ระบบเรียบร้อย',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location = '/admin/tableview';
                });
                @php
                    session()->forget('success');
                @endphp
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
                }).then(function() {
                    window.location = '/admin/tableview';
                });

            });
        </script>
        @php
            Session::forget('logsuccess');
        @endphp
    @endif
    @if (session('successs') == true)
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'อนุมัติเรียบร้อย',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location = '/admin/tableview';
                });
                @php
                    session()->forget('success');
                @endphp
            });
        </script>
    @endif
    <div class="container-fluid">
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
            <div class="col">
                <div class="card shadow-lg mb-5 bg-white rounded">
                    <div class="card-header mb-4 py-3 border-left-primary">
                        รายการร้องขอห้องพิเศษ
                    </div>
                    <div class="card-body" style="font-size:12px;">
                        <div class="table-responsive">
                            <table id="tableview" class="table table-bordered bg-white">
                                <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>วัน - เวลา</th>
                                        <th>ห้อง</th>
                                        <th>แพทย์</th>
                                        <th>รหัสประจำตัวประชาชน</th>
                                        <th>ชื่อผู้ป่วย</th>
                                        <th>ชื่อผู้จอง</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>สมัครโดย</th>
                                        <th>วันที่จอง</th>
                                        <th>อนุมัติ</th>
                                        <th>สถานะ</th>
                                        <th>วันเวลา Discharge</th>
                                        <th>ทำรายการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($job as $key => $rows)
                                        @php
                                            $datetime = Carbon::parse($rows->job_date_time);
                                            $formattedDateTime = $datetime->addYears(543)->format('d/m/Y H:i');

                                            $datetime2 = Carbon::parse($rows->job_re_date_time);
                                            $formattedDateTime2 = $datetime2->addYears(543)->format('d/m/Y H:i');
                                            if(!empty($rows->job_discharge)){
                                                $datetime3 = Carbon::parse($rows->job_discharge);
                                            $formattedDateTime3 = $datetime3->addYears(543)->format('d/m/Y H:i');
                                            }else{
                                                $formattedDateTime3 ='';
                                               
                                            }
                                            
                                        @endphp
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $formattedDateTime . ' น.' }}</td>
                                            <td>{{ $rows->room_subtype_name }}
                                                @if ($rows->room_subtype_name != 'อยู่ขั้นตอนการพิจารณา')
                                                    {{ __(' หมายเลขห้อง ') . $rows->room_number }}
                                                @endif
                                            </td>
                                            @if ($ddoctorromm->has($key))
                                                @php
                                                    $doctor = $ddoctorromm->get($key);
                                                @endphp
                                                <td>{{ $doctor->name ?? 'อยู่ขั้นตอนพิจารณา' }}</td>
                                            @endif
                                            <td>{{ $rows->cid }}</td>
                                            <td>{{ $rows->patient_name }}</td>
                                            <td>{{ $rows->name === 'เจ้าหน้าที่ Admit' ? $rows->job_rent_name : $rows->name }}</td>
                                            <td>{{ $rows->job_re_tel === null ? $rows->job_rent_tell : $rows->job_re_tel }}</td>
                                            <td>
                                                @if ($rows->is_register == '0')
                                                    <p>ผู้ป่วย/ญาติผู้ป่วย</p>
                                                @else
                                                    <p>เจ้าหน้าที่</p>
                                                @endif
                                               
                                            </td>
                                            <td>{{ $formattedDateTime2 }}</td>
                                            @if ($rows->accept_id == '1')
                                                <td>
                                                    <p class="text-success">อนุมัติ</p>
                                                </td>
                                            @elseif($rows->accept_id == '2')
                                                <td>
                                                    <p class="text-danger">ไม่อนุมัติ</p>
                                                </td>
                                            @else
                                                <td>
                                                    <p class="text-second">กำลังพิจารณา</p>
                                                </td>
                                            @endif
                                            <td class="{{ $rows->status_color }}">{{ $rows->status_name }}</td>
                                            <td class="{{ $rows->status_color }}">{{ $formattedDateTime3 }}</td>
                                            @if ($rows->accept_id == '1')
                                                @if ($rows->status_id == '1')
                                                <td>
                                                    <a class="btn btn-primary btn-sm w-100 m-1"
                                                        href="{{ route('jobprocess', ['id' => base64_encode($rows->jobid)]) }}">จองห้อง</a>
                                                    <a class="btn btn-danger btn-sm w-100 m-1" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal16"
                                                        data-bs-whatever="{{ base64_encode($rows->jobid) }}">ยกเลิก</a>
                                                </td>
                                                @elseif($rows->status_id =='2')
                                                <td>
                                                    <a class="text-success">อนุมัติ</a>
                                                </td>
                                                @elseif($rows->status_id =='3')
                                                <td>
                                                    <a class="text-danger">ยกเลิก</a>
                                                </td>
                                                @elseif($rows->status_id =='4')
                                                <td>
                                                    <a class="text-info">Discharge</a>
                                                </td>
                                                @endif
                                               
                                            @elseif($rows->accept_id =='2')
                                                <td>
                                                    <a class="text-danger">ไม่อนุมัติ</a>
                                                </td>
                                            @elseif($rows->accept_id =='3')
                                                @if($rows->status_id =='1')
                                                    <td>
                                                        <a class="btn btn-primary btn-sm w-100 m-1"
                                                            href="{{ route('jobprocess', ['id' => base64_encode($rows->jobid)]) }}">จองห้อง</a>
                                                        <a class="btn btn-danger btn-sm w-100 m-1" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal16"
                                                            data-bs-whatever="{{ base64_encode($rows->jobid) }}">ยกเลิก</a>
                                                    </td>
                                                @elseif($rows->status_id == '2')
                                                    <td>
                                                        <a class="text-success">อนุมัติ</a>
                                                    </td>
                                                    @elseif($rows->status_id == '3')
                                                    <td>
                                                        <a class="text-danger">ยกเลิก</a>
                                                    </td>
                                                    @elseif($rows->status_id == '4')
                                                    <td>
                                                        <a class="text-info">Discharge</a>
                                                    </td>
                                                    @else
                                                    <td>
                                                        <a class="text-second">กำลังพิจารณา</a>
                                                    </td>
                                                    @endif
                                                @elseif($rows->accept_id=='0')
                                                    <td>
                                                        <a href="text-info">รออนุมัติ</a>
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
    <div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ยืนยัน การยกเลิก</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('cancel') }}" method="post">
                    @csrf
                    <div class="modal-body m-5">
                        <p>ท่านต้องการจะยกเลิกใช่หรือไม่?</p>
                        <input type="hidden" class="form-control" name="id" id="recipient">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                        <input type="submit" name="editip" value="ยืนยัน" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if (Session::has('cancel'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    text: '{{ Session::get('cancel') }}'
                });
            });
        </script>
        @php
            Session::forget('cancel');
        @endphp
    @endif
    @if (Session::has('error'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'danger',
                    text: '{{ Session::get('error') }}'
                });
            });
        </script>
        @php
            Session::forget('error');
        @endphp
    @endif
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/demo/datatables.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/demo/dashboardadmin-area.js') }}"></script>
    <script src="{{ asset('js/demo/dashboardpie.js') }}"></script>
    <script src="{{ asset('js/demo/modal.js') }}"></script>
@endsection('content')
@else
    <script>
        var routeUrl = "{{ route('home') }}";
        window.location.href = routeUrl;
    </script>
@endif
