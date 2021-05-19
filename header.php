<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php echo get_bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <?php wp_body_open(); ?>
  <?php get_template_part('theme_includes/top_date_and_social_area');?>
  <?php get_template_part('theme_includes/logo_area');?>
  <?php get_template_part('theme_includes/menu_area');?>
  <?php get_template_part('theme_includes/header_image_area');?>
