<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id_produk DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<header>
    <ul>
    <a href="gabung.php">cek barang</a><br/><br/>
    </ul>
</header>
    <h2>TOKO HELM LARANG</h2>

    <table width='80%' border=1>

    <tr>
         <th>id_produk</th> <th>Size</th> <th>merk</th>  
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_produk']."</td>"; 
        echo "<td>".$user_data['size']."</td>";
        echo "<td>".$user_data['merk']."</td>";       
    }
    ?>
    </table>
    
</body>
</html>