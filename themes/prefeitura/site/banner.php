<!--BANNER SLIDE-->
<section>
    <?php if (!empty($banners) && isset($banners)): ?>
        <div class="container mt-1">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php for ($i = 0; $i < count($banners); $i++): ?>
                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="<?= $i; ?>"></li>
                    <?php endfor; ?>
                </ol>
                <div class="carousel-inner">
                    <?php for ($i = 0; $i < count($banners); $i++): ?>
                        <?php if ($i == 0): ?>
                            <div class="carousel-item active">
                                <img src="<?= image($banners[$i]->banner, 1140, 400); ?>" class="d-block w-100 banner-slide img-thumbnail"
                                     alt="">
                            </div>
                        <?php else: ?>
                            <div class="carousel-item">
                                <img src="<?= image($banners[$i]->banner, 1140, 400); ?>" class="d-block w-100 banner-slide img-thumbnail"
                                     alt="">
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>
    <?php endif; ?>
</section>