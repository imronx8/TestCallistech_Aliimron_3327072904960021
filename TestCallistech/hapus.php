</head>
	<head>
		<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>


<?php
include("koneksi.php");
mysqli_query($koneksi,"DELETE from data WHERE id='$_GET[id]'");

header("location:index.php");
?>

 
