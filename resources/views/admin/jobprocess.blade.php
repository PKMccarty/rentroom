@php
    use Carbon\Carbon;
    /* Carbon::now();  */
@endphp

@if (Auth::check())
    @extends('layouts.register')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
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
    @section('content')
        <div class="row">
            <div class="col">
                <a href="{{ url('admin/tableview') }}" class="btn btn-primary btn-sm">ย้อนกลับ</a>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-sm-9">
                <div class="card shadow-lg mb-5 bg-white rounded">
                    <div class="card-header mb-4 py-3 border-left-primary">
                        อนุมัติการจอง
                    </div>
                    <div class="card-body" style="font-size:12px;">
                        <form method="post" action="{{ route('processsave') }}">
                            @csrf
                            <input type="hidden" name="jobid" id="jobid" value="{{ $job->jobid }}">
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
                                    <p class="text-primary">แพทย์</p>
                                    <h5>
                                        @if ($job->doctorname == '')
                                        <select class="custom-select w-100 doctor-name" id="doctorid" name="doctorid">
                                                <option value="">----- กรุณาเลือก -----</option>
                                                @foreach ($listdoctor as $ltdoc)
                                                    <option value="{{ $ltdoc->id }}"> {{ $ltdoc->name }} </option>
                                                @endforeach
                                            </select>
                                        @else
                                            <input type="hidden" name="doctorid" value="{{ $job->doctor_id }}">
                                            {{ $job->doctorname }}
                                        @endif
                                    </h5>
                                </div>
                                <div class="col-md">
                                    @php
                                        $datetime2 = Carbon::parse($job->job_date_time);
                                        $formattedDateTime2 = $datetime2->addYears(543)->format('d/m/Y H:i');
                                    @endphp
                                    <p class="text-primary">วันที่ร้องขอ</p>
                                    <h5>{{ $formattedDateTime2 }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <p class="text-primary">รหัสบัตรประจำตัว หรือ Passport</p>
                                    <h5>{{ $job->cid }}</h5>
                                </div>
                                <div class="col-md">
                                    <p class="text-primary">ชื่อผู้ป่วย</p>
                                    <h5>{{ $job->patient_name }}</h5>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md">
                                    @php
                                        $datetimed = Carbon::parse($job->job_re_date_time);
                                        $formattedDateTime = $datetimed->addYears(543)->format('d/m/Y H:i');
                                    @endphp
                                    <p class="text-primary">วันที่จอง</p>
                                    <h5>{{ $formattedDateTime }}</h5>
                                </div>

                                <div class="col-md">
                                    <p class="text-primary">ชื่อผู้จอง</p>
                                    <h5>{{ $job->name }}</h5>
                                </div>
                                <div class="col-md">
                                    <p class="text-primary">เบอร์โทรศัพท์</p>
                                    <h5>{{ $job->job_re_tell == '' ? $job->job_rent_tell : $job->job_rent_tell }}</h5>
                                </div>
                                <div class="col-md">
                                    <p class="text-primary">สถานะผู้ป่วย</p>
                                    <h5>{{ $job->statuspatients_name }}</h5>
                                </div>
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col-xl-3">
                                    <button class="btn btn-primary btn-lg w-100">บันทึก</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <script src="{{ asset('js/demo/dropdownroomtype.js') }}"></script>
                </div>
            </div>
        </div>
    @endsection
@else
    <script>
        var routeUrl = "{{ route('home') }}";
        window.location.href = routeUrl;
    </script>
@endif
<script>
    $(document).ready(function() {
        $('.doctor-name').select2();
    });
</script>
