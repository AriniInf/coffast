<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Coffast</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets  /plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="/pegawai/edit-profile" class="dropdown-item ">Edit Profile
                        </a>
                        <div class="dropdown-divider "></div>
                        <a href="/logout " class="dropdown-item ">Logout
                        </a>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 ">


            <!-- Sidebar -->
            <div class="sidebar ">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
                    <div class="image ">
                        <img src="../assets/dist/img/avatar5.png" class="img-circle elevation-2 " alt="User Image ">
                    </div>
                    <div class="info ">
                        <a href="/pegawai/lihat-profil" class="d-block "> {{ session.get('auth')['username'] }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2 ">
                    <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview " role="menu " data-accordion="false ">
                        <li class="nav-item has-treeview menu-open ">
                            {% if session.get('auth')['role'] == 1 %}
                            <a href="/pemilik/dashboard " class="nav-link ">
                            {% elseif session.get('auth')['role'] == 2 %}
                            <a href="/admin/dashboard " class="nav-link ">
                            {% elseif  session.get('auth')['role']  == 3 %}
                                <a href="/pegawai/dashboard " class="nav-link "> {% endif %}
                            <i class="nav-icon fas fa-tachometer-alt "></i>
                            <p>
                                DASHBOARD
                            </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="/pegawai/menu" class="nav-link ">
                                <i class="nav-icon fas fa-copy "></i>
                                <p>
                                    MENU
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview ">
                            <a href="/pegawai/list-penjualan" class="nav-link ">
                                <i class="nav-icon fas fa-copy "></i>
                                <p>
                                    PESANAN
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">BARANG</li>
                        <li class="nav-item has-treeview ">
                            <a href="/pegawai/list-pembelian" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Pembelian
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="/pegawai/list-penggunaan" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Penggunaan
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
        <div class="content-wrapper ">
            <!-- Main content -->
            <section class="content ">
                <div class="container-fluid ">
                    <!-- Small boxes (Stat box) -->
                    {% block content %}{% endblock %}
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer ">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io ">AdminLTE.io</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block ">
                <b>Version</b> 3.0.4
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark ">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../assets/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>