<?php if (isset($_SESSION['err'])) : ?>
    <div class="alert alert-danger">
        <?php
            echo $_SESSION['err'];
            unset($_SESSION['err']);
            ?>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['info'])) : ?>
    <div class="alert alert-success">
        <?php
            echo $_SESSION['info'];
            unset($_SESSION['info']);
            ?>
    </div>
<?php endif; ?>