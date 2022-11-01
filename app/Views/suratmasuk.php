<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Surat Masuk</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">

  <style type="text/css">
    .card1 {
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 20px;
      padding-bottom: 20px;
    }

    #input {
      box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.4);
      padding: 10px;
      /* border: 1px dashed grey; */
      /* border-radius: 30%; */
      border-top-right-radius: 30px;
      border-top-left-radius: 30px;
      border-bottom-right-radius: 30px;
      border-bottom-left-radius: 30px;
    }

    #inputan {
      padding-bottom: 15px;
    }

    #kolom {
      border-top-right-radius: 15px;
      border-top-left-radius: 15px;
      border-bottom-right-radius: 15px;
      border-bottom-left-radius: 15px;
    }

    #username {
      color: white;
      font-size: larger;
    }

    #button {
      border-top-right-radius: 10px;
      border-top-left-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
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
            <a href="/profile" class="dropdown-item">
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
            <a href="/dashboard" class="nav-link" style="color:white ;">
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


    <!-- <div class="container"> -->
    <div class="card1">
      <div class="content-wrapper">
        <div>
          <center>
            <h1><b> Surat Masuk</b></h1>
          </center>
        </div>

        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8 offset-md-2">

                <div class="input-group-sm" id="inputan">
                  <center><input type="search" class="form-control form-control-sm" placeholder="Type your keywords here" style="width:50%;" id="input">
                    <!-- <button type="submit" class="btn btn-lg btn-sm">
                      <i class="fa fa-search"></i>
                    </button> -->
                  </center>
                </div>
                <div class="paddingbutton">
                  <center><button type="file" class="btn btn-secondary" style="background-color:#383838;" id="button"><i class="fas fa-plus-square"></i> Tambah data</button></center>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="content">
          <div class="container-fluid">
            <!-- <div class="row">
            <div class="col-12"> -->
            <div class="card" id="kolom">
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
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                    </tr>
                </table>

              </div>
            </div>
          </div>
          <!-- </div>
        </div> -->
        </section>

      </div>


      <!-- 
    <aside class="control-sidebar control-sidebar-dark">
    </aside> -->

    </div>


    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="../../dist/js/demo.js"></script>
</body>

</html>