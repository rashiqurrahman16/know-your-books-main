<?php

include('config.php');

$id = $_GET['id'];

$delete = "DELETE FROM `admin` WHERE id = $id";
$query = mysqli_query($conn, $delete);
if ($query) {
    echo "<script>alert('Admin removed')</script>";
} else {
    echo "<script>alert('Something Went wrong')</script>";
}
header("Location: adminlist.php");