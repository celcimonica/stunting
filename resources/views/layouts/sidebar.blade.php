<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-child"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PESTUN</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data User</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('anak.index') }}">
            <i class="fas fa-fw fa-child"></i>
            <span>Data Anak</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('kunjungan.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Pengunjung</span>
        </a>
    </li>
</ul>
