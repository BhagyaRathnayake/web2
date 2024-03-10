<?php include_once "../php/DBConnection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <?php
    $id =$_GET['updateid'];
    
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["film-up-title"];
        $date = $_POST["up-date"];
        $time = $_POST["up-time"];
        $price = $_POST["film-up-Price"];
        $image = $_POST["film-Image"];
        $image_path = "../image/$image";

        
        $sql ="UPDATE film SET filmname='$name', date='$date',time='$time', price=' $price',image=' $image_path' WHERE $fid=$id;";
        $result = mysqli_query($connection,$sql);
        if(!$result){
            die(mysqli_error($connection));
        }else{
            header('location:../php/admin.php');
        }
    }

    ?>




<?php 

$sql = "SELECT * FROM film  WHERE id=$id";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '<section id="update-film">
      <h2>Update Film</h2>
      <form action="" method="POST" enctype="multipart/form-data">
          <label for="update-film-name">Film Name:</label><br>
          <input type="text" id="update-film-name" name="update-film-name" required value=" '.$row["name"].'"><br><br>

          <label for="update-film-release-date">Release Date:</label><br>
          <input type="date" id="update-film-release-date" name="update-film-release-date" required><br><br>

          <label for="price">Price:</label><br>
          <input type="text" id="update-film-price" name="update-film-price" min="0" value=" '.$row["price"].'" required><br><br>

          <label for="image">Image:</label><br>
          <input type="text" id="image" name="image" value=" '.$row["image"].'" required><br><br>

          <input type="submit" id="btn" value="Update-Film">
      </form>

  </section>';
    }
  } else {
    echo "0 results";
  }
?>

</body>
</html>