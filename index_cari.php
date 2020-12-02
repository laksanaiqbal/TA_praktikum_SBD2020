<?php 
include 'db_connect.php';
?>
 <html>
     <head>
     <link rel="stylesheet" type="text/css" href="style.css">
     </head>
     
 <body>


<h3>cari pembeli</h3>
 
<form action="index_cari.php" method="get">
 <label>Cari :</label>
 <input type="text" name="cari">
 <input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil Pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
 <tr>
  <th>nomor</th>
 </tr>
 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($kon,"select * from rincian where id_rincian like '%".$cari."%'");    
 }else{
  $data = mysqli_query($kon,"select * from rincian");  
 }
 $no = 1;
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
  <td><?php echo $no++; ?></td>
  <td><?php echo $d['id_pembeli']; ?></td>
 </tr>
 <?php } ?>
</table>
</body>
</html>