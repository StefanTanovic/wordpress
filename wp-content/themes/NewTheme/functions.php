<?php

add_theme_support( 'post-thumbnails' );
add_custom_background();

define('HEADER_TEXTCOLOR', '');
define('HEADER_IMAGE', '%s/images/header.jpg');
define('HEADER_IMAGE_WIDTH' , 800 );
define('HEADER_HEIGHT', 200 ) ;
define('NO_HEADER_TEXT', true );

function simplex_header_styles() { ?>
<style type="text/css">
#headimg {
	height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
	width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
}
<?php if (NO_HEADER_TEXT) { ?>
#header h1, #header #desc {
	text-indent: -99999px;
}
<?php } ?>
</style>
<?php
}
add_custom_image_header( '', 'simplex_header_styles' );
add_action('wp_header', 'simplex_header_styles');

?>