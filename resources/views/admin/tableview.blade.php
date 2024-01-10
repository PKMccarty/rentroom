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
    @php
    use Carbon\Carbon;
    /* Carbon::now();  */
    @endphp
    <div class="container-fluid">
        <div class="row" >
            <div class="col">
                <div class="card">
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
                                    <th>รหัสประจำตัวประชาชน</th>
                                    <th>ชื่อผู้ป่วย</th>
                                    <th>ชื่อผู้จอง</th>
                                    <th>เบอร์ติดต่อ</th>
                                    <th>วันที่จอง</th>
                                    <th>ห้องพิเศษที่ร้องขอ</th>
                                    <th>สถานะ</th>
                                    <th>ทำรายการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($job as $key => $rows)
                                    @php
                                    $datetime = Carbon::parse($rows->job_date . ' ' . $rows->job_time);
                                    $formattedDateTime = $datetime->addYears(543)->format('d/m/Y H:i');

                                    $datetime2 = Carbon::parse($rows->job_re_date);
                                    $formattedDateTime2 = $datetime2->addYears(543)->format('d/m/Y');
                                    @endphp
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $formattedDateTime.' น.'}}</td>
                                        <td>{{ $rows->cid }}</td>
                                        <td>{{ $rows->patient_name }}</td>
                                        <td>{{ $rows->job_re_name }}</td>
                                        <td>{{ $rows->job_re_tel }}</td>
                                        <td>{{ $formattedDateTime2 }}</td>
                                        <td>{{ $preroom->get($key)->room_name }}</td>
                                        <td class="{{ $rows->status_color }}">{{ $rows->status_name }}</td>
                                        @if ($rows->status_id=='2' )
                                        <td>
                                            <a class="btn btn-success btn-sm w-100 m-1">อนุมัติเรียบร้อย</a>
                                        </td>
                                        @elseif($rows->status_id=='3')
                                        <td>
                                            <a class="btn btn-danger btn-sm w-100 m-1" >ยกเลิกเรียบร้อย</a>
                                        </td>
                                            @else
                                        <td>
                                            <a class="btn btn-primary btn-sm w-100 m-1" href="{{ route('jobprocess', ['id' => base64_encode($rows->jobid)]) }}" >อนุมัติการจอง</a>
                                            <a class="btn btn-danger btn-sm w-100 m-1" data-bs-toggle="modal" data-bs-target="#exampleModal16" data-bs-whatever="{{base64_encode($rows->jobid)}}">ยกเลิก</a>
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
                <form action="{{route('cancel')}}" method="post">
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
