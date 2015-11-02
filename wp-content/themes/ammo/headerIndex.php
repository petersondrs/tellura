<!DOCTYPE HTML>
<!--[if IE 6]>
<html class="oldie ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html class="oldie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="oldie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/html5shiv.js"></script>
    <![endif]-->

	<title> <?php wp_title("|",true, 'right'); ?> <?php if (!defined('WPSEO_VERSION')) { bloginfo('name'); } ?></title>
	
	<!-- Favicons -->
	<?php tt_icons(); ?>
   	<?php
   		global $smof_data;

   		$body_classes = $nav_fixed = '';
   		if(get_theme_mod('general-layout') == 'boxed'){ $body_classes .= 'boxed '; }
   		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
   		if(isset($smof_data['fixed_menu']) && $smof_data['fixed_menu'] == 1){ $nav_fixed = 'navbar-fixed-top'; }
   		$header_transparent = isset($smof_data['header_transparent']) && $smof_data['header_transparent']=='1' ? 'header-transparent' : '';
   		$header_opacity = isset($smof_data['header_opacity']) && $header_transparent!='' ? (int)$smof_data['header_opacity'] : 0;
   		$header_opacity = $header_opacity/100;
   		$body_classes .= 'slidemenu-push';

   	?>
   	<?php wp_head(); ?>

</head>
