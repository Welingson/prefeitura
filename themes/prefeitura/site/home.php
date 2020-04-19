<?php $v->layout("_theme"); ?>

<!--BANNERS-->

<?php $v->insert("banner"); ?>


<!--NOTICIAS PREVIEW-->

<!--ULTIMAS NOTICIAS-->
<article>
    <div class="container mt-4">
        <div class="d-flex justify-content-between pb-2 border-bottom border-primary mb-3">
            <h3 class="">Ultimas notícias</h3>
            <a href="<?= url("/noticias")?>" class="external-link-notice btn">
                Mais notícias
                <i class="fas fa-external-link-square-alt pl-2"></i>
            </a>
        </div>

        <div class="row">
            <?php if (!empty($news) && isset($news)): ?>
                <?php foreach ($news as $post): ?>
                    <?php $v->insert("News/newspaper-preview", ["post" => $post]); ?>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-primary">Ainda estamos trabalhando por aqui</p>
            <?php endif; ?>
        </div>

    </div>
</article>

<article>
    <div class="container alert alert-info alert-dismissible fade show text-center" role="alert">
        <h4>O estado deve para a Prefeitura Municípal de Brazópolis:
            <span class="text-danger">R$ 4.896.281,17</span>
        </h4>
        <h4>Governo Pimentel: <span class="text-danger">R$ 4.418.499,33</span></h4>
        <h4>Governo Zema: <span class="text-danger">R$ 477.781,84</span></h4>
        <hr class="">
        <h5 class=""><strong>Ultima atualização: 29/03/2019</strong></h5>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</article>

<!--ACESSO RÁPIDO-->
<?php $v->insert("quick-access"); ?>

<!--DOCUMENTOS-->
<?php $v->insert("Documents/interestingDocuments"); ?>

<!--GESTÃO PREVIEW-->
<?php $v->insert("Management/management-preview"); ?>






