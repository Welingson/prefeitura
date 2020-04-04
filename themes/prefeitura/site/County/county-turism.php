<div class="d-flex flex-wrap justify-content-center align-items-center">
    <a href="<?= url("/municipio"); ?>" class="m-2"><i class="fas fa-info-circle mr-2"></i>Dados Gerais</a>
    <a href="<?= url("/municipio/simbolos"); ?>" class="m-2"><i class="far fa-flag mr-2"></i>Símbolos</a>
    <a href="<?= url("/municipio/historia"); ?>" class="m-2"><i class="fas fa-home mr-2"></i>História</a>
    <a href="<?= url("/municipio/turismo"); ?>" class="m-2 btn btn-primary"><i class="fas fa-tree mr-2"></i>Turismo</a>
    <a href="<?= url("/municipio/cultura"); ?>" class="m-2"><i class="fas fa-praying-hands mr-2"></i>Cultura</a>
</div>

<section class="container">

    <?php if (!empty($turism) && isset($turism)): ?>

        <?php $v->insert($turism); ?>
        <?php $v->insert("County/county-turism-list"); ?>
    <?php else: ?>
        <?php $v->insert("County/county-turism-list"); ?>
        <article id="historia-brazopolis" class="mt-5 border-primary border-bottom">
            <div class="border-bottom d-flex flex-wrap justify-content-between align-items-center py-2">
                <h2 class="font-italic font-weight-bold">Brazópolis - MG
                </h2>
                <span class="btn btn-primary font-weight-bold" onclick="window.print()"><i
                            class="fas fa-print mr-2"></i>Imprimir</span>
            </div>
            <div class="my-5">
                <p>Brazópolis é o local apropriado para viver boas experiências. Cravada na Serra da Mantiqueira,
                    possui clima ameno e agradável, além de oferecer diversos atrativos naturais como cachoeiras e
                    montanhas.</p>
                <p>Suas ruas de paralelepípedo e casario histórico, proporcionam bons momentos para apreciadores do
                    valioso
                    passado mineiro.</p>
                <p>Brazópolis é uma cidade politicamente emancipada desde 1901, contando com menos de 15 mil
                    habitantes. O seu
                    nome é uma justa
                    homenagem à Família Braz que aqui viveu e, através de seus ideias, propiciou a cidade a crescer e
                    prosperar.
                    Seu potencial turístico é
                    rural, histórico e de aventura, graças às montanhas, vales e cachoeiras, contando com pousadas e
                    restaurantes, preparados para receber o visitante,
                    , que procura por tranquilidade.</p>
            </div>
        </article>
        <div class="my-4">
            <div class="d-flex flex-wrap justify-content-center">
                <div class="news-image m-2">
                    <img src="https://picsum.photos/500/500?random=1" class="rounded image-gallery"
                         onclick="gallery('https://picsum.photos/500/500?random=1')" alt="Responsive image">
                </div>
                <div class="news-image m-2">
                    <img src="https://picsum.photos/500/500?random=2" class="rounded image-gallery"
                         onclick="gallery('https://picsum.photos/500/500?random=2')" alt="Responsive image">
                </div>
                <div class="news-image m-2">
                    <img src="https://picsum.photos/500/500?random=3" class="rounded image-gallery"
                         onclick="gallery('https://picsum.photos/500/500?random=3')" alt="Responsive image">
                </div>
                <div class="news-image m-2">
                    <img src="https://picsum.photos/500/500?random=4" class="rounded image-gallery"
                         onclick="gallery('https://picsum.photos/500/500?random=4')" alt="Responsive image">
                </div>
                <div class="news-image m-2">
                    <img src="https://picsum.photos/500/500?random=5" class="rounded image-gallery"
                         onclick="gallery('https://picsum.photos/500/500?random=5')" alt="Responsive image">
                </div>
            </div>
        </div>
        <div id="myModal">
            <span id="close-modal" onclick="closeModal()">&times;</span>

            <div class="d-flex justify-content-center mb-4">
                <img src="" alt="" class="img-thumbnail img-responsive" id="modal-image">
            </div>

            <div class="d-flex justify-content-center" id="image-list">
                <img src="https://picsum.photos/500/500?random=2" class="img-thumbnail modal-image-open"
                     onclick="gallery(this.src)" alt="Responsive image">
                <img src="https://picsum.photos/500/500?random=3" class="img-thumbnail modal-image-open"
                     onclick="gallery(this.src)" alt="Responsive image">
                <img src="https://picsum.photos/500/500?random=4" class="img-thumbnail modal-image-open"
                     onclick="gallery(this.src)" alt="Responsive image">
                <img src="https://picsum.photos/500/500?random=5" class="img-thumbnail modal-image-open"
                     onclick="gallery(this.src)" alt="Responsive image">
            </div>
        </div>
    <?php endif; ?>

</section>