<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membership</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Memebrship</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <?php if ($_SESSION['auth'] ?? false) : ?>
                    <a class="nav-item nav-link" href="logout.php">logout</a>
                <?php else: ?>
                    <a class="nav-item nav-link" href="login_form.php">Login</a>
                    <a class="nav-item nav-link" href="register_form.php">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>