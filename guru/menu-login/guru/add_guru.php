<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMA MAARIF WATES</title>
  <!-- Bootstrap -->
  <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-wysiwyg -->
  <link href="../../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="../../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
  <!-- Switchery -->
  <link href="../../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
  <!-- starrr -->
  <link href="../../vendors/starrr/dist/starrr.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="../../build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-signal"></i> <span>ONLINE</span></a>
          </div>
          <div class="clearfix"></div>
          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
            </div>

            <?php session_start(); if($_SESSION[ 'status']!="login" ){ header( "location:../index.php?pesan=belum_login"); } ?>
            <?php echo $_SESSION[ 'username']; ?>

            <div class="profile_info">
              <h2> SMA MAARIF WATES</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->
          <br/>
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Menu Admin</h3>
              <ul class="nav side-menu">
               
                <li><a><i class="fa fa-user"></i> Guru <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php">Table</a>
                    </li>
                    <li><a href="add_guru.php"><i class="fa fa-plus-circle"></i> Tambah Data Guru</a>
                    </li>
                    <li><a href="table_guru.php"><i class="fa fa-search"></i>Cari Guru</a>
                    </li>
                     </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-user"></i> Siswa <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="../siswa/index.php">Table</a>
                    </li>
                    <li><a href="../siswa/add_siswa.php"><i class="fa fa-plus-circle"></i> Tambah Siswa</a>
                    </li>
                    <li><a href="../siswa/table_siswa.php"><i class="fa fa-search"></i>Cari Siswa</a>
                    </li>
                      </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-print"></i> Cetak Data</a>
                </li>
                <li><a><i class="fa fa-gear"></i> Pengatuan Sistem</a>
                </li>
                <li><a><a href="logout.php"><i class="fa fa-sign-out"></i> Keluar</a></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="../images/img.jpg" alt="">Admin
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Akun Profil</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Pengaturan</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Bantuan</a>
                  </li>
                  <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Keluar Halaman</a>
                  </li>
                </ul>
              </li>
              <li role="presentation" class="dropdown">
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Form Guru</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>User |<small>Admin || Form Guru SMA MAARIF WATES</small></h2>
                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    
                  </div>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br/>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" name="form_admin" action="index.php?page=create" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                      <label for="kode_guru">Kode Guru</label>
                      <input type="text" class="form-control" id="kode_guru" placeholder="Kode Guru" name="kode_guru" required>
                    </div>
                    <div class="form-group">
                      <label for="nip">NIP</label>
                      <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip" required>
                    </div>
                    <div class="form-group">
                      <label for="nama_guru">Nama Guru</label>
                      <input type="text" class="form-control" id="nama_guru" placeholder="Nama Guru" name="nama_guru" required>
                    </div>
                    <div class="form-group">
                      <label for="Jk">Jenis Kelamin</label>
                      <select name="jk" class="form-control" id="jk" name="jk" required>
                        <option value="">None</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                      <label for="Agama">Agama</label>
                      <select name="agama" class="form-control" id="agama" name="agama" required>
                        <option value="">None</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Budha</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="tlp">Tlp</label>
                      <input type="text" class="form-control" id="tlp" placeholder="Tlp" name="tlp" required>
                    </div>
                    <div class="form-group">
                      <label for="Gambar">Gambar</label>
                      <input type="file" class="form-control" id="gambar" name="gambar" required>
                    </div>
                    <div class="form-group">
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- jQuery -->
        <script src="../../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../../vendors/nprogress/nprogress.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="../../vendors/iCheck/icheck.min.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../../vendors/moment/min/moment.min.js"></script>
        <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap-wysiwyg -->
        <script src="../../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
        <script src="../../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
        <script src="../../vendors/google-code-prettify/src/prettify.js"></script>
        <!-- jQuery Tags Input -->
        <script src="../../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
        <!-- Switchery -->
        <script src="../../vendors/switchery/dist/switchery.min.js"></script>
        <!-- Select2 -->
        <script src="../../vendors/select2/dist/js/select2.full.min.js"></script>
        <!-- Parsley -->
        <script src="../../vendors/parsleyjs/dist/parsley.min.js"></script>
        <!-- Autosize -->
        <script src="../../vendors/autosize/dist/autosize.min.js"></script>
        <!-- jQuery autocomplete -->
        <script src="../../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
        <!-- starrr -->
        <script src="../../vendors/starrr/dist/starrr.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="../../build/js/custom.min.js"></script>
</body>
</html>
