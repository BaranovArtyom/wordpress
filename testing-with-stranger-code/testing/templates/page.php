<?php 
/**
 * Template name: Стандартная
 */
get_header();
?>
<main class="main page__main">
  <div class="container">
    <article class="article">
      <h1 class="page-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
  </div>
</main>
<?php get_footer(); ?>