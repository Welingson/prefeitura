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
        <h2 class="font-italic font-weight-bold">Observatório do Pico dos Dias
        </h2>
        <span class="btn btn-primary font-weight-bold" onclick="window.print()"><i class="fas fa-print mr-2"></i>Imprimir</span>
    </div>
    <div class="my-5">
        <p>Dentro do território de Brazópolis está instalado o Observatório Nacional de Astrofísica
            - OPD, localizado no Pico dos Dias, a uma altitude de 1.864 m.
        </p>
        <p>
            Em 2017, a Agência Espacial Federal Russa (Roscosmos) investiu cerca de R$ 10
            milhões no projeto de instalação de um telescópio, capaz de mapear detritos
            espaciais, aumentando assim a visibilidade internacional de Brazópolis, atraindo
            cientistas e turistas de vários lugares.
        </p>
    </div>
</article>


<!--<div>
    <div id="parallaxOne" class="parallax d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h2 class="">Brazópolis do céu mais bonito</h2>
            <p>Brazópolis é o local apropriado para viver boas experiências. Cravada na Serra da Mantiqueira,
                possui clima ameno e agradável, além de oferecer diversos atrativos naturais como cachoeiras e
                montanhas.</p>
            <p>Suas ruas de paralelepípedo e casario histórico, proporcionam bons momentos para apreciadores do valioso
                passado mineiro.</p>
        </div>
    </div>

    <div id="brazopolis-info" class="container my-5">
        <p class="p-4">Brazópolis é uma cidade politicamente emancipada desde 1901, contando com menos de 15 mil
            habitantes. O seu
            nome é uma justa
            homenagem à Família Braz que aqui viveu e, através de seus ideias, propiciou a cidade a crescer e prosperar.
            Seu potencial turístico é
            rural, histórico e de aventura, graças às montanhas, vales e cachoeiras, contando com pousadas e
            restaurantes, preparados para receber o visitante,
            , que procura por tranquilidade.
        </p>
    </div>
    <div id="parallaxTwo" class="parallax d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h2 class="">Caminho da Fé</h2>
            <p>
                O município de Brazópolis, através do distrito de Luminosa, é parte integrante do sistema "<u>Caminho da
                    Fé</u>"
                que consiste numa trilha túristica, cultural e espiritualista, projetada a partir da Cidade de
                Águas da Prata / SP e que pode ser percorrida, a pé ou de bicicleta, tendo como objetivo final, a
                Básilica
                de Nossa Senhora Aprecida, em Aprecida/SP.
            </p>
        </div>
    </div>
    <div id="parallaxThree" class="parallax d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h2 class="">Romeu e Julieta</h2>
            <h3>Queijos e Doces</h3>
            <p>A economia Brazopolense é voltada para a agropecuária.</p>
            <p>É tradicionalmente uma grande produtora de leite. O desenvolvimento deste segmento está levando
                ao aumento do número de laticínios e a busca por produção de queijos de melhor qualidade.</p>
            <p>São produzidos principalmente os queijos Mussarela, Frescal e Padrão.</p>
            <p>Anualmente, no aniversário da cidade (16/Set), é realizado o evento Romeu e Julieta, onde produtores
                locais fazem
                um queijo e uma goiabada gigante para compartilharem com a população em festa.</p>
        </div>
    </div>
    <div id="parallaxFour" class="parallax d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h2 class="">Artesanato</h2>
            <p>Do tronco da bananeira são extraídas as fibras, que depois de processadas, incrementam o artesanato e a
                renda familiar.</p>
            <p>Os objetos de arte e decoração, feitos com fibras de bananeira, fazem parte do variado artesanato
                produzido em Brazópolis.</p>
            <p>Predominantemente, são os bordados e costuras passadas de mãe para filha, que caracterizam o artesanato
                local. Nos últimos
                anos, os mosaicos vêem colorindo praças, casas e instituições na cidade.</p>
        </div>
    </div>
    <div id="parallaxFive" class="parallax d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h2 class="">Observatório</h2>
            <p>Dentro do território de Brazópolis está instalado o Observatório Nacional de Astrofísica
                - OPD, localizado no Pico dos Dias, a uma altitude de 1.864 m.
            </p>
            <p>
                Em 2017, a Agência Espacial Federal Russa (Roscosmos) investiu cerca de R$ 10
                milhões no projeto de instalação de um telescópio, capaz de mapear detritos
                espaciais, aumentando assim a visibilidade internacional de Brazópolis, atraindo
                cientistas e turistas de vários lugares.
            </p>
        </div>
    </div>
    <div id="parallaxSix" class="parallax d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h2 class="">Ecoturismo</h2>
            <p>
                A localização do município, no coração da Mantiqueira Mineira, faz de Brazópolis um
                roteiro perfeito para a atividade de ecoturismo. Suas trilhas atraem turistas
                interessados na prática de caminhada, motocross e ciclismo.
            </p>
        </div>
    </div>
</div>-->


