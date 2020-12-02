
<html>
<head>    
    <title>Toko HELM</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>

    <h2 line-height='50%' align='center'>daftar barang di gudang</h2>
    <table width='80%' border=1 class='table' align='center'>
    <tr>
        <th align='center' height='30px'>id_produk</th> 
        <th align='center'>merk</th> 
        <th align='center'>size</th>
        <th align='center'>id_gudang</th>
    </tr>
    <?php  
    include_once("config.php");
    $result = mysqli_query($mysqli, "SELECT 
    A.id_produk, A.merk, A.size, B.id_gudang FROM produk A INNER JOIN gudang B
    ON A.id_produk= B.id_produk");
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td height='30px'>".$user_data['id_produk']."</td>";
        echo "<td>".$user_data['merk']."</td>";    
        echo "<td>".$user_data['size']."</td>";  
        echo "<td>".$user_data['id_gudang']."</td>";    
    }
    ?>
     </table>
     <br/><br/>
     <h2 line-height='50%' align='center'>daftar pembeli</h2>

     <table width='80%' border=1 class='table' align='center'>
    <tr>
        <th align='center' height='30px'>id_pembeli</th> 
        <th align='center'>alamat</th> 
        <th align='center'>nomor hp</th>
        <th align='center'>id_rincian</th>
    </tr>
    <?php  
    include_once("config.php");
    $result = mysqli_query($mysqli, "SELECT 
    A.id_pembeli, A.alamat, A.nomor_hp, B.id_rincian FROM pembeli A INNER JOIN rincian B
    ON A.id_pembeli= B.id_pembeli");
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td height='30px'>".$user_data['id_pembeli']."</td>";
        echo "<td>".$user_data['alamat']."</td>";    
        echo "<td>".$user_data['nomor_hp']."</td>";  
        echo "<td>".$user_data['id_rincian']."</td>";    
    }
    ?>
     </table>
     <a href="index.php">Lanjutkan belanja</a><br/><br/>
</body>
</html>
 