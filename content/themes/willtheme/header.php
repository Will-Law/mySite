<!DOCTYPE html>
<html>

<head>
  <?php wp_head(); ?>
</head>

<?php get_template_part( 'parts/hero' ); ?>

<div id=page-container class=page-container>

<header id=header>

  <?php wp_nav_menu(array('theme_location'=>'navigation'));?>

</header>

<body>
