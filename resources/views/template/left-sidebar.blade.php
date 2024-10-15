<!-- Sidebar content -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TB AHMENG</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Daftar Barang -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('barang.index') }}">
            <i class="fas fa-fw fa-box"></i>
            <span>Daftar Barang</span></a>
    </li>

    <!-- Nav Item - Barang Masuk -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('barang-masuk.index') }}">
            <i class="fas fa-fw fa-arrow-down"></i>
            <span>Barang Masuk</span></a>
    </li>

    <!-- Nav Item - Barang Keluar -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('barang-keluar.index') }}">
            <i class="fas fa-fw fa-arrow-up"></i>
            <span>Barang Keluar</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{ route('laporan.index') }}">
        <i class="bi bi-file-earmark-text-fill"></i>
        <span>Laporan</span>
    </a>
</li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
