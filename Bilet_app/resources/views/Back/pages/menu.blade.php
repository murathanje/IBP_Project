
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('admin/panel') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Götür Admin Panel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ asset('admin/panel') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Create:</h6>
                        <a class="collapse-item" href="{{ asset('admin/create/user') }}">Create User</a>
                        <a class="collapse-item" href="{{ asset('admin/create/trip') }}">Create Trip</a>
                        <a class="collapse-item" href="{{ asset('admin/create/bus') }}">Create Bus</a>
                        <a class="collapse-item" href="{{ asset('admin/create/station') }}">Create Station</a>
                        <a class="collapse-item" href="{{ asset('admin/create/company') }}">Create Company</a>
                        <a class="collapse-item" href="{{ asset('admin/create/ticket') }}">Create Ticket</a>
                        <a class="collapse-item" href="{{ asset('admin/create/routes') }}">Create Route</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Edit:</h6>
                        <a class="collapse-item" href="{{ asset('admin/edit/user') }}">Edit User</a>
                        <a class="collapse-item" href="{{ asset('admin/edit/trip') }}">Edit Trip</a>
                        <a class="collapse-item" href="{{ asset('admin/edit/bus') }}">Edit Bus</a>
                        <a class="collapse-item" href="{{ asset('admin/edit/station') }}">Edit Station</a>
                        <a class="collapse-item" href="{{ asset('admin/edit/company') }}">Edit Company</a>
                        <a class="collapse-item" href="{{ asset('admin/edit/routes') }}">Edit Route</a>
                        <a class="collapse-item" href="{{ asset('admin/edit/ticket') }}">Edit Ticket</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Delete:</h6>
                        <a class="collapse-item" href="{{ asset('admin/delete/user') }}">Delete User</a>
                        <a class="collapse-item" href="{{ asset('admin/delete/trip') }}">Delete Trip</a>
                        <a class="collapse-item" href="{{ asset('admin/delete/bus') }}">Delete Bus</a>
                        <a class="collapse-item" href="{{ asset('admin/delete/station') }}">Delete Station</a>
                        <a class="collapse-item" href="{{ asset('admin/delete/company') }}">Delete Company</a>
                        <a class="collapse-item" href="{{ asset('admin/delete/routes') }}">Delete Route</a>
                        <a class="collapse-item" href="{{ asset('admin/delete/tickets') }}">Delete Ticket</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Charts -->
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ asset('admin/table') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ asset('admin/message') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Messages</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->

                        <!-- Nav Item - Messages -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Panel</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('back') }}/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ asset('logout/admin') }}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                    </div>

