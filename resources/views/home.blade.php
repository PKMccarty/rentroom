@extends('layouts.screen')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('image-slide/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('image-slide/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('image-slide/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('image-slide/css/owl.theme.default.min.css') }}">
    <div class="row">
        <div class="col-md"><h5>ระบบจองห้องพิเศษออนไลน์</h5></div>
        
    </div>
    <section>
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="featured-carousel owl-carousel">
                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <div class="testimony-wrap d-md-flex">
                                        <div class="desc w-100">
                                            <div class="img w-100" style="background-image: url(img/rent/room/slide3.png);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <div class="testimony-wrap d-md-flex">
                                        <div class="desc w-100">
                                            <div class="img w-100" style="background-image: url(img/rent/room/slide2.png);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <div class="testimony-wrap d-md-flex">
                                        <div class="desc w-100">
                                            <div class="img w-100" style="background-image: url(img/rent/room/slide1.png);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <div class="row">
                <div class="col">
                    <a class="mb-3 btn btn-primary btn-large" href="{{route('choosebuild')}}">จองห้องพิเศษ</a>
                    <a class="mb-3 btn btn-primary btn-large" href="{{route('checkstatus')}}">ตรวจสอบสถานะการจอง</a>
                </div>
            </div>
                
        </div>
        
    </section>
    <script src="{{ asset('image-slide/js/jquery.min.js') }}"></script>
    <script src="{{ asset('image-slide/js/popper.js') }}"></script>
    <script src="{{ asset('image-slide/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('image-slide/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('image-slide/js/main.js') }}"></script>
@endsection
