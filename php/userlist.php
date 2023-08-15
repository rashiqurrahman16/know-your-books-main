<?php
error_reporting(0);
include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Books || Users List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/userlist.css">
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
        <div class="col-nd-12">
            <div class="row">

                <h1>All Users</h1>
                <?php
                $query = "SELECT * FROM users";
                $res = mysqli_query($conn, $query);

                $output = "<table>
                            <tr>
                            <th>Id</th>
                            <th>User name</th>
                            <th>Email</th>
                            </tr>";
                if (mysqli_num_rows($res) < 1) {
                    $output .= "<tr><td colspan='3' class='text-center'>No new admin</td></tr>";
                }

                while ($row = mysqli_fetch_array($res)) {
                    $id = $row['id'];
                    $username = $row['username'];
                    $email = $row['email'];

                    $output .= "
                                <tr>
                                    <td>$id</td>
                                    <td>$username</td>
                                    <td>$email</td>
                                
                                ";
                }

                $output .= "
                            </tr>
                            </table>";
                echo $output;
                ?>


            </div>
        </div>
    </div>


</body>

</html>