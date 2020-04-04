<?php $v->layout("_theme"); ?>

<?php if (!empty($post) && isset($post)) : ?>
    <nav class="bg-light" aria-label="breadcrumb">
        <ol class="container breadcrumb bg-light">
            <li class="breadcrumb-item"><a href="<?= url() ?>">Início</a></li>
            <li class="breadcrumb-item"><a href="<?= url("/noticias") ?>">Notícias</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $post->title ?></li>
        </ol>
    </nav>
    <!-- TITULO DA NOTICIA -->
    <article class="container mb-5">
        <div class="page-title d-flex flex-wrap border-bottom border-primary justify-content-between align-items-end">
            <div>
                <h1 class="news-title"><?= $post->title ?></h1>
            </div>
            <div>
                <p class="text-muted"><?= $post->category()->category . " - " . date_fmt($post->created_at); ?></p>
            </div>
        </div>
        <!-- OS ANEXOS DA NOTICIA -->
        <div class="mt-4">
            <?php if (!empty($attachment) && isset($attachment)) : ?>
                <div class="d-flex flex-wrap justify-content-center">
                    <?php foreach ($attachment as $image) : ?>
                        <div class="news-image m-2">
                            <img src="<?= image($image->dir_image, 350, 350); ?>" class="rounded image-gallery" onclick="gallery('<?= url('/storage/'.$image->dir_image);?>')" alt="Responsive image">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="border-bottom">
            <?= $post->news; ?>
        </div>
    </article>

    <!-- OS IFRAMES DA NOTICIA -->
    <?php if (!empty($iframe) && isset($iframe)) : ?>
        <article class="container">
            <div class="iframe">
                <?php foreach ($iframe as $video) : ?>
                    <div class="iframe-news">
                        <?= $video->news_iframe; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </article>
    <?php endif; ?>
<?php endif; ?>

<!-- O MODAL QUE SERÁ ABERTO AO CLICAR NOS ANEXOS DA NOTICIA -->
<div id="myModal">
    <span id="close-modal" onclick="closeModal()">&times;</span>

    <div class="d-flex justify-content-center mb-4">
        <img src="" alt="" class="img-thumbnail img-responsive" id="modal-image">
    </div>

    <div class="d-flex" id="image-list">
        <?php foreach ($attachment as $image) : ?>
            <img src="<?= url("/storage/" . $image->dir_image); ?>" class="img-thumbnail modal-image-open" onclick="gallery(this.src)" alt="Responsive image">
        <?php endforeach; ?>
    </div>
</div>

<section class="container mt-5">
    <h2 class="text-center text-primary mb-5 pb-2 border-bottom border-primary">Mais notícias desta categoria</h2>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <p class="notice-category">Administração</p>
                <img src="https://picsum.photos/1200/768?random=4" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Desenvolvendo Login Step by Step com Ajax e PHP</h5>
                    <p class="text-muted">04/02/2020</p>
                    <p class="card-text">Apresente boas vindas ao usuário antes mesmo de solicitar a senha sem
                        precisar recarregar a página</p>
                    <p class="text-center"><a href="" class="btn btn-outline-purple d-block">Saber mais...</a>
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Última alteração a 3 minutos</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>