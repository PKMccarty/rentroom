@extends('layouts.screen')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('logged_in') == true)
                    <div class="alert alert-success" role="alert">
                        {{ __('เข้าสู่ระบบสำเร็จ!') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection('content')
