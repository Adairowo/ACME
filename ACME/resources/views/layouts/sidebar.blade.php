<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ACME</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Módulos
    </div>

    <!-- Nav Item - Clientes -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('clientes.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Clientes</span></a>
    </li>

    <!-- Nav Item - Zonas -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('zonas.index') }}">
            <i class="fas fa-fw fa-map-marker-alt"></i>
            <span>Zonas</span></a>
    </li>

    <!-- Nav Item - Proyectos -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('proyectos.index') }}">
            <i class="fas fa-fw fa-project-diagram"></i>
            <span>Proyectos</span></a>
    </li>

    <!-- Nav Item - Planos -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('planos.index') }}">
            <i class="fas fa-fw fa-ruler-combined"></i>
            <span>Planos</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
