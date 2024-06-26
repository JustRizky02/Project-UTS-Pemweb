<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
          content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Perisai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <style src="ample-admin/css/popup.css"></style>
    <!- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>


    <![endif]-->
</head>

<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="ample-admin\js\popup.js"></script>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="dashboard.php">
                    <!-- Logo text -->
                    <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../images/logo perisai.jpg" alt="homepage" />
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
                <ul class="navbar-nav d-none d-md-block d-lg-none">
                    <li class="nav-item">
                        <a class="nav-toggler nav-link waves-effect waves-light text-white"
                           href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                </ul>
            </div>
        </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li class="sidebar-item pt-2">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                           aria-expanded="false">
                            <i class="far fa-clock" aria-hidden="true"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php"
                           aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="hide-menu">Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Admin-table.php"
                           aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Tabel Admin</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.php"
                           aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Tabel Pengguna</span>
                        </a>
                    </li>



                    </li>
                    <li class="text-center p-20 upgrade-btn">
                        <a href="../index.php"
                           class="btn d-grid btn-danger text-white">Log Out</a>
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
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Tabel Admin</h4>
                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Data Admin</h3>
                        <!-- Modal -->
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalLong">Tambah Admin
                        </button>
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Masukkan Data Admin</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form" action="inputadmin.php" method="post">
                                            <div class="form-group">
                                                <label for="nama"> Nama Admin</label>
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Admin" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="email"> Email Admin</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email Admin" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="password"> Password</label>
                                                <input type="text" class="form-control" name="password" id="password" placeholder="Masukan Password" required>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
                                                <input type="submit" value="Simpan" class="btn btn-outline-success">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <form method="get" action="Admin-table.php" style="text-align: right">
                            <input type="text" name="cari" placeholder="Pencarian.." autocomplete="off" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];} ?>">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th class="border-top-0">No</th>
                                    <th class="border-top-0">Id Admin</th>
                                    <th class="border-top-0">Nama</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Password</th>
                                    <th class="border-top-0">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include 'koneksi.php';
                                if(isset($_GET['cari'])){
                                    $pencarian=$_GET['cari'];
                                    $query="select * from admin where id_admin like '%".$pencarian."%' or nama like '%".$pencarian."%'or email like '%".$pencarian."%'";
                                } else {
                                    $query="select * from admin";
                                }

                                $no = 1;
                                $data = mysqli_query($koneksi, $query);
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['id_admin']; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['nama']; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['password']; ?>
                                    </td>
                                    <td>
                                        <a role="button" class="btn btn-outline-danger" href="hapus_admin.php?id=<?php echo $d['id_admin']; ?>"
                                           onclick="return hapusAdmin(event, <?php echo $d['id_admin']; ?>)">HAPUS</a>
                                        <a role="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#edit_button_<?php echo $d['id_admin']; ?>">EDIT</a>
                                        <script>
                                            function hapusAdmin(event, adminId) {
                                                event.preventDefault(); // Mencegah tindakan default dari tautan

                                                Swal.fire({
                                                    title: 'Konfirmasi Hapus',
                                                    text: 'Apakah Anda yakin ingin menghapus admin ini?',
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonText: 'Hapus',
                                                    cancelButtonText: 'Batal',
                                                    reverseButtons: true
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        // Tindakan hapus jika tombol "Hapus" diklik
                                                        window.location.href = 'hapus_admin.php?id=' + adminId;
                                                    }
                                                });

                                                return false;
                                            }
                                        </script>
                                        <?php
                                        if (isset($_GET['hapus'])) {
                                            $hapusStatus = $_GET['hapus'];
                                            if ($hapusStatus === 'berhasil') {
                                                echo '
                                                        <script>
                                                            Swal.fire({
                                                                title: "Berhasil dihapus",
                                                                icon: "success",
                                                                timer: 10000,
                                                                showConfirmButton: false
                                                            });
                                                        </script>
                                                    ';
                                            }
                                        }
                                        //                                            header('Location: basic-table.php?hapus=berhasil');
                                        //                                            exit;

                                        ?>

                                    </td>
                                    <div class="modal fade" id="edit_button_<?php echo $d['id_admin']; ?>" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Merubah Admin</h5>
                                                </div>
                                                <!-----Popup Edit---->
                                                <div class="modal-body">
                                                    <form action="edit_admin.php" method="post">
                                                        <input type="hidden" name="id_admin" id="id_admin" value="<?php echo $d['id_admin']; ?>">

                                                        <div class="form-group">
                                                            <label for="nama"> Nama User</label>
                                                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $d['nama']; ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="email"> Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $d['email']; ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="password"> Password</label>
                                                            <input type="text" class="form-control" name="password" id="password" value="<?php echo $d['password']; ?>">
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Tutup</button>
                                                    <form class="form" method="post" action="edit_admin.php">
                                                        <button type="submit" class="btn btn-outline-success">Simpan Perubahan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <!--            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a-->
        <!--                    href="https://www.wrappixel.com/">wrappixel.com</a>-->
        <!--            </footer>-->
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/app-style-switcher.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.js"></script>
</body>

</html>