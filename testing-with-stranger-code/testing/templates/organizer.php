<?php 
/**
 * Template name: Организатор
 */
get_header();
?>
<main class="p-organizer__main page__main">
  <div class="container p-organizer__wrapper">
    <div class="p-organizer__figure"></div>
    <div class="p-organizer__icon">
      <svg>
        <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#partnership"></use>
      </svg>
    </div>
    <h1 class="page-title p-organizer__title">Организатор</h1>
    <img class="p-organizer__logo" src="<?= get_template_directory_uri(); ?>/assets/img/organizer-logo.png" alt="Мой бизнес">
    <img class="p-organizer__logo" src="<?= get_template_directory_uri(); ?>/assets/img/organizer-logo-fppsk.png" alt="ФППСК">
    <article class="p-organizer__article">
      <h2 class="p-organizer__article-title">
      <?php the_field('title'); ?>
      </h2>
      <?php the_field('txt'); ?>
    </article>
    <aside class="p-organizer__aside">
      <div class="p-organizer__aside-item">
        <span class="p-organizer__aside-title">Контактные телефоны:</span>
        <a href="tel:<?php the_field('phone_1'); ?>"><?php the_field('phone_1'); ?></a>
        <a href="tel:<?php the_field('phone_2'); ?>"><?php the_field('phone_2'); ?></a>
      </div>
      <div class="p-organizer__aside-item">
        <span class="p-organizer__aside-title">Адрес центра «Мой бизнес»:</span>
        <?php the_field('adress'); ?>
      </div>
      <div class="p-organizer__aside-item">
        <span class="p-organizer__aside-title">Адрес электронной почты:</span>
        <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
      </div>
      <div class="p-organizer__aside-item">
        <span class="p-organizer__aside-title">Режим работы:</span>
        <p>
          <?php the_field('work_hours'); ?>
        </p>
      </div>
      <a 
        class="p-organizer__aside-link" 
        href="<?php the_field('link'); ?>"
      >
        <?php the_field('link'); ?>
      </a>
    </aside>
  </div>
</main>
<?php get_footer(); ?>