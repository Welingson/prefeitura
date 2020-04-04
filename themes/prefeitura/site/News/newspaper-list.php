<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
    <div class="card">
        <p class="notice-category"><?= $post->category()->category; ?></p>
        <img src="<?= image(($post->findAttachment($post->id, "dir_image"))->dir_image, 1200, 768);?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $post->title ?></h5>
            <hr class="my-2">
            <p class="text-muted"><?= date_fmt($post->created_at);?></p>
            <p class="card-text"><?= str_limit_chars($post->news, 100) ?></p>
            <p class="text-center">
                <a href="<?= url("/noticias/{$post->uri}")?>"
                   class="btn btn-outline-purple d-block">
                    Saber mais...
                </a>
            </p>
        </div>
    </div>
</div>
