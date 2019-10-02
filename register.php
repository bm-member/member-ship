<?php

session_start();
include './database.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if(empty($name) || empty($email) || empty($password)) {
    header('location: register_form.php');
}

$sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
$result = mysqli_query($conn, $sql);

if ($result) {
    $_SESSION['auth'] = true;
    $_SESSION['info'] = 'registrated successfully.';
    header('location: home.php');
} else {
    $_SESSION['auth'] = false;
    $_SESSION['err'] = 'Something is not right.Try again.';
    header('location: register_form.php');
}
