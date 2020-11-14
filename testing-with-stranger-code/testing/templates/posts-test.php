<?php 
/**
 * Template name: Посты тестов
 */
get_header();
?>
<main class="p-tests__main page__main">
  <div class="container">
    <img class="p-tests__rocket" src="<?= get_template_directory_uri(); ?>/assets/img/logo-rocket.png" alt="Ракета">
    <figure class="p-tests__figure">
      <div class="p-tests__figure-wrapper">
        <svg class="p-tests__figure-icon">
          <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#test"></use>
        </svg>
      </div>
    </figure>
    <h1 class="page-title p-tests__title">Тесты</h1>
      <?php
        $args = array(
          'post_type' => 'post-test',
        );
        $loop = new WP_Query( $args );
      ?>
      <?php
        if( $loop->have_posts() ) {
          while( $loop->have_posts() ) {
            $loop->the_post();
            ?>
              <article class="p-tests__article">
                <h2 class="p-tests__article-title">
                  <?php the_title(); ?>
                </h2>
                <p class="p-tests__article-text">
                  <?php the_excerpt(); ?>
                </p>
                <a class="button p-tests__article-button" href="<?php the_permalink(); ?>">
                  Пройти тест
                </a>
              </article>
            <?php
          }
          wp_reset_postdata();
        } 
      ?>
  </div>
</main>
<?php get_footer(); ?>