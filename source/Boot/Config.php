<?php
/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "weds36741298");
define("CONF_DB_NAME", "db_prefeitura");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.wetechnologia.com.br");
define("CONF_URL_TEST", "https://www.localhost/prefeitura");
define("CONF_URL_ADMIN", "/admin");

/**
 * SITE
 */

define("CONF_SITE_NAME", "Prefeitura de Brazópolis - MG");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "wetechnologia.com.br");
define("CONF_SITE_DESC", "Prefeitura Municipal de Brazópolis - MG");


/**
 * SOCIAL
 */

define("CONF_SOCIAL_TWITTER_CREATOR", "@welingson12");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@welingson12");
define("CONF_SOCIAL_FACEBOOK_APP", "626590460695980");
define("CONF_SOCIAL_FACEBOOK_PAGE", "Prefeitura de Brazópolis");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "welingson.expeditosantos");
define("CONF_SOCIAL_GOOGLE_PAGE", "107305124528362639842");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "103958419096641225872");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "trigger");
define("CONF_MESSAGE_INFO", "info");
define("CONF_MESSAGE_SUCCESS", "success");
define("CONF_MESSAGE_WARNING", "warning");
define("CONF_MESSAGE_ERROR", "error");

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "prefeitura/site");
define("CONF_VIEW_APP", "prefeitura/app");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_IMAGE_NEWS", "images/news");
define("CONF_UPLOAD_IMAGE_BANNERS", "images/banners");
define("CONF_UPLOAD_IMAGE_MANAGEMENT", "images/management");
define("CONF_UPLOAD_DOCUMENT_DIR", "documents");
define("CONF_UPLOAD_DOCUMENT_BIDDING", "documents/bidding");


/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */

define("CONF_MAIL_HOST", "www.wetechnologia.com.br");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "welingson@wetechnologia.com.br");
define("CONF_MAIL_PASS", "weds36741298");
define("CONF_MAIL_SENDER", ["name" => "Welingson E. Santos", "address" => "welingson@wetechnologia.com.br"]);
define("CONF_MAIL_SUPPORT", "welingson@wetechnologia.com.br");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");