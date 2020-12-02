<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM rincian ORDER BY id_rincian DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    
    <header>
        <ul>
            <li><a href="add.php">TAMBAH PESANAN</a></li>
            <li><a href="index_cari.php">CARI PEMBELI</a></li>
            <li> <a href="index_login.php">LOGOUT</a></li>
        </ul>
    </header>
    <h2>TOKO HELM LARANG</h2>
    <table width='80%' border='1px' align ='center'>

    <tr>
         <th>ID Rincian</th> <th>Nama Pembeli</th> <th>ID Produk</th> <th>Nama Admin</th> <th>Alamat</th>
         <th>Opsi</th>  
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_rincian']."</td>"; 
        echo "<td>".$user_data['id_pembeli']."</td>";
        echo "<td>".$user_data['id_produk']."</td>";
        echo "<td>".$user_data['nama_admin']."</td>";
        echo "<td>".$user_data['alamat']."</td>";

   
        echo "<td><a href='edit.php?id_rincian=$user_data[id_rincian]'>Edit</a> | 
        <a href='delete.php?id_rincian=$user_data[id_rincian]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    
</body>
</html>
