<?php 

session_start();

if (!isset($_SESSION["name"])) {
    header(("Location:../php/login.php"));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/film.css"> -->
    <link rel="stylesheet" href="../css/index.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        /* Creates a 4-column layout */
        gap: 20px;
        /* Space between cards */
        padding: 20px;
        margin-top: 100px;
    }

    .card {
        background-color: #f9f9f9;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 30px;
  padding-bottom: 100px;
  background-color: #eb8c34;
  padding: 30px;
  padding-bottom: 100px;
  background-color: #eb8c34;
    }

    .card-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        /* Keeps the aspect ratio of the image */
    }

    .card-title {
        margin: 10px 0;
    }

    .card-btn {
        background-color: white;
        color: white;
        border: none;
        padding: 10px 20px;
        margin-bottom: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        color: #eb8c34;

    }

    .card-btn:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body style="background-color:#1E1D1D">
    <!-- navigation bar -->
    <nav class="nav">
        <i class="uil uil-bars navOpenBtn"></i>
        <a href="#" class="logo">CINE<span>Plex</span></a>
        <ul class="nav-links">
            <i class="uil uil-times navCloseBtn"></i>
            <li><a href="../php/index.php">Home</a></li>
            <li><a href="../php/film.php">Movie</a></li>
            <li><a href="../php/about.php">About Us</a></li>
            <?php

            @include 'connection.php';
            if (isset($_SESSION["name"])) {

                echo '<div id="user-section" style = "margin-left:120px; display:inline-flex; border-radius:0">';
                echo '<i class="fa-solid fa-user"></i>';
                echo '<a style = "margin-left:10px; margin-right:5px;href="../php/login.php">' . $_SESSION["name"] . '</a>';
                echo '<a href="../php/logout.php">| Logout</a>';
                echo '</div>';
            } else {
                echo '<div id="user-section" style = "margin-left:120px; display:inline-flex; border-radius:0">';
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





    <div class="grid-container">


            <?php

            $sql = "SELECT * FROM film;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $date = $row['date'];
                    $time = $row['time'];
                    $price = $row['price'];
                    $image = $row['image'];

                    echo '        <div class="card">
                    <img src="'.$image.'" alt="Movie Name" class="card-image">
                    <h3 class="card-title">'.$name.'</h3>
                    <a href="../php/seat.php?name='.$name.'&date='.$date.'&time='.$time.'">  <button class="card-btn">Book</button>
                    </a>

                </div>';


                }
            }

            ?>
        </div>

    <a href="../php/seat.php"></a>






    <section class="footer" style="">
        <div class="footer-row">
            <img style="  width: 200px;" src="http://localhost/nipuna/image/logo.svg" alt="">

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