<?php 
/**
 * Template name: Вход
 */
get_header('login');
?>
  <main class="p-login__main page__main">
    <div class="container p-login__main-wrapper">
      <?php echo do_shortcode( '[login_form]' ); ?>
    </div>
  </main>
<?php get_footer('empty'); ?>