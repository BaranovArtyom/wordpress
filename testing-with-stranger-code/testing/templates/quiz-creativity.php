<?php 
/**
 * Template name: Определение типов мышления и уровня креативности
 */
get_header('no-menu');
?>
<main class="p-testing__main page__main">
  <div class="container p-testing__wrapper">
    <div class="p-testing__figure">
      <div class="p-testing__figure-wrapper">
        <svg class="p-testing__figure-icon">
          <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#question"></use>
        </svg>
      </div>
    </div>
    <?= do_shortcode('[quiz_creativity]'); ?>
  </div>
</main>
<?php get_footer('empty'); ?>