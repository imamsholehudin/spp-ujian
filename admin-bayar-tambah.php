<!DOCTYPE html>
<?php 
  include("koneksi.php");

  $nisn = $_GET['id'];
  $sqlsiswa = "select * from siswa where nisn = ".$nisn;
  $siswasqli = mysqli_query($mysqli,$sqlsiswa);

  $sqlspp = "select * from spp where id_spp = (select id_spp from siswa where nisn = $nisn)";
  $sppsqli = mysqli_query($mysqli,$sqlspp);
  
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    

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

          


        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Petugas</h6>
                                  
                </div>
                
                <!-- Card Body -->
                <div class="card-body">
                   <form action="proses_tambah_bayar.php" method="POST">
                  <table class="table">

                    <tbody>
                    <?php while($resultsiswa = mysqli_fetch_array($siswasqli)){ ?>
                      <tr>
                        <th scope="row">NISN</th>
                        <td><input type="number" class="form-control" value="<?php echo $resultsiswa['nisn'];?>" aria-label="nisn" name="nisn" aria-describedby="basic-addon1" required readonly></td>
                      </tr>
                      <tr>
                        <th scope="row">Nama Lengkap</th>
                        <td><input type="text" class="form-control" value="<?php echo $resultsiswa['nama'];?>" aria-label="nama" name="nama" aria-describedby="basic-addon1" readonly required> </td>
                      </tr>
                      <tr>
                        <th scope="row">No telp</th>
                        <td><input type="number" class="form-control" value="<?php echo $resultsiswa['no_telp'];?>" aria-label="alamat" name="no_telp" aria-describedby="basic-addon1" readonly required> </td>
                      </tr>
                      <?php } ?>
                      
                      <?php while($resultspp = mysqli_fetch_array($sppsqli)){ ?>
                      <tr>
                        <th scope="row">id spp</th>
                        <td><input type="number" class="form-control" value="<?php echo $resultspp['id_spp'];?>" aria-label="id_spp" name="id_spp" aria-describedby="basic-addon1" readonly required> </td>
                      </tr>
                      <tr>
                        <th scope="row">Nominal</th>
                        <td><input type="number" class="form-control" value="<?php echo $resultspp['nominal'];?>" aria-label="alamat" name="bayar" aria-describedby="basic-addon1" readonly required> </td>
                      </tr>
                      <?php } ?>
                      tr>
                        <th scope="row">Petugas</th>
                        <td><input type="number" class="form-control" value="42019" aria-label="alamat" name="id_petugas" aria-describedby="basic-addon1" readonly required> </td>
                      </tr>
                      <tr>
                        <th scope="row">Pilih Bulan</th>
                        <td>
                            <div class="form-group">
                             
                              <select class="form-control" id="sel1" name="bulan_dibayar">
                                <option>pilih bulan</option>

                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>

                                
                              </select>
                            </div>
                            
                              
                        </td>
                      </tr>
                       <tr>
                        <th scope="row">Pilih Tahun</th>
                        <td>
                            <div class="form-group">
                             
                              <select class="form-control" id="sel1" name="tahun_dibayar">
                                <option>pilih tahun</option>
                                <?php for ($i=2018; $i <2040 ; $i++) { ?>
                                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                  <?php } ?>
                                
                                
                              </select>
                            </div>
                            
                              
                        </td>
                      </tr>
                      <th></th>
                      <td>
                        <a href="admin-siswa.php">
                        <button type="button" class="btn btn-primary">Kembali</button>
                        </a>
                        <a href="#">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        </a>
                    </td>
                    </tbody>
                  </table>
                  </form>

                </div>
              </div>
            </div>

            
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
