@extends('layouts.screen')

@section('content')
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">ตรวจสอบสถานะการจอง</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6 text-center mb-3">
                        <input class="form-control" type="text" name="cid" id="cid"
                            placeholder="กรุณากรอกเลขบัตรประชาชน 13 หลัก">
                    </div>
                    <div class="col-sm-2 text-start">
                        <input class="btn btn-primary w-100" type="submit" name="buttonsubmit" value="ค้นหา">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
