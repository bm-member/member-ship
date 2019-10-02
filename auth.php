<?php 

if(!isset($_SESSION)) {
    session_start();
}


if(!$_SESSION['auth']) {
    header('location: login_form.php');
    exit();
}

