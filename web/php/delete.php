<?php
include_once "./connection.php";

$id = $_GET["deleteid"];
// echo $id;

$sql = "DELETE FROM film WHERE id='$id';";
$result = mysqli_query($conn, $sql);
if ($result) {
    header('location:../php/admin.php');
} else {
    die($conn);
}
?>