    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
            <div class="sidebar-brand-icon">
                <img src="{{ asset('img/rent/cph.png') }}" width="50" height="50" alt="Description of the image">
            </div>
            <div class="sidebar-brand-text mx-3">จองห้องพิเศษ</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>หน้าหลัก</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            เมนู
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('checkstatus')}}">
                <span>ตรวจสอบการจอง</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('register')}}">
                <span>ลงทะเบียนการจอง</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('about')}}">
                <span>เกี่ยวกับ</span>
            </a>
        </li>
        @if (session('logged_in') == true)
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('logout')}}">
                <span>ออกจากระบบ</span>
            </a>
        </li>
            
        @else
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('login')}}">
                <span>เข้าสู่ระบบ</span>
            </a>
        </li>
        @endif
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
