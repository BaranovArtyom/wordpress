<?php 
/**
 * Template name: Профиль
 */
if ( isset($_POST['id_form_request']) ) {
  if ( ! function_exists( 'wp_handle_upload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
  }

  $text = 'Ваш результат тестирование в формате PDF.';
  $file = realpath(str_replace(get_bloginfo('url'), '.', $_POST['pdf']));
  $attachment = array( $file );

  $to = $_POST['recipient'];
  $subject = 'Результат тестирования';
  $message = $text;
  wp_mail( $to, $subject, $message, $headers = '', $attachment);
}
get_header('profile');
?>
  <main class="p-profile__main page__main">
    <div class="container p-profile__main-wrapper">
      <?php echo do_shortcode( '[profile_form]' ); ?>
    </div>
  </main>
<?php get_footer(); ?>