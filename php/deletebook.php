<?php

include('config.php');

$bookId = $_GET['id'];

$delete = "DELETE FROM `books` WHERE bookId = $bookId";
$query = mysqli_query($conn, $delete);
if ($query) {
    echo "<script>alert('Book Deleted')</script>";
} else {
    echo "<script>alert('Something Went wrong')</script>";
}
header("Location: books.php");