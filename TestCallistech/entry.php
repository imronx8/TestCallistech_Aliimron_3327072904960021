</head>
	<head>
		<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>


<?php
include("koneksi.php");
$id ='ssss';
$customer_no = $_POST['customer_no'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$query = mysqli_query($koneksi,"insert into data values  ('$id','$customer_no','$name','$phone','$address')");
header("location:index.php");
?>
