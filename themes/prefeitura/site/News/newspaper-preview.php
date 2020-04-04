<!--ULTIMAS NOTICIAS-->

<div class="col-md-6">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary border-bottom"><?= $post->category()->category?></strong>
            <h3 class="mb-0"><?= $post->title ?></h3>
            <div class="mb-1 text-muted"><?= date_fmt($post->created_at);?></div>
            <p class="card-text mb-auto">
                <?= str_limit_chars($post->news, 50)?>
            </p>
            <a href="<?= url("/noticias/{$post->uri}")?>" class="stretched-link">Continue lendo</a>
        </div>
        <div class="col-auto d-none d-lg-block bg-success">
            <img src="<?= image(($post->findAttachment($post->id, "dir_image"))->dir_image, 200, 250) ;?>" alt="" class="img-responsive">
        </div>
    </div>
</div>
