<!DOCTYPE html>
<?php
include 'koneksi.php';
include'fungsi/fungsi_rupiah.php';
include'fungsi/fungsi_indotgl.php';

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DataPembayaranSPP.xls");
?>
<html>

<head>
	<title>CETAK Data</title>
</head>
<body>
<h3><center>Laporan Pembayaran SPP</center></h3>
			 <br>
			  
			  <br><br>
          <!-- Row -->
          <div class="row">
		  
           
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
               
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" ">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
						<th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Bulan</th>
                        <th>Jumlah</th>
                        <th>Tanggl Bayar</th>
                        <th>Admin</th>                        										
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
						 <?php echo $no; ?>
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
						$no++;
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
            <br>
            <br>
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
	
 

 
</body>
</html>