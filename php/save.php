<?php
//End the session
session_start();
require "dbconnect.php";

$week = $_SESSION['Week'];
$id = $_SESSION['UserID'];
$sql = "UPDATE users SET week = '$week' WHERE userid = '$id'";

mysqli_query($conn, $sql);

header("location: ../index.php");
?>