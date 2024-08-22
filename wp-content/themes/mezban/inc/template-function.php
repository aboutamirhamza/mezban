<?php 

function mezban_header_logo(){
    $header_logo = get_theme_mod( 'header_logo', get_template_directory_uri().'/assets/images/img/logo.png');
?>
    <a href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url($header_logo); ?>" alt="<?php echo bloginfo(); ?>"></a>
<?php

}


function mezban_footer_logo(){
    $footer_logo = get_theme_mod( 'footer_logo', get_template_directory_uri().'/assets/images/img/logo footer.png');
    ?>
    <a href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url($footer_logo); ?>"></a>
    <?php
}

function mezban_footer_social(){
    $facebook_id = get_theme_mod('facebook_id', '#');
    $twitter_id = get_theme_mod('twitter_id', '#');
    $linkedin_id = get_theme_mod('linkedin_id', '#');
    $vimo_id = get_theme_mod('vimo_id', '#');
    ?>

    <?php if(!empty($facebook_id)) : ?>
    <a href="<?php echo esc_url($facebook_id); ?>" class="facebook"><i class="icofont-facebook"></i></a>
    <?php endif; ?>

    <?php if(!empty($twitter_id)) : ?>
    <a href="<?php echo esc_url($twitter_id); ?>" class="twitter"><i class="icofont-twitter"></i></a>
    <?php endif; ?>

    <?php if(!empty($linkedin_id)) : ?>
    <a href="<?php echo esc_url($linkedin_id); ?>" class="linkedin"><i class="icofont-linkedin"></i></a>
    <?php endif; ?>

    <?php if(!empty($vimo_id)) : ?>
    <a href="<?php echo esc_url($vimo_id); ?>" class="vimeo"><i class="icofont-vimeo"></i></a>
    <?php endif; ?>

    <?php
}




function mezban_footer_end_text(){
    $footer_end_content = get_theme_mod('footer_end_content', '© 2021 Mezban Design by FoxCoders.');
    ?>
    <p><a href="<?php echo home_url('/'); ?>"><?php echo mezban_kses($footer_end_content); ?></a></p>
    <?php
}


/**
* Sanitize SVG markup for front-end display.
*
* @param  string $svg SVG markup to sanitize.
* @return string 	  Sanitized markup.
*/
function mezban_kses( $allow_tags = '' ) {
	$allowed_html = [
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'path'  => array( 
            'd' => true, 
            'fill' => true,  
            'stroke' => true,  
            'stroke-width' => true,  
            'stroke-linecap' => true,  
            'stroke-linejoin' => true,  
            'opacity' => true,  
        ),
		'a' => [
			'class'    => [],
			'href'    => [],
			'title'    => [],
			'target'    => [],
			'rel'    => [],
		],
         'b' => [],
         'blockquote'  =>  [
            'cite' => [],
         ],
         'cite'                      => [
            'title' => [],
         ],
         'code'                      => [],
         'del'                    => [
            'datetime'   => [],
            'title'      => [],
        ],
         'dd'                     => [],
         'div'                    => [
            'class'   => [],
            'title'   => [],
            'style'   => [],
         ],
         'dl'                     => [],
         'dt'                     => [],
         'em'                     => [],
         'h1'                     => [],
         'h2'                     => [],
         'h3'                     => [],
         'h4'                     => [],
         'h5'                     => [],
         'h6'                     => [],
         'i'                         => [
            'class' => [],
         ],
         'img'                    => [
            'alt'  => [],
            'class'   => [],
            'height' => [],
            'src'  => [],
            'width'   => [],
         ],
         'li'                     => array(
            'class' => array(),
         ),
         'ol'                     => array(
            'class' => array(),
         ),
         'p'                         => array(
            'class' => array(),
         ),
         'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
         ),
         'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
         ),
         'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
         ),
         'strike'                 => array(),
         'br'                     => array(),
         'strong'                 => array(),
	];

	return wp_kses( $allow_tags, $allowed_html );
}


function mezban_menu(){
    wp_nav_menu( 
        array( 
            'theme_location'  => 'header-menu',
            'menu_class'      => '',
            'menu_id'         => '',
            'container'      => '',
            'fallback_cb'     => 'Mezban_Walker_Nav_Menu::fallback',
            'walker'     => new Mezban_Walker_Nav_Menu,
        ) 
    ); 
}

function footer_mezban_menu(){
    wp_nav_menu( 
        array( 
            'theme_location'  => 'footer-menu',
            'menu_class'      => '',
            'menu_id'         => '',
            'container'      => '',
            'fallback_cb'     => 'Mezban_Walker_Nav_Menu::fallback',
            'walker'     => new Mezban_Walker_Nav_Menu,
        ) 
    ); 
}