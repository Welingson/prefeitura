// collpase
$(".document_collapse").click(function () {
    var collapse = $(this);

    if (collapse.find(".document_collapse_box").is(":visible")) {
        collapse.find(".document_collapse_box").slideUp(200);
    } else {
        collapse.parent().find(".document_collapse_box").slideUp(200);
        collapse.find(".document_collapse_box").slideDown(200);
    }
});
