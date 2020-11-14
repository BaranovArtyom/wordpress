<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header header--empty">
    <div class="header__bar">
      <div class="container header__bar-wrapper">
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
        <div class="user header__user">

          <div class="user__logged user__logged--out">
            <a class="user__login" href="<?= home_url('/login'); ?>">Вход</a>
            |
            <a class="user__registration" href="<?= home_url('/registration'); ?>">Регистрация</a>
          </div>

          <div class="user__logged user__logged--in">
            <a class="user__profile" href="<?= home_url('/profile'); ?>">Личный кабинет</a>
          </div>

        </div>
      </div>
    </div>
  </header>