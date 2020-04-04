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

<article id="historia-brazopolis" class="mt-5 border-primary border-bottom">
    <div class="border-bottom d-flex flex-wrap justify-content-between align-items-center py-2">
        <h2 class="font-italic font-weight-bold">Ecoturismo
        </h2>
        <span class="btn btn-primary font-weight-bold" onclick="window.print()"><i class="fas fa-print mr-2"></i>Imprimir</span>
    </div>
    <div class="my-5">
        <p>
            A localização do município, no coração da Mantiqueira Mineira, faz de Brazópolis um
            roteiro perfeito para a atividade de ecoturismo. Suas trilhas atraem turistas
            interessados na prática de caminhada, motocross e ciclismo.
        </p>
    </div>
</article>
