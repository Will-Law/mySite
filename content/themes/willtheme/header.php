<!DOCTYPE html>
<html>

<head>
  <?php wp_head(); ?>
  <script src="node_modules/babel-polyfill/dist/polyfill.min.js"></script>
</head>

<?php get_template_part( 'parts/hero' ); ?>

<header>

  <div class="menu-primary-navigation">
    <?php wp_nav_menu(array('theme_location'=>'navigation'));?>
  </div>

</header>

<body>
