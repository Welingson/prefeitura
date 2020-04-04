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
        <h2 class="font-italic font-weight-bold">Romeo e Julieta
        </h2>
        <span class="btn btn-primary font-weight-bold" onclick="window.print()"><i class="fas fa-print mr-2"></i>Imprimir</span>
    </div>
    <div class="my-5">
        <p>A economia Brazopolense é voltada para a agropecuária.</p>
        <p>É tradicionalmente uma grande produtora de leite. O desenvolvimento deste segmento está levando
            ao aumento do número de laticínios e a busca por produção de queijos de melhor qualidade.</p>
        <p>São produzidos principalmente os queijos Mussarela, Frescal e Padrão.</p>
        <p>Anualmente, no aniversário da cidade (16/Set), é realizado o evento Romeu e Julieta, onde produtores
            locais fazem
            um queijo e uma goiabada gigante para compartilharem com a população em festa.</p>
    </div>
</article>
