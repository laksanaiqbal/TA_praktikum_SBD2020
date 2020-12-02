<!DOCTYPE html>
<html>
<head>
    <title>login sukses</title>
    
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>

	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index_login.php?pesan=belum_login");
	}
	?>

	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

	<br/>
	<br/>

	<a href="logout.php">lanjut</a>


</body>
</html>