    <head>
        <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    </head>
<?php
include ('koneksi.php');
$id = $_GET['id'];
$query = "select * from data where id='$id'";
$result =  mysqli_query($koneksi,$query) or die("gagal melakukan query");
     $data = mysqli_fetch_array($result);
?>
<div class="row">
    <div class="col-sm-4" ></div>
    <div class="col-sm-4" >

<div class="container">
<h3><b><p align="center">Edit Data Barang</p></b></h3>
<br>
 
<form name="form2" method="post" action="update.php">

                <input type="hidden" class="form-control" name="id" placeholder="ID" 
                 value="<?php echo $data['id']; ?>">
				<td><font color="gray">Customer No : </font><td><b><?php echo $data['customer_no']; ?><br><tr>
                <td>Name:<td><input type="text" class="form-control" name="name" placeholder="name"
                value="<?php echo $data['name']; ?>"><br><tr>
                <td>Phone:<td><input type="tel" class="form-control" name="phone" placeholder="phone"
                value="<?php echo $data['phone']; ?>"><br><tr>
               <td>Address:<td><input type="tel" class="form-control" name="address" placeholder="address"
                value="<?php echo $data['address']; ?>"><br><tr>
               
   
	
	 <input type="submit" class="btn btn-primary" value="Simpan">
				<input type="button"  onClick="self.history.back()" class="btn btn-success" value="Kembali">
	 </form>
	 
</div>
  <div class="col-sm-4" ></div>
  </div>
