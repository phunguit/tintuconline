<?php
/**
 * The header template file.
 * @package RestImpo
 * @since RestImpo 1.0.0
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" /> 
  <meta name="viewport" content="width=device-width" />  
<?php if ( ! function_exists( '_wp_render_title_tag' ) ) { ?><title><?php wp_title( '|', true, 'right' ); ?></title><?php } ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">  
<?php wp_head(); ?>  
</head>
 
<body <?php body_class(); ?> id="wrapper"> 
<header id="wrapper-header">
  <div class="header-image">
    <img class="header-img" src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" />
    <div class="header-image-container">
      <div class="header-image-text-wrapper">
        <div class="header-image-text">
          <?php if ( get_theme_mod('restimpo_header_image_headline', restimpo_default_options('restimpo_header_image_headline')) != '' ) { ?>
                  <p class="header-image-headline"><?php echo esc_attr(get_theme_mod('restimpo_header_image_headline', restimpo_default_options('restimpo_header_image_headline'))); ?></p>
          <?php } if ( get_theme_mod('restimpo_header_image_text', restimpo_default_options('restimpo_header_image_text')) != '' ) { ?>
                  <p class="header-image-info"><?php echo esc_attr(get_theme_mod('restimpo_header_image_text', restimpo_default_options('restimpo_header_image_text'))); ?></p>
          <?php } if ( get_theme_mod('restimpo_header_image_link_url', restimpo_default_options('restimpo_header_image_link_url')) != '' || get_theme_mod('restimpo_header_image_link_text', restimpo_default_options('restimpo_header_image_link_text')) != '' ) { ?>
                  <a class="header-image-link" href="<?php echo esc_url(get_theme_mod('restimpo_header_image_link_url', restimpo_default_options('restimpo_header_image_link_url'))); ?>"><span><?php echo esc_attr(get_theme_mod('restimpo_header_image_link_text', restimpo_default_options('restimpo_header_image_link_text'))); ?></span></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<?php if (get_theme_mod('restimpo_display_site_description', restimpo_default_options('restimpo_display_site_description')) != 'Hide' ) { ?>  
  <div class="header-description-wrapper">
    <div class="header-description">
    <?php
      wp_nav_menu( array( 'menu_id'=>'top-nav', 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    </div>
  </div>
<?php } ?>
</header> <!-- end of wrapper-header -->