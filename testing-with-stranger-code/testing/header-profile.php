<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header header--empty">
    <div class="header__bar p-profile__header-bar">
      <div class="container header__bar-wrapper p-profile__header-bar-wrapper">
        <span class="p-profile__username p-profile__header-bar-username">
          <?php 
            $current_user = wp_get_current_user();
            echo $current_user->display_name;
          ?>
        </span>
        <nav class="menu header__menu">
          <button class="menu__button" type="button" aria-expanded="false" aria-controls="menu__list"></button>
          <?php wp_nav_menu(array(
            'theme_location' => 'header_menu'
          )); ?>
        </nav>
        <div class="p-profile__user">
          <span class="p-profile__username p-profile__user-name">
            <?php 
              $current_user = wp_get_current_user();
              echo $current_user->display_name;
            ?>
          </span>
          <a class="p-profile__logout" href="<?= wp_logout_url( home_url() ); ?>">
            <span class="p-profile__logout-text">Выход</span>
            <svg class="p-profile__logout-icon">
              <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#log-out"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </header>