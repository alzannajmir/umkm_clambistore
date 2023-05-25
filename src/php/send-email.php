<?php

include_once 'db.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$email = $_POST["email"];
$city = $_POST["city"];
$subjek = $_POST["subjek"];
$pesan = $_POST["pesan"];
print_r($_POST);

$query = "INSERT INTO send_mail ( email, city, subjek, pesan, read_status)
VALUES ( '$email', '$city', '$subjek', '$pesan', 0)";

if (mysqli_query($conn, $query)) {
  header('Location: ../../index.php');
} else {
  echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
