<?php $v->layout("_theme"); ?>
<div class="jumbotron" style="margin: unset; padding: 100px">
    <h1 class="display-4 text-center font-weight-bold" style="color: #07539c"><?= $error->code; ?></h1>
    <p class="lead text-center font-weight-bold"><?= $error->title ?></p>
    <p class="lead text-center"><?= $error->message ?></p>
    <hr class="my-4">
    <?php if ($error->link): ?>
        <div class="text-center">
            <a class="btn btn-primary btn-lg"  title="<?= $error->linkTitle; ?>" href="<?= $error->link; ?>"><?= $error->linkTitle; ?></a>
        </div>
    <?php endif; ?>
</div>