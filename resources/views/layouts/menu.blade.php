    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
            <div class="sidebar-brand-icon">
                <img src="{{ asset('img/rent/cph.png') }}" width="50" height="50" alt="Description of the image">
            </div>
            <div class="sidebar-brand-text mx-3">จองห้องพิเศษ</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        @if (Auth::check())
            @if (Auth::user()->is_admin == '1')
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('tableview') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>หน้าหลัก</span></a>
                </li>

                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Admin เมนู
                </div>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('tableview') }}">
                        <span>รายการร้องขอห้องพิเศษ</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('registerroom') }}">
                        <span>ลงทะเบียนการจอง</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('user-logout') }}">
                        <span>ออกจากระบบ</span>
                    </a>
                </li>
            @elseif (Auth::user()->is_admin == '2')
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('spnurse') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>หน้าหลัก</span></a>
                </li>

                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    เมนู
                </div>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('registerroom') }}">
                        <span>ลงทะเบียนการจอง</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('user-logout') }}">
                        <span>ออกจากระบบ</span>
                    </a>
                </li>
            @elseif(Auth::user()->is_admin == '3')
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('doctor') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>หน้าหลัก</span></a>
                </li>

                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    เมนู
                </div>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('user-logout') }}">
                        <span>ออกจากระบบ</span>
                    </a>
                </li>
            @elseif(Auth::user()->is_admin == '4')
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('nurse') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>หน้าหลัก</span></a>
                </li>

                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    เมนู
                </div>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('registerroom') }}">
                        <span>จองห้องพิเศษ</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('user-logout') }}">
                        <span>ออกจากระบบ</span>
                    </a>
                </li>
            @endif
        @else
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/') }}">
                    <span>หน้าหลัก</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('checkstatus') }}">
                    <span>ตรวจสอบสถานะ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('registeruser') }}">
                    <span>ลงทะเบียนจองห้อง<span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('about') }}">
                    <span>เกี่ยวกับ<span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('login') }}">
                    <span>สำหรับเจ้าหน้าที่</span>
                </a>
            </li>
        @endif
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
