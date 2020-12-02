<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id_rincian = $_POST['id_rincian'];
    $nama_admin=$_POST['nama_admin'];
    $alamat=$_POST['alamat'];
    $id_produk=$_POST['id_produk'];
    $id_pembeli=$_POST['id_pembeli'];

    $result = mysqli_query($mysqli, "UPDATE rincian SET id_pembeli='$id_pembeli', id_rincian='$id_rincian',nama_admin='$nama_admin',
     alamat='$alamat', id_produk='$id_produk' WHERE id_rincian='$id_rincian'");

    header("Location: index.php");
}
?>
<?php

$id_rincian = $_GET['id_rincian'];

$result = mysqli_query($mysqli, "SELECT * FROM rincian WHERE id_rincian='$id_rincian'");

while($user_data = mysqli_fetch_array($result))
{
    $id_rincian = $user_data['id_rincian'];
    $nama_admin=$user_data['nama_admin'];
    $alamat=$user_data['alamat'];
    $id_produk=$user_data['id_produk'];
    $id_pembeli=$user_data['id_pembeli'];
}
?>
<html>
<head>    
    <title>EDIT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2 align='center' line-height='50%'>Edit Rincian Belanja</h2>

    <div class="kotak">
    <form action="edit.php" method="post" class="form_login">
     <input type="hidden" name="id_rincian" class="form_login" value=<?php echo $id_rincian;?>>
     <label>Nama Admin</label>
     <input type="text" name="nama_admin" class="form_login" value=<?php echo $nama_admin;?>>
     <label>ID Pembeli</label>
     <input type="text" name="id_pembeli" class="form_login" value=<?php echo $id_pembeli;?>>
     <label>Alamat</label>
     <input type="text" name="alamat" class="form_login" value=<?php echo $alamat;?>>
     <label>ID Produk</label>
     <input type="text" name="id_produk" class="form_login" value=<?php echo $id_produk;?>>
     <input type="submit" name="update"  class="submit" value="update">
 </form>
</div>
</body>
</html>