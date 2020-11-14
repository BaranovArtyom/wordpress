<?php 
/**
 * Template name: Личные данные
 */
get_header('login');
?>
<main class="p-login__main page__main">
  <div class="container p-login__main-wrapper">
    <?= do_shortcode('[personal_form]'); ?>
  </div>
</main>
<?php get_footer('empty'); ?>