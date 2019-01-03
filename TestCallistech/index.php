<html>
<head>

    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Ali Imron</title>
<style>
h2 {
	
    background-size: 60px 40px;
	background-image:a.jpg;
}
</style>
</head>
<body>

<table width="1000px" height="700px" align="center">

<tr><td colspan="2" background="1.jpg" height="190px">
  </td>
</tr>

<td valign="top" align="center">


<?php
include("koneksi.php");
?>       
<center>  
  <table class="table table-bordered" border="1" >
    <thead>
      <tr>
        <th>No</th>
        <th>Customer No.</th>
       <th>Name</th>
      <th>Phone</th>
      <th>Address</th>

      <th colspan="3"><center>Action</center></th>
      </tr>
	  <?php
    $no=1;
$query = "select * from data";
$result = mysqli_query($koneksi,$query);
//$no = 0;
while ($data = mysqli_fetch_array($result)){
//$no++;
?>
    </thead>
    <tbody>
      <tr>
       <td><?php echo $no; ?></td>
<td><?php echo $data['customer_no']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['phone']; ?></td>
<td><?php echo $data['address']; ?></td>


<td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
<td><a href="hapus.php?id=<?php echo $data['id']; ?>">Delete</a></td>
      </tr>
	  <?php
    $no++;
}
?>
</table>
<center> 
<span align="right">
<a href="tambah.php" class="btn btn-info" role="button" >INPUT DATA >>  </a>
</span>

</table>
</body>

</html>
