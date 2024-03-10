<?php include "../php/connection.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Film Management - Admin Panel</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
  <header>
    <h1>Film Ticket Booking System</h1>
    <h2>Admin Panel</h2>
  </header>

  <main>
    <!-- add film to the database -->
    <section id="add-film">
      <h2>Add Film</h2>
      <form id="add-film-form" action="./admin.php" method="POST" enctype="multipart/form-data">
        <label for="film-title">Title:</label>
        <input type="text" id="film-title" name="film-title" required><br><br>
        <label for="cars">Choose a date:</label>
        <select name="date" id="date">
          <option value="Monday">Monday</option>
          <option value="Tuesday">Tuesday</option>
          <option value="Wednesday">Wednesday</option>
          <option value="Thursday">Thursday</option>
          <option value="Friday">Friday</option>
          <option value="Saturday">Saturday</option>
          <option value="Sunday">Sunday</option>
        </select><br><br>
        <label for="cars">Choose a Time:</label>
        <select name="time" id="time">
          <option value="10.00-1.00">10.00-1.00</option>
          <option value="3.00-6.00">3.00-6.00</option>
          <option value="8.00-11.00">8.00-11.00</option>
        </select><br><br>
        <label for="film-title">Image:</label>
        <input type="text" id="film-Image" name="film-Image" required><br><br>
        <label for="film-title">Ticket Price:</label>
        <input type="text" id="film-Price" name="film-Price" required><br><br>
        <button type="submit" name="Add_film">Add Film</button>
      </form>
    </section>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Add_film'])) {
      $fname = $_POST["film-title"];
      $fdate = $_POST["date"];
      $ftime = $_POST["time"];
      $price = $_POST["film-Price"];
      $image = $_POST["film-Image"];
      $image_path = "../image/$image";



      $sql = "INSERT INTO `film`(name, date, time,price, image) VALUES ('$fname','$fdate','$ftime','$price','$image_path');";

      $result = mysqli_query($conn, $sql);
      if ($result) {
        header("location:./admin.php");
      }
    }


    ?>







    <!-- add film to the database -->
    <section id="update-film">
      <h2>Update Film</h2>
      <form id="update-film-form">
        <label for="film-title">Title:</label>
        <input type="text" id="film-up-title" name="film-up-title" required><br><br>
        <label>Choose a date:</label>
        <select name="up-date" id="date">
          <option value="Monday">Monday</option>
          <option value="Tuesday">Tuesday</option>
          <option value="Wednesday">Wednesday</option>
          <option value="Thursday">Thursday</option>
          <option value="Friday">Friday</option>
          <option value="Saturday">Saturday</option>
          <option value="Sunday">Sunday</option>
        </select><br><br>
        <label>Choose a Time:</label>
        <select name="up-time" id="time">
          <option value="10.00-1.00">10.00-1.00</option>
          <option value="3.00-6.00">3.00-6.00</option>
          <option value="8.00-11.00">8.00-11.00</option>
        </select><br><br>
        <label for="film-up-image">Image:</label>
        <input type="text" id="film-up-Image" name="film-Image" required><br><br>
        <label for="film-up-price">Ticket Price:</label>
        <input type="text" id="film-up-Price" name="film-up-Price" required><br><br>
        <button type="submitUpdate">Update Film</button>
      </form>
    </section>





    <div class="container">
      <h3>All movies</h3>
      <table>
        <thead>
          <tr>
            <th>Title</th>
            <th>Date</th>
            <th>Image</th>
            <th>Price</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <?php

            $sql = "SELECT * FROM film;";
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) > 0) {

              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["time"] . "</td>";
                echo '<td><img src="' . $row["image"] . '" alt="Film 1"></td>';
                echo "<td>" . $row['price'] . "</td>";
                echo '<td>
<button class="update-btn" name="update"><a href="../php/update.php?updateid=' . $row["id"] . '"> Update</a></button>
<button class="delete-btn"><a href="../php/delete.php?deleteid=' . $row["id"] . '">Delete</a></button>
</td>';
              }
            } ?>


           



            <!-- <td>Film Title 1</td>
            <td>2024-03-02</td>
            <td><img src="image1.jpg" alt="Film 1 Image"></td>
            <td>$10.00</td>
            <td><button>Update</button></td>
            <td><button>Delete</button></td> -->
          </tr>
        </tbody>
      </table>
    </div>

    <section class="assistant_register">

      <h2>Assistant Register</h2>
      <form action="admin.php" method="post">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <input type="submit" id="submit" name="assistant_register" value="Register">
      </form>

      <?php



      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["assistant_register"])) {


        $fullNamePattern = '/^[a-zA-Z\ ]+$/';
        $phoneNumberPattern = '/^0\d{9}$/';
        $passwordPattern = '/^.{5,}$/';


        if ($_POST["name"] == "") {
          echo '<script>alert("Name cant be empty")</script>';
        } elseif (!preg_match($fullNamePattern, $_POST["name"])) {
          echo '<script>alert("Full name must contain only Alphabetic characters")</script>';
        } elseif ($_POST["email"] == "") {
          echo '<script>alert("email cant be empty")</script>';
        } elseif ($_POST["phone"] == "") {
          echo '<script>alert("phoneNumber cant be empty")</script>';
        } elseif (!preg_match($phoneNumberPattern, $_POST["phone"])) {
          echo '<script>alert("Invalid Phone Number")</script>';
        } elseif ($_POST["password"] !== $_POST["confirm_password"]) {
          echo '<script>alert("Passwords doesnt match")</script>';
        } elseif (!preg_match($passwordPattern, $_POST["password"])) {
          echo '<script>alert("Password must be at least 5 characters long")</script>';
        } else {
          $name = $_POST["name"];
          $phoneNumber = $_POST["phone"];
          $email = $_POST["email"];
          $password = $_POST["password"];
          $conformPassword = $_POST["confirm_password"];
          $userType = "co-admin";
          $sql = "INSERT INTO user(name,number,email,password,usertype) 
VALUES('$name','$phoneNumber','$email','$password','$userType');";
          $result = mysqli_query($conn, $sql);

         
        }
      }

      ?>








    </section>






  </main>
  <script src="script.js"></script>
</body>

</html>