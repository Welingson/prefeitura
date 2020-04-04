<nav class="d-flex flex-wrap justify-content-center align-items-center">
    <a href="<?= url("/municipio"); ?>" class="m-2"><i class="fas fa-info-circle mr-2"></i>Dados Gerais</a>
    <a href="<?= url("/municipio/simbolos"); ?>" class="m-2"><i class="far fa-flag mr-2"></i>Símbolos</a>
    <a href="" class="btn btn-primary m-2"><i class="fas fa-home mr-2"></i>História</a>
    <a href="<?= url("/municipio/turismo"); ?>" class="m-2"><i class="fas fa-tree mr-2"></i>Turismo</a>
    <a href="<?= url("/municipio/cultura"); ?>" class="m-2"><i class="fas fa-praying-hands mr-2"></i>Cultura</a>
</nav>

<section class="container">
    <div class="mt-4">
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


    <article id="historia-brazopolis" class="mb-5 my-5">
        <div class="border-bottom d-flex flex-wrap justify-content-between align-items-center py-2">
            <h2 class="font-italic font-weight-bold">História de Brazópolis
            </h2>
            <span class="btn btn-primary font-weight-bold" onclick="window.print()"><i class="fas fa-print mr-2"></i>Imprimir</span>
        </div>
        <div class="my-5">
            <p>Os moradores da freguesia de São Caetano da Vargem Grande regozijavam-se pela sua Emancipação Política,
                tendo sido desmembrada do município de Itajubá.</p>
            <p>Era o ano de 1901 e a pequena Vila iniciava a sua caminhada para o progresso. Logo a seguir seria eleita
                a Primeira Câmara Municipal de São Caetano da Vargem Grande, e escolhido como Agente Executivo, o
                incansável e honrado chefe político, Cel. Francisco Braz Pereira Gomes e mais oito vereadores, os
                precursores e guardiões da prosperidade de nossa terra.</p>
            <p>A Vila de São Caetano da Vargem Grande iniciou sua trajetória de obras, que visava compor as estruturas
                necessárias à vida de seus moradores: ruas e avenidas foram abertas, incentivou-se a construção de novos
                prédios residenciais, a criação de escolas, a agricultura e o comércio foram tratadas como o esteio da
                economia da pequena localidade.</p>
            <p>Os representantes do povo na Câmara, imbuídos do sonho de transformar a pequena Vila em um centro de
                cultura, lazer e de empreendimentos, aprovaram, no ano de 1905, a desapropriação de prédios em ruínas e
                terrenos, cujos locais seriam destinados à construção de prédios para a Cadeia Pública e Casa da Câmara,
                respectivamente. Este último, posteriormente foi destinado à construção do Fórum. O referido documento
                foi assinado pelo presidente da Câmara, Cel. Francisco Braz Pereira Gomes.</p>
            <p>Em 1909, como homenagem ao seu grande político, a Vila de São Caetano da Vargem Grande passou a chamar-se
                Vila Braz, pela Lei 513, sancionada pelo Congresso Mineiro e assinada pelo Presidente do Estado de Minas
                Gerais, Dr. Wenceslau Braz Pereira Gomes, filho da terra, que trilhou os caminhos da política com
                inteligência, bom senso e consciência, sendo eleito, posteriormente, para Presidente da República do
                Brasil, de 1914 a 1918.</p>
            <p>A Vila Braz crescia e seus moradores apoiavam todas as iniciativas propostas, pois visavam o seu
                desenvolvimento; estradas foram planejadas, igrejas, capelas, prédios comerciais e residenciais, foram
                erguidos, distritos foram criados, escolas implantadas e construídas, ligada a luz elétrica, iniciado o
                abastecimento de água potável, serviço de esgoto e muito mais.</p>
            <p>Com todos esses melhoramentos, a Vila já merecia ter em sua sede o Termo Judiciário, com condições de
                resolver suas pendências judiciais. Coube ao dinamismo e visão dos políticos da época a solicitação ao
                Presidente do Estado, de verbas para a construção da Cadeia Pública e do Fórum, no ano de 1911.</p>
            <p>Após muito empenho das pessoas envolvidas, finalmente saiu uma verba de trinta contos de réis, para a
                construção de um dos prédios, uma vez que os dois estavam orçados em sessenta contos de réis.</p>
            <p>Ao mesmo tempo foi feita uma representação da Câmara Municipal da Vila Braz, ao Congresso do Estado,
                solicitando a elevação do município à categoria de Termo Judiciário. A demora ao atendimento da elevação
                da Vila a Termo Judiciário levou a Câmara a reiterar o pedido, no ano de 1913 e, na oportunidade,
                informou que os prédios da Cadeia Pública e do Fórum, já estavam em fase final de construção. Nesta
                época, nosso patrono e benemérito já estava muito doente e, infelizmente não pôde ver seu último sonho
                realizado. No dia 25/02/1914, faleceu o Cel. Francisco Braz Pereira Gomes, político honrado,
                administrador zeloso e de visão, o pai venerado por seus filhos, o amigo respeitado e querido, o homem
                estadista que nasceu para servir.</p>
            <p>Mas, os políticos da época não permitiram que a Vila parasse no tempo e, apesar do vazio deixado pela
                morte do Cel. Francisco Braz, deram continuidade ao seu trabalho, tendo à frente o Cel. Henrique Braz
                Pereira Gomes, que herdou do pai o dinamismo, honradez e amor a terra.</p>
            <p>No ano de 1915, o Governo Estadual, através da Lei 663, de 18 de setembro, assinou a Reforma Judiciária,
                que além de outras providências criou quarenta e um Termos Judiciários e Vila Braz estava incluído entre
                eles.</p>
            <p>Os meses se passaram e, somente em 16/09/1916, foi assinada a Lei 682, que orçou as despesas e conseguiu
                verba para a instalação de dez termos, entre eles o de Vila Braz.</p>
            <p>Pelo Decreto 4.730 de 31/03/1917, o Governo Estadual declara, entre outros, que o município de Vila Braz,
                ligado à Comarca de Itajubá, preenchia as exigências listadas na Lei 663 – Reforma Judiciária.</p>
            <p>O Jornal Vila Braz, em vários números retratou a alegria que tomou conta de todos os moradores,
                demonstrado pelo barulho ensurdecedor dos foguetes; passeata foi organizada, percorrendo as principais
                ruas da Vila, acompanhada pela Banda Musical Santa Cecília.</p>
            <p>O município crescia e desenvolvia-se com vertiginosa aceleração e fez jus ao anseio antigo de seu povo
                para que fosse elevado à cidade.</p>
            <p>Depois de muito empenho junto ao Governo Mineiro e políticos da época, através da Lei Estadual 843, de
                07/09/1923, Vila Braz “foi elevada na hierarquia das comunidades brasileiras passando a ser Cidade, com
                o nome de Brazópolis”.</p>
            <p>O Agente Executivo e Presidente da Câmara, Cel. Henrique Braz Pereira Gomes, Vice-Presidente Francisco
                Pereira Rosa e demais vereadores, continuaram na batalha pelo desenvolvimento da cidade. Os anseios
                voltaram - se para o trabalho de criação da Comarca de Brazópolis, desligando-se definitivamente, de
                Itajubá, no que diz respeito ao Poder Judiciário.</p>
            <p>Enquanto isto, a cidade crescia: ruas e avenidas abertas expandiram o centro da cidade; a Igreja Matriz
                passou por uma reforma mudando sua arquitetura antiga; foi iniciada a construção da Escola Normal Nossa
                Senhora Aparecida e do Ginásio Brazópolis; o prédio do Asilo dos Inválidos D. Maria Adelaide foi
                inaugurado, assim como muitas outras obras.</p>
            <p>Finalmente em 24/01/1925, através da Lei 879, sancionada pelo Presidente do Estado Dr. Fernando de Mello
                Viana, foram criadas as Comarcas de Guaxupé, Itaúna, Guaranésia, José Pedro, Jequitinhonha, Brazópolis,
                Rio Casca e Águas Virtuosas.</p>
            <p>O Decreto 7.035 de 13/11/1925 marcou para 01/01/1926 a instalação da nossa Comarca. A elevação da Comarca
                à 2ª. Entrância aconteceu somente em março/1940, cuja lei foi assinada pelo Governador de Minas Gerais,
                Benedito Valadares.</p>
            <p>A comarca foi elevada à 3ª. Entrância em maio de 1954, na gestão do Prefeito Benedito Pereira de
                Mendonça.</p>
            <p>Em se tratando de divisão territorial, com data de 01/07/1950, o município ficou constituído de 04
                distritos: Brazópolis, Luminosa, Olegário Maciel e Piranguinho. Ainda, em se tratando de divisão
                territorial com data de 01/07/1955, o município ficou constituído de 05 distritos: Brazópolis, Dias,
                Luminosa, Olegário Maciel e Piranguinho, assim permanecendo em divisão territorial com data de
                01/07/1960.</p>
            <p>Pela Lei Estadual nº 2.764, de 30/12/1962, são desmembrados do município de Brazópolis os distritos de
                Piranguinho e Olegário Maciel, para formarem o novo município de Piranguinho.</p>
            <p>Em divisão territorial, datada de 31/12/1963, o município de Brazópolis ficou constituído de 03
                distritos: Brazópolis, Dias e Luminosa, assim permanecendo em divisão territorial, datada de 2014.</p>
        </div>
    </article>
</section>

