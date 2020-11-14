<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__bar">
      <div class="container header__bar-wrapper">
        <nav class="menu header__menu">
          <button class="menu__button" type="button" aria-expanded="false" aria-controls="menu__list"></button>
          <?php wp_nav_menu(array(
            'theme_location' => 'header_menu'
          )); ?>
        </nav>
        <div class="user header__user">

          <div class="user__logged user__logged--out p-home__logged">
            <a class="user__login" href="<?= home_url('/login'); ?>">Вход</a>
            |
            <a class="user__registration" href="<?= home_url('/registration'); ?>">Регистрация</a>
          </div>

          <div class="user__logged user__logged--in p-home__logged">
            <a class="user__profile" href="<?= home_url('/profile'); ?>">Личный кабинет</a>
          </div>

        </div>
      </div>
    </div>
    <div class="container header__promo-wrapper">
      <div class="header__promo">
        <h1 class="page-title header__promo-title">
        <?php the_field('header_title'); ?>
        </h1>
        <div class="header__promo-text">
        <?php the_field('header_txt'); ?>
        </div>
        <a class="button header__promo-link" href="<?= home_url('/testirovanie'); ?>">
          Пройти тестирование
        </a>
      </div>
      <div class="header__figure">
        <div class="header__figure-picture">
          <?php 
            $image = get_field('header_img');
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], '', false, array( 
                'class' => 'header__figure-image',
              ) );
            }
          ?>
        </div>
        <div class="header__figure-test">
          <svg class="header__figure-test-icon">
            <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#online-test"></use>
          </svg>
        </div>
      </div>
    </div>
  </header>