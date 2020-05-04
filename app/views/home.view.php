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
        <div class="form-group d-flex align-items-center">
            <button type="submit" class="btn btn-primary mr-auto">
                <?php echo $lang['Sign_in'] ?>
            </button>
            <a class="m-1">
                <?php echo $lang['Dont_have_account'] ?>
            </a>
            <a href="/register">
                <?php echo $lang['Sign_up'] ?>
            </a>
        </div>
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
