<?php
include 'config.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Books || Admin Book Request Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/requestlist.css">

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
            <div class="row">
                <h1>All Request</h1>

                <table>
                    <tr>
                        <td>#</td>
                        <td>Userame</td>
                        <td>Request</td>
                        <td>Time</td>
                        <td>Action</td>
                        <br>
                    </tr>
                    <?php
                    $i = 1;
                    $rows = mysqli_query($conn, "SELECT * FROM request ORDER by requestId")
                    ?>

                    <?php
                    foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["comment"]; ?></td>
                        <td><?php echo $row["datetime"]; ?></td>
                        <td>
                            <a href="deleterequest.php?id=<?php echo $row["requestId"]; ?>"><i
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