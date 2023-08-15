<?php
include("config.php");
session_start();


$username = $_SESSION['username'];



error_reporting(0);

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['add'])) {

    $comment = $_POST['comment'];

    $sql = "SELECT * FROM request WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $sql = "INSERT INTO request (username, comment, datetime)
                    VALUES ('$username', '$comment', Now())";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Request Added.')</script>";
        header("Location: request.php");
    } else {
        echo "<script>alert('Something Wrong Went.')</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Books || Add Request</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../css/addrequest.css">
</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">
            <a href="../index.php" class="logo"> <i class="fas fa-book"></i> Know Your Books </a>
            <div class="icons">
                <?php
                if (isset($_SESSION['username'])) {
                    echo "<a href='logout.php'>Logout</a>";
                }
                ?>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar d-flex justify-content-center">
                <a href="../index.php">Home</a>
                <a href="../index.php">Genres</a>
                <a href="viewbooks.php">Books</a>
                <a href="search.php">Search</a>
                <a href="request.php">Request</a>
            </nav>
        </div>
    </header>

    <!-- header section ends -->


    <div class="container">
        <form action="" method="POST" class="addrequest">
            <p class="addrequesttext" style="font-size: 2rem; font-weight: 800;">Add Review</p>

            <h2>Username: <?php echo ("$username") ?></h2><br>
            <h2>Write a request below </h2>
            <br>
            <div class="input-group">
                <textarea name="comment" id="comment" cols="140" rows="10" required></textarea>
            </div>
            <br>
            <div>
                <button name='add' class='btn'>Submit</button>
            </div>
        </form>
    </div>

    <!-- Chatbot Starts -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="KnowYourBooks" agent-id="b5ee8ebe-3e6f-4cb9-bd20-c18443db4819"
        language-code="en"></df-messenger>
    <!-- Chatbot Ends -->

</body>

</html>