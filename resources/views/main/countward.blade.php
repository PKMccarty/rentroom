@if (Auth::check())
@extends('layouts.register')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow-lg mb-5 bg-white rounded">
                <div class="card-header mb-4 py-3 border-left-primary">
                    รายการห้องพิเศษ
                </div>
                <div class="card-body" style="font-size:12px;">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Ward</th>
                                <th>ห้องพิเศษ</th>
                                <th>ห้องพิเศษ VIP</th>
                                <th>ราคาห้องพิเศษ</th>
                                <th>ราคาห้องพิเศษ VIP</th>
                                <th>ราคาค่าบริการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                dd($roomsType1);
                            @endphp --}}
                            @foreach ($roomsType0 as $key => $item)
                            @php
                                $roomsType2 = $roomsType1->get($key)
                            @endphp
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->room}}</td>
                                <td>{{$roomsType2}}</td>
                                <td>
                                    @if($item->type_id == 0)
                                    {{$item->room_subtype_price}}
                                    @else
                                    {{__('-')}}
                                    @endif
                                </td>
                                <td>
                                    @if($item->type_id == 1)
                                    {{$item->room_subtype_price}}
                                    @else
                                    {{__('-')}}
                                    @endif
                                </td>
                                <td>{{$item->room_subtype_nurse_price}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
