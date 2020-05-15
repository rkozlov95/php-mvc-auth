<?php include __DIR__ . '/partials/header.php'; ?>

<?php include __DIR__ . '/partials/error.php'; ?>

<div class="card shadow p-1">
    <div class="card-header">
        <?=$lang['Registration']?>
    </div>
    <div class="card-body">
        <form action="/register" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>
                    <?=$lang['Username']?>
                </label>
                <input class="form-control" name="username" value="<?=$data['username']?>" required>
            </div>
            <div class="form-group">
                <label>
                    <?=$lang['Email']?>
                </label>
                <input class="form-control" name="email" value="<?=$data['email']?>" required>
            </div>
            <div class="form-group">
                <label>
                    <?=$lang['Password']?>
                </label>
                <input class="form-control" name="password" value="<?=$data['password']?>" required>
            </div>
            <div class="form-group">
                <label>
                    <?=$lang['Confirm_password']?>
                </label>
                <input class="form-control" name="confirm_password" value="<?=$data['confirmPassword']?>" required>
            </div>
            <div class="form-group">
                <label>
                    <?=$lang['About']?>
                </label>
                <textarea class="form-control" rows="4" name="about"><?=$data['about']?></textarea>
            </div>
            <div class="form-group">
                <label>
                    <?=$lang['Add_photo']?>
                </label>
                <input type="file" class="form-control-file" name="file" required multiple>
            </div>
            <div class="form-group d-flex align-items-center">
                <button type="submit" class="btn btn-primary mr-auto">
                    <?=$lang['Submit']?>
                </button>
                <a href="/">
                    <?=$lang['Already_have_account']?>
                </a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
