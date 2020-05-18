<!--DOCUMENTOS IMPORTANTES-->
<?php if (!empty($interestingDocuments) && isset($interestingDocuments)) : ?>
    <section>
        <div class="container rounded mt-5 mb-5">
            <div class="card card-documents">
                <h5 class="card-header card-documents-header text-white text-center">
                    Documentos interessantes
                    <i class="fas fa-file-alt"></i>
                </h5>

                <div class="documents">
                    <?php foreach ($interestingDocuments as $document) : ?>
                        <article class="document document_collapse">
                            <h4 class=""><?= $document->title; ?></h4>
                            <div class="document_coll document_collapse_box">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?= $document->description ?></li>
                                    <li class="list-group-item"><i class="fas fa-file-pdf text-danger mr-2"></i>
                                        <a href="<?= url("/"); ?>"><?= $document->dir_attachment ?></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    <?php endforeach; ?>
                    
                </div>
                <div id="more-documents" class="see-more">
                    <a href="<?= url("/documentos-interessantes"); ?>" class="btn btn-success font-weight-bold">Ver mais <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>