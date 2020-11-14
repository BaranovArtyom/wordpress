<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header p-login__header">
    <div class="header__bar p-login__header-bar">
      <div class="container header__bar-wrapper p-login__header-bar-wrapper">
        <nav class="menu header__menu p-login__menu">
          <button class="menu__button" type="button" aria-expanded="false" aria-controls="menu__list"></button>
          <?php wp_nav_menu(array(
            'theme_location' => 'header_menu'
          )); ?>
          <a class="p-login__to-home" href="<?= home_url(); ?>">
            <svg class="p-login__to-home-icon">
              <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#arrowheads-left"></use>
            </svg>
            На главную
          </a>
        </nav>
      </div>
    </div>
  </header>