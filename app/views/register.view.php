<?php include __DIR__ . '/partials/header.php'; ?>

<div class="card">
    <div class="card-header">
        <?php echo $lang['Registration'] ?>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>
                <?php echo $lang['Username'] ?>
            </label>
            <input class="form-control" required>
        </div>
        <div class="form-group">
            <label>
                <?php echo $lang['Email'] ?>
            </label>
            <input class="form-control" required>
        </div>
        <div class="form-group">
            <label>
                <?php echo $lang['Password'] ?>
            </label>
            <input class="form-control" required>
        </div>
        <div class="form-group">
            <label>
                <?php echo $lang['Repeat_password'] ?>
            </label>
            <input class="form-control" required>
        </div>
        <div class="form-group">
            <label>
                <?php echo $lang['About'] ?>
            </label>
            <textarea class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label>
                <?php echo $lang['Add_photo'] ?>
            </label>
            <input type="file" class="form-control-file">
        </div>
        <div class="form-group d-flex align-items-center">
            <button type="submit" class="btn btn-primary mr-auto">
                <?php echo $lang['Submit'] ?>
            </button>
            <a href="/">
                <?php echo $lang['Already_have_account'] ?>
            </a>
        </div>
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
