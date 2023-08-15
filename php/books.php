<?php
include 'config.php';
session_start();

if (isset($_POST['delete'])) {
    $delete = "DELETE FROM books WHERE bookId = '$bookId' ";
    $result = mysqli_query($conn, $delete);
    if ($result) {
        echo "<script>alert('Book Deleted')</script>";
        header("books.php");
    } else {
        echo "<script>alert('Something Wrong Went.')</script>";
        header("books.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Books || Books List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="../css/books.css">

</head>

<body>
    <header class="header">

        <div class="header-1">
            <a href="adminlist.php" class="logo"> <i class="fas fa-book"></i> Know Your Books </a>
            <div class="icons">
                <?php
                if (isset($_SESSION['username'])) {
                    echo "<a href='logout.php'>Logout</a>";
                } else {
                    header("Location: adminlogin.php");
                }
                ?>
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

        <div class="col-md-12">
            <a href="bookadd.php" name="add" value="Add New Book" class="btn btn-success">Add Books</a>
            <br><br>

            <div class="row">
                <h1>Books</h1>

                <table>


                    <tr>
                        <td>#</td>
                        <td>Book Name</td>
                        <td>Publisher</td>
                        <td>ISBN No.</td>
                        <td>Genre</td>
                        <td>Image</td>
                        <td>Action</td>
                        <br>
                    </tr>
                    <?php
                    $i = 1;
                    $rows = mysqli_query($conn, "SELECT * FROM books ORDER by name")
                    ?>

                    <?php
                    foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["publishername"]; ?></td>
                        <td><?php echo $row["isbn"]; ?></td>
                        <td><?php echo $row["genre"]; ?></td>
                        <td><img class="bookimg" src="image/<?php echo $row["image"]; ?>"
                                title="<?php echo $row['image']; ?>" style="width: 40px">
                        </td>
                        <td>
                            <a href="deletebook.php?id=<?php echo $row["bookId"]; ?>"><i
                                    class="fa-solid fa-xmark"></i></a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>

</body>

</html>