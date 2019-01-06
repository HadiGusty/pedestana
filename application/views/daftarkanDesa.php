<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FASILITATOR - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(); ?>/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">PEDESTANA</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-3">                
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" onclick="window.location='<?php echo site_url("Welcome/fasilitatordashboard");?>'">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="window.location='<?php echo site_url("Welcome/daftarkandesa");?>'">
            <i class="fas fa-fw fa-file"></i>
            <span>Daftarkan desa</span></a>
        </li>
      </ul>
      <!-- /Sidebar -->

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol> 
          
          
          <!-- Aksi Lihat -->
          <h3>Masukkan Data Desa</h3>
          <hr>
          <div class="col-lg-8">
            <div class="card">

              <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">                            
                  <div class="row form-group">
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">NAMA DESA/KELURAHAN</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="text-input" name="namaDesa" class="form-control"></div>
                  </div>
                  <div class="row form-group">
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">KECAMATAN</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamatDesa" class="form-control"></div>
                  </div>
                  <div class="row form-group">
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">KOTA/KABUPATEN</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="text-input" name="namaFasilitator" class="form-control"></div>
                  </div>
                  <div class="row form-group">
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">PROVINSI</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="text-input" name="hasilKategori" class="form-control"></div>
                  </div>
                  <div class="row form-group">
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">TANGGAL PENILAIAN</label></div>
                      <div class="col-12 col-md-9"><input type="date" id="text-input" name="namaFasilitator" class="form-control"></div>
                  </div>
                                                     
                </form>
              </div> <br />                
            </div>
          </div>
          <br />

          <!--Tabel Indikator yang dikirim BNPB-->
          <form>
          <div class="col-lg-11">
            <div class="card">                
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover">                          
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Indikator</th>
                              <th>Pencapaian</th>                                    
                          </tr>
                      </thead>
                      <tbody>
                        <form class="opsi">                              
                          <tr>
                              <td>1</td>
                              <td>
                                <p>Adanya kebijakan PRB yang telah dilegalkan dalam bentuk perdas atau perangkat hukum setingkat di kelurahan.
                                </p>
                              </td>
                              <td><p>                                       
                                  <input type="radio" class="flat" name="opsi" id="ya" value="y" required /> YA <br />
                                  <input type="radio" class="flat" name="opsi" id="tidak" value="n" /> TIDAK <br />                                      
                                </p></td>                                                                                                
                          </tr>
                        </form>

                        <form class="opsi">
                          <tr>
                              <td>2</td>
                              <td>
                                <p>Adanya dokumen perencanaan PB yang telah dipadukan ke dalam Rencana Pembangunan Jangka Menengah Desa (RPJM Desa)
                                    dan dirinci ke dalam Rencana Kerja Pemerintah Desa (RKP Desa).
                                </p>
                              </td>
                              <td><p>                                       
                                  <input type="radio" class="flat" name="opsi" id="ya" value="y" required /> YA <br />
                                  <input type="radio" class="flat" name="opsi" id="tidak" value="n" /> TIDAK <br />                                      
                                </p></td>
                          </tr>
                          </form>

                          <form class="opsi">
                          <tr>
                              <td>3</td>
                              <td>
                                <p>Adanya forum PRB yang beranggotakan wakil-wakil masyarakat, termasuk kelompok perempuan dan kelompok rentan dan wakil-wakil
                                  pemerintah desa/kelurahan, yang berfungsi dengan aktif.
                                </p>
                              </td>
                              <td><p>                                       
                                  <input type="radio" class="flat" name="opsi" id="ya" value="y" required /> YA <br />
                                  <input type="radio" class="flat" name="opsi" id="tidak" value="n" /> TIDAK <br />                                      
                                </p></td>
                          </tr>
                          </form>
                          
                          <form class="opsi">
                          <tr>
                              <td>4</td>
                              <td>
                                <p>Adanya ti relawan PB Desa/Kelurahan yang secara rutin terlibat aktif dalam kegiatan peningkatan kapasitas, pengetahuan dan
                                    pendidikan keencanaan bagi para anggotanya dan masyarakat pada umumnya.
                                </p>
                              </td>
                              <td><p>                                       
                                  <input type="radio" class="flat" name="opsi" id="ya" value="y" required /> YA <br />
                                  <input type="radio" class="flat" name="opsi" id="tidak" value="n" /> TIDAK <br />                                      
                                </p></td>
                          </tr>
                          </form>

                          <form class="opsi">
                          <tr>
                              <td>5</td>
                              <td>
                                <p>Adanya upaya-upaya sistematis untuk mengadakan pengkajian resiko, manajemen resiko dan pengurangan kerentanan, termasuk
                                  kegiatan-kegiatan ekonomi produktif alternatif untuk mengurangi kerentanan.
                                </p>                                    
                              </td>
                              <td><p>                                       
                                  <input type="radio" class="flat" name="opsi" id="ya" value="y" required /> YA <br />
                                  <input type="radio" class="flat" name="opsi" id="tidak" value="n" /> TIDAK <br />                                      
                                </p></td>
                          </tr>
                          </form>

                          <form class="opsi">
                          <tr>
                              <td>6</td>
                              <td>
                                <p>Adanya upaya-upaya sistematis untuk meningkatkan kapasitas kesiapsiagaan serta tanggap bencana.                                        
                                </p>
                              </td>
                              <td><p>                                       
                                  <input type="radio" class="flat" name="opsi" id="ya" value="y" required /> YA <br />
                                  <input type="radio" class="flat" name="opsi" id="tidak" value="n" /> TIDAK <br />                                      
                                </p></td>
                          </tr>
                          </form>

                          
                    </tbody>                          
                  </table>
                  <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> KIRIM
                </button>   
                </div>                
                <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
            </div>
          </div>

          </form>

        </div>
        <!-- /.container-fluid -->


        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>
        <!-- /Sticky Footer -->


      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" onclick="window.location='<?php echo site_url("Welcome/index");?>'">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(); ?>/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url(); ?>/js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url(); ?>/js/demo/chart-area-demo.js"></script>

  </body>

</html>
