<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>4RSHIP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/css/foto.css">


  <style>
    .card1 {
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 20px;
      padding-bottom: 20px;
    }

    #username {
      color: white;
      font-size: larger;
    }
  </style>

</head>

<body class="hold-transition sidebar-mini">
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
            <a href="profile" class="dropdown-item">
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
            <a href="/dashboard" class="nav-link" style="background-color:white ;">
              <i class="fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/suratmasuk" class="nav-link" style="color:white ;">
              <i class="fas fa-envelope"></i>
              <p>
                Surat Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/suratkeluar" class="nav-link" style="color:white ;">
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

    <!-- Content Wrapper. Contains page content -->
    <div class="card1">
      <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <h1 class="mb-4">Ringkasan</h1>
            <div class="row">
              <div class="col-md-5 col-sm-12 my-3">
                <div class="card border shadow p-2 mb-5 bg-body rounded">
                  <div class="card-body" style="width: 25rem;">
                    <h4 class="d-inline">Data Surat Masuk</h4>
                    <div id="chart1"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-5 col-sm-12 my-3">
                <div class="card border shadow p-2 mb-5 bg-body rounded">
                  <div class="card-body" style="width: 25rem;">
                    <h4 class="d-inline">Data Surat Keluar</h4>
                    <div id="chart2"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-5 col-sm-12 my-3">
                <div class="card border shadow p-2 mb-5 bg-body rounded">
                  <div class="card-body" style="width: 25rem;">
                    <h4 class="d-inline">Data Aktivitas</h4>
                    <div id="chart3"></div>
                  </div>
                </div>
              </div>
            </div>

            <section class="content">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Surat Masuk</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <th style="width: 10px">No</th>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>Pengirim</th>
                        <th>Nomor Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Keperluan</th>
                        <th>keterangan</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
    </div>
  </div>


  <script src="../../plugins/jquery/jquery.min.js"></script>

  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

  <script src="../../dist/js/demo.js"></script>
</body>

</html>