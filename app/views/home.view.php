<?php include __DIR__ . '/partials/header.php'; ?>

<div class="card">
    <div class="card-header">
        <?php echo $lang['Login'] ?>
    </div>
    <div class="card-body">
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
        <button type="submit" class="btn btn-primary">
            <?php echo $lang['Sign_in'] ?>
        </button>
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
