<?php include __DIR__ . '/partials/header.php'; ?>

<div class="card text-center shadow-lg">
    <div class="card-body mt-5 mb-5">
        <img src="<?=$data['image_path']?>" border="1" width="180" height="180" class="rounded-circle mx-auto d-block">
        <h4 class="card-title mt-3">
            <?=$data['username']?>
        </h4>
        <p class="card-text">
            <?=$data['about']?>
        </p>
        <a class="btn btn-danger btn-block mt-4" href="/">
            <?=$lang['Logout']?>
        </a>
    </div>
</div>
