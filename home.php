<?php

include './auth.php';
include './database.php';

include './header.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <?php include './alert.php'; ?>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created Date</th>
                    <th>Actions</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo date( 'd-M-Y', strtotime($row['created_date'])); ?></td>
                        <td>
                            <a href="" class="btn btn-success btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Del</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>

<?php
include './footer.php';
?>