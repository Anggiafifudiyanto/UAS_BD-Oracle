<!DOCTYPE html>
<?php
include 'koneksi.php';
include'fungsi/fungsi_rupiah.php';
include'fungsi/fungsi_indotgl.php';
?>


<?php include'header.php' ?>

<body id="page-top">
  <div id="wrapper">
    <?php include'sidebar.php' ?>
	
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
		<?php include'topbar.php' ?>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Laporan</li>
            </ol>
          </div>
		  <!-- Isi-->
			 <h3><center>Laporan Pembayaran SPP</center></h3>
			 <br>
			  <a class='btn btn-success' href='cetak.php'  target="_blank"> <i class='fa fa-print'></i> print</a>
			   <a class='btn btn-primary' href='cetak_excel.php'  target="_blank"> <i class='fa fa-table '></i>  xls</a>
			  <br><br>
          <!-- Row -->
          <div class="row">
		  
           
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
               
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>ID Transaksi</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Bulan</th>
                        <th>Jumlah</th>
                        <th>Tanggal Bayar</th> 
                        <th>Admin TU</th>                        										
                      </tr>
                    </thead>
                    
                    <tbody>
					
            <?php 
            $no = 1;
          $total_semua = 0;
                      $stid = oci_parse($koneksi, 'SELECT siswa.*, admin_tu.*, transaksi.* FROM transaksi 
            transaksi INNER JOIN siswa siswa ON transaksi.ID_SISWA = siswa.ID_SISWA 
            
            INNER JOIN admin_tu admin_tu ON transaksi.ID_ADMIN = admin_tu.ID_ADMIN ORDER BY transaksi.ID_TRANSAKSI ASC');


                      oci_execute($stid);

                      while (($row = oci_fetch_array ($stid, OCI_BOTH)) != false) {
                      
                        ?>
                      <tr>
                 <td>
             <?php echo $no++;?>
            </td>
                        <td>
             <?php echo $row["ID_TRANSAKSI"];?>
            </td>
						<td>
						 <?php echo $row["NAMA_SISWA"];?>
						</td>
						<td>
						 <?php echo $row["ID_KELAS"];?>
						</td>
						<td>
						 <?php echo $row["BULAN"];?>
						</td>
						<td>
						 <?php echo $row["JUMLAH"];?>
						</td>
                        <td>
             <?php echo $row["TGLBAYAR"];?>
            </td>
                   <td>
             <?php echo $row["NAMA_ADMIN"];?>
            </td>
                                             
                      </tr>     
                                                          
                    </tbody>
					 <?php
					
						}
						
					?>
                  </table>
                </div>
              </div>
            </div>
			
			
          </div>
          
		  <!-- Row -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Popover basic -->
              <div class="card mb-4">
               
                <div class="card-body">
                 
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Dismiss on next click -->
              <div class="card mb-4">
                
                <div class="card-body">
                 <center>Bekasi, <?php echo tgl_indo($hari_ini); ?></center>
							<b><center>Kepala Tata Usaha</center></b>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<b><center>Neni Kurniasih S.Pd</center></b>
                </div>
              </div>
            </div>
		  
		  
			
			

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="../masuk.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
    
    </div>
  </div>

  

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script> 
<!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>  
</body>

</html>