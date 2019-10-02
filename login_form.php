<?php include './header.php'; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">

            <?php include './alert.php' ?>

            <form action="login.php" method="post" autocomplete="false">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>