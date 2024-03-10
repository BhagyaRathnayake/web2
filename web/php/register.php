<?php 
@include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="register-container">
            <h2>Register</h2>
            <form action="#" method="POST">
                <input type="text" placeholder="Name" name="name" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="tel" placeholder="Phone Number" name="phone" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
                <input type="submit" value="Register" style="background-color:#eb8c34">
            </form>
            <div class="message"></div>
        </div>
    </div>
</body>

</html>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
if (strlen($password)>5) {
  
  if ($password == $cpassword) {
    $usertype = "user";

    $sql = "INSERT INTO user(name, number, email, password, usertype) VALUES ('$name','$phone','$email','$password','$usertype');";

    if (mysqli_query($conn, $sql)) {
        header("Location: ./login.php");
        exit; 
    } else {
        echo '<script>alert("Something went wrong");</script>';
    }
} else {
    echo '<script>alert("Passwords do not match");</script>';
}
}
else{
  echo '<script>alert("Passwords should contain more than 5 characters");</script>';

}
}

?>