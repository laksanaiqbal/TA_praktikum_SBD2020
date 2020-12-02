<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_rincian = $_GET['id_rincian'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM rincian WHERE id_rincian=$id_rincian");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>