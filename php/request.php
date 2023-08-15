<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Books || Request Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/request.css">

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



    <div class="container py-5">

        <?php
        $rows = mysqli_query($conn, "SELECT * FROM request ORDER by datetime ASC")
        ?>


    </div>
    <div class="container">
        <div>
            <h1 class="text-center">Request List</h1>
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="addrequest.php" php class="btn">Add Request</a><br>
                    </div>
                </div>
            </div>



            <?php
            $rows = mysqli_query($conn, "SELECT * FROM request ORDER by datetime ASC")
            ?>

            <?php foreach ($rows as $row) : ?>

            <div class=" col-md-12 px-5 py-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $row['username']; ?></h4>
                            <span><?php echo $row['datetime']; ?></span><br>
                            <p class="card-text">
                                <?php echo $row['comment']; ?>
                            </p>

                    </div>
                </div>
            </div>




            <?php endforeach; ?>

        </div>
    </div>

    <div>
        <?php include("footer.php") ?>
    </div>

    <!-- Chatbot Starts -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="KnowYourBooks" agent-id="b5ee8ebe-3e6f-4cb9-bd20-c18443db4819"
        language-code="en"></df-messenger>
    <!-- Chatbot Ends -->

</body>

</html>