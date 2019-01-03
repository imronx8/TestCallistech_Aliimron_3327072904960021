<?php
include("koneksi.php");
$id =$_POST['id'];

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address']; 

$query = mysqli_query($koneksi,"update data set name='$name',phone='$phone',address='$address' where id='$id'");

if($query)
			{
				header("location:index.php");

			}
			else
			{
				echo "Penyimpanan Gagal!!!".mysql_error();
			}
			

?>
