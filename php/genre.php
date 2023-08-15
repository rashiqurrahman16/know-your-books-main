<?php
include("config.php");
session_start();
$genre = $_GET['genre']
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Books || Books</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../css/genre.css">
</head>

<body>

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
                <a href="../index.php">Genre</a>
                <a href="viewbooks.php">Books</a>
                <a href="search.php">Search</a>
                <a href="request.php">Request</a>

            </nav>
        </div>
    </header>

    <div class="container py-5">
        <h1 class="genre"><?php echo ("$genre") ?></h1>
        <div class="row mt-4">
            <?php
            $rows = mysqli_query($conn, "SELECT * FROM books WHERE genre='$genre' ORDER by name")
            ?>

            <?php
            foreach ($rows as $row) : ?>

            <div class="col-md-3 px-5">
                <div class="card">
                    <img src="image/<?php echo $row['image']; ?>" alt="bookimg">
                    <div class="card-body">

                        <h2 class="card-title"><?php echo $row['name']; ?></h4>
                            <h4 class="card-title"><?php echo $row['genre']; ?></h3>
                                <p class="card-text">
                                    <?php echo $row['description']; ?>
                                </p>
                                <a href="showreview.php?id=<?php echo $row['bookId']; ?>">View Reviews</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>


    <?php
    include 'footer.php'
    ?>

    <!-- Chatbot Starts -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="KnowYourBooks" agent-id="b5ee8ebe-3e6f-4cb9-bd20-c18443db4819"
        language-code="en"></df-messenger>
    <!-- Chatbot Ends -->

</body>

</html>