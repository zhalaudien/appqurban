<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/dashboard" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">App Qurban P7</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/dashboard"
                                class="nav-link <?php if(in_array($activeMenu,['Dashboard'])) echo 'active'; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item <?php if(in_array($activeMenu,['dataqurban', 'jadwal', 'amparah', 'realisasi'])) echo 'menu-open'; ?>">
                            <a href="#" class="nav-link <?php if(in_array($activeMenu,['Data'])) echo 'active'; ?>">
                                <i class="nav-icon fas fa-brain"></i>
                                <p>
                                    Master Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/dataqurban"
                                        class="nav-link <?php if(in_array($activeMenu,['dataqurban'])) echo 'active'; ?>">
                                        <i class="far fas fa-cow nav-icon"></i>
                                        <p>Data Qurban</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/jadwal"
                                        class="nav-link <?php if(in_array($activeMenu,['jadwal'])) echo 'active'; ?>">
                                        <i class="far fas fa-calendar-days nav-icon"></i>
                                        <p>Jadwan Pengiriman</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/amprah"
                                        class="nav-link <?php if(in_array($activeMenu,['amprah'])) echo 'active'; ?>">
                                        <i class="far fas fa-download nav-icon"></i>
                                        <p>Amprah Besek</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/realisasi"
                                        class="nav-link <?php if(in_array($activeMenu,['realisasi'])) echo 'active'; ?>">
                                        <i class="far fas fa-upload nav-icon"></i>
                                        <p>Realisasi Besek</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item <?php if(in_array($activeMenu,['datapanitia', 'datacabang'])) echo 'menu-open'; ?>">
                            <a href="#" class="nav-link <?php if(in_array($activeMenu,['Data'])) echo 'active'; ?>">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/datapanitia"
                                        class="nav-link <?php if(in_array($activeMenu,['datapanitia'])) echo 'active'; ?>">
                                        <i class="far fas fa-users nav-icon"></i>
                                        <p>Data Panitia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datacabang"
                                        class="nav-link <?php if(in_array($activeMenu,['datacabang'])) echo 'active'; ?>">
                                        <i class="far fas fa-house nav-icon"></i>
                                        <p>Data Cabang</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if(in_array($activeMenu,['Penerimaan'])) echo 'menu-open'; ?>">
                            <a href="#"
                                class="nav-link <?php if(in_array($activeMenu,['Penerimaan'])) echo 'active'; ?>">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Penerimaan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/penerimaan"
                                        class="nav-link <?php if(in_array($activeMenu,['Penerimaan'])) echo 'active'; ?>">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>Penerimaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datasapi"
                                        class="nav-link <?php if(in_array($activeMenu,['DataSapi'])) echo 'active'; ?>">
                                        <i class="far fas fa-cow nav-icon"></i>
                                        <p>Data Sapi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/kandang"
                                class="nav-link <?php if(in_array($activeMenu,['Kandang'])) echo 'active'; ?>">
                                <i class="nav-icon fas fa-table-cells"></i>
                                <p>
                                    Kandang
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/produksibesek"
                                class="nav-link <?php if(in_array($activeMenu,['Produksibesek'])) echo 'active'; ?>">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Produksi Besek
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo $title ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active"><?php echo $title ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->