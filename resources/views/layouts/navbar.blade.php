<style>
    .active-link {
        color: #000 !important; /* เปลี่ยนเป็นสีที่คุณต้องการ */
        font-weight: bold; /* เพิ่มความหนาตัวอักษรถ้าต้องการ */
    }

</style>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
       @if (Auth::user())
        <p>@php
            echo Auth::user()->name;
        @endphp</p>
       @endif
    </form>
</nav>
