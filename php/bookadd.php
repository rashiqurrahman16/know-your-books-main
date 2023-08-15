<?php
error_reporting(0);
include 'config.php';
session_start();


if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $publishername = $_POST["publishername"];
    $isbn = $_POST["isbn"];
    $description = $_POST["description"];
    $genre = $_POST["genre"];



    $sql = "SELECT * FROM books WHERE isbn='$isbn' or name='$name'";
    $result = mysqli_query($conn, $sql);

    if (!$result->num_rows > 0) {

        if ($_FILES["image"]["error"] == 4) {
            echo
            "<script> alert('Image Does Not Exist'); </script>";
        } else {
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)) {
                echo
                "
            <script>
              alert('Invalid Image Extension');
            </script>
            ";
            } else if ($fileSize > 1000000) {
                echo
                "
            <script>
              alert('Image Size Is Too Large');
            </script>
            ";
            } else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, 'image/' . $newImageName);
                $query = "INSERT INTO books VALUES('', '$name', '$publishername', '$isbn', '$description', '$genre', '$newImageName')";
                $result = mysqli_query($conn, $query);
                if ($result) {

                    echo "<script>alert('Book Successfully added.')</script>";
                    $name = "";
                    $publishername = "";
                    $isbn = "";
                    $description = "";
                    $genre = "";
                    header("Location: books.php");
                }
            }
        }
    } else {
        echo "<script>alert('Book Already Exists.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Books || Add Books</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../css/bookadd.css">
</head>

<body>
    <header class="header">

        <div class="header-1">

            <a href="#" class="logo"> <i class="fas fa-book"></i> Know Your Books </a>
            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="logout.php">Logout</a>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar d-flex justify-content-center">
                <a href="adminlist.php">Admins</a>
                <a href="userlist.php">Users</a>
                <a href="books.php">Books</a>
                <a href="requestlist.php">Request</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="col-nd-12">
            <div class="row">


                <div class="col-md-6">


                    <h5 class="text-center">Add Book</h5>

                    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                        <div class="from-group">
                            <label>Book Name</label>
                            <input type="text" placeholder="Enter a book name" name="name" required autocomplete="off">
                        </div>
                        <div class="from-group">
                            <label>Publisher Name</label>
                            <input type="text" placeholder="Enter publisher name" name="publishername" required
                                autocomplete="off">
                        </div>
                        <div class="from-group">
                            <label>ISBN No.</label>
                            <input type="number" placeholder="Enter isbn no." name="isbn" required autocomplete="off">
                        </div>
                        <div class="from-group">
                            <label>Description</label>
                            <input type="text" placeholder="Enter description" name="description" required
                                autocomplete="off">

                        </div>
                        <div class="from-group">
                            <label>Genre</label>
                            <input type="text" placeholder="Enter genre" name="genre" required autocomplete="off">
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="">
                        </div>

                        <br>
                        <input type="submit" name="submit" value="Add New Book" class="btn btn-success">
                    </form>
                </div>


            </div>

        </div>
    </div>

</body>

</html>