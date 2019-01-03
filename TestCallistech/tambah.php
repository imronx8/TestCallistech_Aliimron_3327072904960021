
<? include 'koneksi.php'; ?>

 
</head>
	<head>
		<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<h3><p align="center">Entry Data</p></h3>
<br>

<div class="row">
    <div class="col-sm-4" ></div>
    <div class="col-sm-4" >
<form method="post" action="entry.php">

				<?php

$Host = "localhost";
$username = "root";
$password = "";
$database = "customer";
$koneksi = new mysqli( $Host, $username, $password, $database );
if ($koneksi->connect_error){
echo 'Gagal koneksi ke database';
} else {
//koneksi berhsil
}
// membuat query max
  $carikode = mysqli_query($koneksi, "select max(customer_no) from data") or die (mysql_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   $nilaikode = substr($datakode[0], 3);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   $kode_otomatis = "CRM".str_pad($kode, 4, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "CRM0001";
  }

				
			echo'	

          		<td><font color="gray">Create Customer - </font><td><b>"'.$kode_otomatis.'"<br><tr>
				Customer No. :<input type="text" class="form-control" name="customer_no" value="'.$kode_otomatis.'" readonly="readonly"><br>'?>
                Name:<input type="text" class="form-control" name="name" placeholder="Name"><br>
                Phone:<input type="tel" class="form-control" name="phone" placeholder="Phone"><br>
                 Address:<input type="tel" class="form-control" name="address" placeholder="Address"><br>
                
                

	
	 <input type="submit" class="btn btn-primary" value="Simpan">
	 			
                <input type="reset" class="btn btn-danger" value="Reset">
				<input type="button"  onClick="self.history.back()" class="btn btn-success" value="Kembali">
	    </form>


	
	</div>
    <div class="col-sm-4" ></div>
  </div>
</div>
	