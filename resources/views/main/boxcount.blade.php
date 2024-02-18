
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            {{__('จำนวนห้องว่าง')}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">@if(isset($showsum))
                            {{$showsum}} {{__('ห้อง')}}
                        @else
                        {{__('0 ห้อง')}}
                        @endif</div>
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
                            {{__('จำนวนห้องว่าง อาคารแม่และเด็ก')}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">@if(isset($showwardCount1))
                            {{$showwardCount1}} {{__('ห้อง')}}
                        @else
                        {{__('0 ห้อง')}}
                        @endif</div>
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
                            {{__('จำนวนห้องว่าง อาคารศัลยกรรม')}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">@if(isset($showwardCount2))
                            {{$showwardCount2}} {{__('ห้อง')}}
                        @else
                        {{__('0 ห้อง')}}
                        @endif</div>
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
                            {{__('จำนวนห้องว่าง อาคารเฉลิมพระเกียรติ์')}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">@if(isset($showwardCount3))
                            {{$showwardCount3}} {{__('ห้อง')}}
                        @else
                        {{__('0 ห้อง')}}
                        @endif</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>