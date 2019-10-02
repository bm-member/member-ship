<?php

include './config.php';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    exit("Connection Fail " . mysqli_connect_errorno());
}
