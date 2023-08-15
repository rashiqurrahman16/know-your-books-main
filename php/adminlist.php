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
    <title>Know Your Books || Admins</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../css/adminlist.css">
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
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>All Admins</h1>

                            <?php
                            $query = "SELECT * FROM admin";
                            $res = mysqli_query($conn, $query);

                            $output = "<table>
                            <tr>
                            <th>Id</th>
                            <th>Admin name</th>
                            <th>Email</th>
                            <th style='width: 10%'>Action</th>
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
                                <form method='POST'>
                                    <td>$id</td>
                                    <td>$username</td>
                                    <td>$email</td>
                                    <td>
                                    
                                    
                                    <button name='remove' class='btn'>Remove</button>
                                    
                                    
                                    </form>
                                        
                                    </td>
                                
                                ";
                            }

                            $output .= "
                            </tr>
                            </table>";
                            echo $output;

                            if (isset($_POST['remove'])) {


                                $sql = "DELETE FROM admin WHERE id= $id";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    echo "<script>alert('Admin Removed')</script>";
                                    header("Location: adminlist.php");
                                } else {
                                    echo "<script>alert('Something Wrong Went.')</script>";
                                }
                            }

                            ?>
                        </div>


                        <div class="col-md-6">
                            <?php

                            if (isset($_POST['add'])) {

                                $username = $_POST['username'];
                                $email = $_POST['email'];
                                $password = md5($_POST['password']);
                                $cpassword = md5($_POST['cpassword']);

                                if ($password == $cpassword) {
                                    $sql = "SELECT * FROM admin WHERE email='$email'";
                                    $result = mysqli_query($conn, $sql);
                                    if (!$result->num_rows > 0) {
                                        $sql = "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')";
                                        $result = mysqli_query($conn, $sql);
                                        if ($result) {
                                            echo "<script>alert('Admin added.')</script>";
                                            $username = "";
                                            $email = "";
                                            $_POST['password'] = "";
                                            $_POST['cpassword'] = "";
                                            header("Location: adminlist.php");
                                        } else {
                                            echo "<script>alert('Something Wrong Went.')</script>";
                                        }
                                    } else {
                                        echo "<script>alert('Email Already Exists.')</script>";
                                    }
                                } else {
                                    echo "<script>alert('Password Not Matched.')</script>";
                                }
                            }
                            ?>

                            <h1 class="text-center">Add Admin</h1>
                            <form action="" method="POST" class="add-admin">
                                <div class="from-group">
                                    <label>Name</label>
                                    <input type="text" placeholder="Enter a Name" name="username" required
                                        autocomplete="off">
                                </div>
                                <div class="from-group">
                                    <label>Email</label>
                                    <input type="email" placeholder="Enter an Email" name="email" required
                                        autocomplete="off">
                                </div>
                                <div class="from-group">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter Password" name="password"
                                        value="<?php echo $_POST['password']; ?>" required autocomplete="off">
                                </div>
                                <div class="from-group">
                                    <label>Confirm Password</label>
                                    <input type="password" placeholder="Enter Confirm Password" name="cpassword"
                                        value="<?php echo $_POST['cpassword']; ?>" required autocomplete="off">
                                </div>
                                <br>
                                <input type="submit" name="add" value="Add New Admin" class="btn btn-success">
                            </form>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>


</body>

</html>