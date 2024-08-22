<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		
        <?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		
	<?php echo get_template_part('template-parts/header/preloader'); ?>
    <?php echo get_template_part('template-parts/header/header-1') ?>