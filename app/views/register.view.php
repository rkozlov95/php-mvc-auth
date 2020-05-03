<?php include __DIR__ . '/partials/header.php'; ?>

<div class="card">
    <div class="card-header">
        <?php echo $lang['Register'] ?>
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
        <button type="submit" class="btn btn-primary">
            <?php echo $lang['Submit'] ?>
        </button>
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
