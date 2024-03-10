<?php
@include 'connection.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="image">
            <img src="../image/p1.jpeg" alt="">
        </div>
        <div class="login-container">
            <h2>Login</h2>
            <form action="#" method="POST">
                <input type="text" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="submit" value="Login" style="background-color:#eb8c34">
                <a style="text-align:center" href="../php/register.php">Register</a>
            </form>
        </div>
    </div>
</body>

</html>

<?php
@include '../php/DBConnection.php';
//session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $email = ($_POST['email']);
    $password = ($_POST['password']);

    $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($connection);
    } else {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($row) {
            $email = $row['email'];
            $type = $row['usertype'];
            $name = $row['name'];
            $id = $row['id'];

            $_SESSION['email'] = $email;
            $_SESSION['type'] = $type;
            $_SESSION['name'] = $name;
            $_SESSION['id'] = $id;

            if ($type == "user") {
                header("location: ../php/index.php");
            } elseif ($type == "Admin") {
                header("location: ../php/admin.php");
            } else if ($type == "co-admin") {
                header("location: ../php/assistant.php");
            }
        } else {
            echo '<script>alert("Your Login Name or Password is invalid")</script>';
        }
    }
}
?>