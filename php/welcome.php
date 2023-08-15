<?php
include("config.php");
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Books || Home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <!-- header section starts  -->

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
                <a href="welcome.php">Home</a>
                <a href="#newsletter">Genres</a>
                <a href="viewbooks.php">Books</a>
                <a href="#review">Top reviewed</a>
                <a href="search.php">Search</a>
                <a href="request.php">Request</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->




    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>Welcome <span><?php echo  $_SESSION['username']; ?></span> </h3>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="php/showreview.php?id=9" class="swiper-slide"><img src="../image/book-1.jpg" alt=""></a>
                    <a href="php/showreview.php?id=8" class="swiper-slide"><img src="../image/book-2.jpg" alt=""></a>
                    <a href="php/showreview.php?id=34" class="swiper-slide"><img src="../image/book-3.jpg" alt=""></a>
                    <a href="php/showreview.php?id=29" class="swiper-slide"><img src="../image/book-4.jpg" alt=""></a>
                    <a href="php/showreview.php?id=30" class="swiper-slide"><img src="../image/book-5.jpg" alt=""></a>
                    <a href="php/showreview.php?id=22" class="swiper-slide"><img src="../image/book-6.jpg" alt=""></a>
                </div>
                <img src="../image/stand.png" class="stand" alt="">
            </div>

        </div>

    </section>

    <!-- home section ense  -->


    <!-- newsletter section starts -->

    <section class="newsletter" id="newsletter">

        <h1 class="heading"> <span>Genres</span> </h1>

        <form action="">
            <h3>Search for your favourite genre</h3>

            <div class="genres">

                <a href="genre.php?genre=art">Art</a><br><br>
                <a href="genre.php?genre=fantasy" class="">Fantasy</a><br><br>
                <a href="genre.php?genre=horror" class="">Horror</a><br><br>
                <a href="genre.php?genre=literature" class="">Literature</a><br><br>
                <a href="genre.php?genre=romance" class="">Romance</a><br><br>
                <a href="genre.php?genre=science fiction" class="">Science Fiction</a><br><br>
                <a href="genre.php?genre=thriller" class="">Thriller</a><br><br>
                <a href="genre.php?genre=history" class="">History</a><br><br>
                <a href="genre.php?genre=poetry" class="">Poetry</a><br><br>
                <a href="genre.php?genre=classic" class="">Classic</a><br><br>



            </div>


        </form>

    </section>

    <!-- newsletter section ends -->

    <!-- Top Review section starts  -->

    <section class="arrivals" id="review">

        <h1 class="heading"> <span>Top Reviewed</span> </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="registration.html" class="swiper-slide box">
                    <div class="image">
                        <img src="../image/book-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>A Court of Thorns and Roses</h3>
                        <div class="genre">Fantasy </div>

                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../image/book-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Harry Potter And The Goblet of Fire </h3>
                        <div class="genre">Fantasy </div>

                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../image/book-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Pet Semetary</h3>
                        <div class="genre">Horror </div>

                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../image/book-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Ebong Himu</h3>
                        <div class="genre">Romance </div>

                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../image/book-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Killing Floor</h3>
                        <div class="genre">Thriller </div>

                    </div>
                </a>

            </div>

        </div>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../image/book-6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The Book Artist</h3>
                        <div class="genre">Art </div>

                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../image/book-7.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Cage of Souls</h3>
                        <div class="genre">Science Fiction </div>

                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../image/book-8.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Nepolionic Wars</h3>
                        <div class="genre">History </div>

                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../image/book-9.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The Adventures of Tom Sawyer</h3>
                        <div class="genre">Classic </div>

                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../image/book-10.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The Six Of Crows</h3>
                        <div class="genre">Fantasy </div>

                    </div>
                </a>

            </div>

        </div>

    </section>

    <!-- arrivals section ends -->


    <?php
    include 'footer.php'
    ?>



    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="../js/script.js"></script>

    <!-- Chatbot Starts -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="KnowYourBooks" agent-id="b5ee8ebe-3e6f-4cb9-bd20-c18443db4819"
        language-code="en"></df-messenger>
    <!-- Chatbot Ends -->

</body>

</html>