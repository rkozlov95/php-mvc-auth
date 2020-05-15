<?php if (!empty($error)) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $lang[$error] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
