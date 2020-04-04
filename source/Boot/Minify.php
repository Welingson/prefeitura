<?php
if (strpos(url(), "localhost")) {

    /**
     * CSS
     */
    $minCSS = new MatthiasMullie\Minify\CSS();
    $minCSS->add(__DIR__ . "/../../shared/bootstrap/css/bootstrap.min.css");

    //theme CSS
    $cssDir = scandir(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/css");
    foreach ($cssDir as $css) {
        $cssFile = __DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/css/{$css}";
        if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
            $minCSS->add($cssFile);
        }
    }

    //Minify CSS
    $minCSS->minify(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/style.css");

    /**
     * JS
     */
    $minJS = new MatthiasMullie\Minify\JS();
    $minJS->add(__DIR__."/../../shared/scripts/jquery/jquery-3.4.1.min.js");
    $minJS->add(__DIR__."/../../shared/scripts/jquery/jquery.form.js");
    $minJS->add(__DIR__."/../../shared/bootstrap/js/bootstrap.bundle.min.js");
    $minJS->add(__DIR__."/../../shared/fontawesome/font.js");
    //theme CSS
    $jsDir = scandir(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/js");
    foreach ($jsDir as $js) {
        $jsFile = __DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/js/{$js}";
        if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
            $minJS->add($jsFile);
        }
    }

    //Minify JS
    $minJS->minify(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/scripts.js");
}