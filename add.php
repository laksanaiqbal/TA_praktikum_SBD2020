<html>
<head>
    <title>Tambah pesanan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <h2>TOKO HELM LARANG</h2>

    <form action="add.php" method="post" name="form_login">
        <table width="25%" border="0">
        <tr> 
                <td>nama_admin</td>
                <td><input type="text" name="nama_admin"></td>
            </tr>
            <tr> 
                <td>id_pembeli</td>
                <td><input type="text" name="id_pembeli"></td>
            </tr>
            <tr> 
                <td>id_produk</td>
                <td><input type="text" name="id_produk"></td>
            </tr>

            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr> 
                <td>id_rincian</td>
                <td><input type="text" name="id_rincian"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</div>
    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_produk = $_POST['id_produk'];
        $nama_admin = $_POST['nama_admin'];
        $alamat = $_POST['alamat'];
        $id_pembeli = $_POST['id_pembeli'];
        $id_rincian = $_POST['id_rincian'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO rincian(id_produk,nama_admin,alamat,id_pembeli,id_rincian) VALUES('$id_produk','$nama_admin','$alamat','$id_pembeli','$id_rincian')");

        // Show message when user added
        echo "belanjaan added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>
