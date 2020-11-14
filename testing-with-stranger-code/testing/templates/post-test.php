<?php get_header('no-menu'); ?>
<main class="p-test__main page__main">
  <div class="container p-test__wrapper">
    <article class="p-test__article">
      <h1 class="page-title p-test__title">
        <?php the_title(); ?>
      </h1>
      <div class="p-test__picture">
        <?php 
          if( has_post_thumbnail() ) {
            the_post_thumbnail('', array(
              'class' => "p-test__image",
            ));
          }
        ?>
        <div class="p-test__figure">
          <div class="p-test__figure-wrapper">
            <svg class="p-test__figure-icon">
              <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#to-do-list"></use>
            </svg>
          </div>
        </div>
      </div>
      <div class="p-test__text">
        <?php the_content(); ?>
      </div>
      <a class="button p-test__button" href="<?php the_field('link-test'); ?>">Начать тестирование</a>
    </article>
  </div>
</main>
<?php get_footer('empty'); ?>