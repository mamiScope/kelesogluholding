<?php
add_theme_support( 'post-thumbnails' );
require_once "inc/mobiledetect.php";

function get_mobile() {
    $detect = new \Mobile_Detect;
    $data['mobile'] = false;
    if ($detect->isMobile()) {
        if (!$detect->isTablet()) {
            $data['mobile'] = true;
        }
        $data['tabletmobile'] = true;
        $data['homeSlideW'] = 1024;
        $data['homeSlideH'] = 575;
        $data['homeSlideView'] = 'fullwidth';
    } else {
        $data['mobile'] = false;
        $data['tabletmobile'] = false;
        $data['homeSlideW'] = 1920;
        $data['homeSlideH'] = 1080;
        $data['homeSlideView'] = 'fullscreen';
    }
    return $data;
}

?>