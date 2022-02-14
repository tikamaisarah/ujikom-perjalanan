<!DOCTYPE html>
<html dir="ltr" lang="en">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>CATATAN PERJALANAN</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->


                    </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->


                        <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                                <input type="text" class="form-control" placeholder="Search"> <a
                                    class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ _('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            <button type="submit">Logout</button>
                            }
                        </form>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('dashboarduser') }} " aria-expanded="false"><i
                                    class="me-3 fas fa-th-large" aria-hidden="true"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('catatan') }}" aria-expanded="false"><i class="me-3 far fa-file-alt"
                                    aria-hidden="true"></i><span class="hide-menu">Catatan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('isiperjalanan') }}" aria-expanded="false"><i
                                    class="me-3 me-3 fas fa-map-marker-alt" aria-hidden="true"></i><span
                                    class="hide-menu">Isi Perjalanan</span></a>
                        </li>


                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Isi Perjalanan</h3>
                        <div class="d-flex align-items-center">
                            </nav>
                        </div>
                    </div>
                    <div class="container">
                        <form>
                            <div class="form-group">
                                <div class="col-4">
                                    <label for="formGroupExampleInput">Example label</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Example input placeholder">
                                </div>
                                <div class="form-group">
                                    <div class="col-4">
                                        <label for="formGroupExampleInput2">Another label</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Another input placeholder">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-4">
                                            <label for="formGroupExampleInput">Example label</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput"
                                                placeholder="Example input placeholder">
                                        </div>
                                        <div class="form-group">
                                            <div class="col-4">
                                                <label for="formGroupExampleInput2">Another label</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput2"
                                                    placeholder="Another input placeholder">
                                            </div>
                        </form>
                        <button type="button" class="btn btn-primary">Primary</button>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Container fluid  -->
                    <!-- ============================================================== -->
                    <div class="container-fluid">
                        <!-- ============================================================== -->
                        <!-- Sales chart -->
                        <!-- ============================================================== -->

                        <!-- Column -->
                        <!-- Column -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->

    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('js/pages/dashboards/dashboard1.js') }}"></script>
</body>

</html>
