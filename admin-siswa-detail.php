<!DOCTYPE html>
<?php 
  include("koneksi.php");
  session_start();
  if(($_SESSION['status']!="login") && ($_SESSION['level']!="admin")){
    header("location:login.php?pesan=belum_login");
  }
  $id = $_GET['id'];
  $query = mysqli_query($mysqli,"select * from siswa where nisn=".$id);
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
                  <h6 class="m-0 font-weight-bold text-primary">TDetail Data Siswa</h6>
                                  
                </div>
                
                <!-- Card Body -->
                <div class="card-body">
                   <form action="proses_tambah_siswa.php" method="POST">
                  <table class="table">

                    <tbody>
                    <?php 
                      while($data=mysqli_fetch_array($query)){
                      ?>
                      <tr>
                        <th scope="row">NISN</th>
                        <td><input type="number" value="<?php echo $data['nisn']; ?>" readonly class="form-control" placeholder="NISN" aria-label="nisn" name="nisn" aria-describedby="basic-addon1" required></td>
                      </tr>
                      <tr>
                        <th scope="row">NIS</th>
                        <td><input type="number" value="<?php echo $data['nis']; ?>" class="form-control" placeholder="NIS" aria-label="nis" name="nis" aria-describedby="basic-addon1" required readonly></td>
                      </tr>
                      <tr>
                        <th scope="row">Nama Lengkap</th>
                        <td><input type="text" value="<?php echo $data['nama']; ?>" class="form-control" placeholder="Nama Lengkap" aria-label="nama" name="nama" aria-describedby="basic-addon1" required readonly> </td>
                      </tr>
                      <tr>
                        <th scope="row">No telp</th>
                        <td><input type="number" value="<?php echo $data['no_telp']; ?>" class="form-control" placeholder="No telp" aria-label="alamat" name="no_telp" aria-describedby="basic-addon1" required readonly> </td>
                      </tr>
                      <tr>
                        <th scope="row">Alamat</th>
                        <td><input type="text"  value="<?php echo $data['alamat']; ?>" class="form-control" placeholder="Alamat" aria-label="alamat" name="alamat" aria-describedby="basic-addon1" required readonly> </td>
                      </tr>
                      <tr>
                        <th scope="row">Kelas</th>
                        <td>
                            <div class="form-group">
                             
                              
                                <?php 
                                  $query = "select * from kelas where id_kelas=".$data['id_kelas'];
                                  $sql = mysqli_query($mysqli, $query);
                                  while($kelas=mysqli_fetch_array($sql)){
                                ?>
                                <input type="text"  value="<?php echo $data['id_kelas'].'-'.$kelas['nama_kelas'] ; ?>" class="form-control" placeholder="Alamat" aria-label="alamat" name="alamat" aria-describedby="basic-addon1" required readonly> 
                                <?php  }?>
                            </div>
                            
                              
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">SPP</th>
                        <td>
                            <div class="form-group">
                             
                              
                                <?php 
                                  $query = "select * from spp where id_spp=".$data['id_spp'];
                                  $sql = mysqli_query($mysqli, $query);
                                  while($spp=mysqli_fetch_array($sql)){
                                ?>
                                <input type="text"  value="<?php echo $data['id_spp'].'-'.$spp['nominal'].'-'.$spp['tahun'] ; ?>" class="form-control" placeholder="Alamat" aria-label="alamat" name="alamat" aria-describedby="basic-addon1" required readonly> 
                                <?php  }?>
                            </div>
                            
                              
                        </td>
                      </tr>
                      <?php } ?>
                      <th></th>
                      <td>
                        <a href="admin-petugas.php">
                        <button type="button" class="btn btn-primary">Kembali</button>
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
