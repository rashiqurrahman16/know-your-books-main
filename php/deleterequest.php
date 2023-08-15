<?php

include('config.php');

$requestId = $_GET['id'];

$delete = "DELETE FROM `request` WHERE requestId = $requestId";
$query = mysqli_query($conn, $delete);
if ($query) {
    echo "<script>alert('Request have been Deleted')</script>";
} else {
    echo "<script>alert('Something Went wrong')</script>";
}
header("Location: requestlist.php");