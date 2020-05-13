<?php include __DIR__ . '/partials/header.php'; ?>

<div class="card shadow p-1">
    <div class="card-header">
        <?php echo $lang['Registration'] ?>
    </div>
    <div class="card-body">
        <form action="/register" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>
                    <?php echo $lang['Username'] ?>
                </label>
                <input class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label>
                    <?php echo $lang['Email'] ?>
                </label>
                <input class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label>
                    <?php echo $lang['Password'] ?>
                </label>
                <input class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label>
                    <?php echo $lang['Repeat_password'] ?>
                </label>
                <input class="form-control" name="repeat_password" required>
            </div>
            <div class="form-group">
                <label>
                    <?php echo $lang['About'] ?>
                </label>
                <textarea class="form-control" rows="4" name="about"></textarea>
            </div>
            <div class="form-group">
                <label>
                    <?php echo $lang['Add_photo'] ?>
                </label>
                <input type="file" class="form-control-file" name="image" required>
            </div>
            <div class="form-group d-flex align-items-center">
                <button type="submit" class="btn btn-primary mr-auto">
                    <?php echo $lang['Submit'] ?>
                </button>
                <a href="/">
                    <?php echo $lang['Already_have_account'] ?>
                </a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
