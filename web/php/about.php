<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/index.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>About Page</title>
    <style>
        #user-section{
    background-color: #4A98F7;
    padding: 10px;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 2rem;
  }
    </style>
</head>

<body style="background-color:#1E1D1D">
    <div class="heroPage">
        <!-- navigation bar -->
        <nav class="nav">
            <i class="uil uil-bars navOpenBtn"></i>
            <a href="#" class="logo">CINE<span>Plex</span></a>
            <ul class="nav-links">
                <i class="uil uil-times navCloseBtn"></i>
                <li><a href="../php/index.php">Home</a></li>
                <li><a href="../php/film.php">Movie</a></li>
                <li><a href="../php/event.php">Event</a></li>
                <li><a href="../php/about.php">About Us</a></li>
            <?php

            @include 'connection.php';
            session_start();
            if (isset($_SESSION["name"])) {

                echo '<div id="user-section" style = "margin-left:120px; display:inline-flex; border-radius:0">';
                echo '<i class="fa-solid fa-user"></i>';
                echo '<a style = "margin-left:10px; margin-right:5px;href="../php/login.php">' . $_SESSION["name"] . '</a>';
                echo '<a href="../php/logout.php">| Logout</a>';
                echo '</div>';
            } else {
                echo '<div id="user-section" style = "margin-left:120px; display:inline-flex; border-radius:0; background-color:#EB8C34">';
                echo '<li><a href="../php/login.php">Login</a></li>';
                echo '</div>';
            }

            ?>
            <i class="uil uil-search search-icon" id="searchIcon"></i>
            <div class="search-box">
                <i class="uil uil-search search-icon"></i>
                <input type="text" placeholder="Search here..." />
            </div>

    </nav>



    </div>



    <section>
        <div class="container" style="margin-bottom:50px">
            <h1>About US</h1>
            <div class="about-page" style="margin-bottom: 200px;">
                <div class="left-side">

                </div>
                <div class="right-side">
                    <p> <span style="color:#eb8c34">Cineplex </span>is your premier destination for all things film. With a passion for cinema and a
                        commitment to excellence, we offer a diverse selection of movies, state-of-the-art theaters, and
                        a vibrant online community for film lovers. Join us in celebrating the magic of storytelling and
                        the joy of shared experiences at Cineplex.
                    </p>
                </div>
            </div>
        </div>
    </section>




















    <section class="footer" style="">
        <div class="footer-row">
        <img style = "  width: 200px;"src="http://localhost/nipuna/image/logo.svg" alt="">

            <div class="footer-col">
                <h4>Follow us on</h4>
                <ul class="links">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i> twitter</a></li>

                </ul>
            </div>
            <div class="footer-col">
                <h4>Explore</h4>
                <ul class="links">
                    <li><a href="../php/film.php">Movies</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">©CinePex, Inc.</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 style="margin-bottom:10px;margin-top:20px">Newsletter</h4>

                <form action="#">
                    <input type="text" placeholder="Your email" required>
                    <button type="submit">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </section>



    <script src="../js/index.js"></script>
</body>

</html>