<?php
/**
 * zencom helper functions.
 *
 * @package zencom
 */

function zencom_get_page_url() {
    $pageURL = 'http';
    if( isset($_SERVER["HTTPS"]) ) {
        if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}


/* ritorna l'url della cartella uploads */
function zencom_get_uploads_url() {
    $dummy = wp_upload_dir();
    return $dummy['url'];
}

?>