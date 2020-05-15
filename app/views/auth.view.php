<?php include __DIR__ . '/partials/header.php'; ?>

<?php include __DIR__ . '/partials/error.php'; ?>

<div class="card shadow p-1">
    <div class="card-header">
        <?=$lang['Login'] ?>
    </div>
    <div class="card-body">
        <form action="/" method="post">
            <div class="form-group">
                <label>
                    <?=$lang['Email']?>
                </label>
                <input class="form-control" name="email" value="<?=$email?>" required>
            </div>
            <div class="form-group">
                <label>
                     <?=$lang['Password']?>
                </label>
                <input class="form-control" name="password" value="<?=$password?>" required>
            </div>
            <div class="form-group d-flex align-items-center">
                <button type="submit" class="btn btn-primary mr-auto">
                    <?=$lang['Sign_in']?>
                </button>
                <a class="m-1">
                    <?=$lang['Dont_have_account']?>
                </a>
                <a href="/register">
                    <?=$lang['Sign_up']?>
                </a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
