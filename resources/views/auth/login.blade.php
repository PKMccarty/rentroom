@extends('layouts.screen')
@section('content')
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg p-3 mb-5 bg-white rounded my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block text-center p-3"><img src="{{ asset('img/rent/cph.png') }}">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">เข้าสู่ระบบ สำหรับเจ้าหน้าที่</h1>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user"
                                            id="usernames" placeholder="ชื่อผู้ใช้งาน">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="password" placeholder="รหัสผ่าน">
                                    </div>
                                    <input type="submit" value="เข้าสู่ระบบ" class="btn btn-primary w-100">
                                    <hr>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">หากลืมรหัสผ่าน</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection('content')
