<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Surat Masuk</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">

    <style type="text/css">
        #judul {
            padding-top: 25px;
            padding-bottom: 55px;
        }

        .card1 {
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        #formnya {
            padding-left: 15px;
            padding-right: 15px;
        }

        #inputan {
            padding-bottom: 15px;
        }


        #username {
            color: white;
            font-size: larger;
        }

        .paddingbutton {
            padding-bottom: 15px;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini ">

    <div class="wrapper">

        <nav class="main-header navbar navbar-expand " style="background-color:#383838;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color:white ;"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" id="username">
                        <i class="fas fa-user-circle"></i>
                        <!-- <span class="badge badge-warning navbar-badge">15</span> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Menu</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-cog"></i> Pengaturan Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i> Keluar
                        </a>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar  elevation-4" style="background-color:#3C534A;">

            <a href="../../index3.html" class="brand-link" style="color:white ;">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div class="sidebar">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="/dashboard/dashboard" class="nav-link" style="color:white ;">
                            <i class="fas fa-home"></i>
                            <p>
                                Beranda
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" style="background-color:white ;">
                            <i class="fas fa-envelope"></i>
                            <p>
                                Surat Masuk
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" style="color:white ;">
                            <i class="fas fa-envelope-open-text"></i>
                            <p>
                                Surat Keluar
                            </p>
                        </a>
                    </li>
                </ul>
                </nav>
            </div>
        </aside>


        <!-- <div class="container"> -->
        <div class="card1">
            <div class="content-wrapper">
                <div id="judul">
                    <center>
                        <h1><b>Format Surat Masuk</b></h1>
                    </center>
                </div>

                <form id="formnya">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-1 col-form-label">Nomor</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                        <label for="inputEmail3" class="col-sm-1 col-form-label">Tanggal Surat</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Tanggal</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputPassword3">
                        </div>
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Keperluan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Pengirim</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputPassword3">
                        </div>
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Keterangan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Nomor Surat</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>

            </div>
            <aside class="control-sidebar control-sidebar-dark">
            </aside>
        </div>


        <script src="../../plugins/jquery/jquery.min.js"></script>

        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

        <script src="../../dist/js/demo.js"></script>
</body>

</html>