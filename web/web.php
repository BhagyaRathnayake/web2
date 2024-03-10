<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Our Cinema</h1>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">Schedule</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="slider">
        <div class="container">
            <!-- PHP code to fetch and display movie posters from database -->
            <?php
                // Example PHP code for fetching movie posters from a database
                $movies = array(
                    array("title" => "Movie 1", "image" => "movie1.jpg"),
                    array("title" => "Movie 2", "image" => "movie2.jpg"),
                    array("title" => "Movie 3", "image" => "movie3.jpg"),
                );

                foreach ($movies as $movie) {
                    echo '<div class="slide">';
                    echo '<img src="images/' . $movie["image"] . '" alt="' . $movie["title"] . '">';
                    echo '<h2>' . $movie["title"] . '</h2>';
                    echo '</div>';
                }
            ?>
        </div>
    </section>

    <section id="upcoming-movies">
        <div class="container">
            <h2>Upcoming Movies</h2>
            <!-- Example list of upcoming movies -->
            <ul>
                <li>Movie 1 - Release Date</li>
                <li>Movie 2 - Release Date</li>
                <li>Movie 3 - Release Date</li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Cinema Website. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>