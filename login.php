<?php

session_start();
include './database.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if(empty($email) || empty($password)) {
    header('location: login_form.php');
}

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    $_SESSION['info'] = 'Login successfully.';
    $_SESSION['auth'] = true;
    header('location: home.php');
} else {
    $_SESSION['err'] = 'Email or password is incorrect.';
    $_SESSION['auth'] = false;
    header('location: login_form.php');
}


