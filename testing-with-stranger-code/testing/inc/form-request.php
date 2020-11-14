<?php 

/**
* Add form request
*/

// Shortcode for form_request
function short_form_request() {
  $output = form_request_fields();
  return $output;
}
add_shortcode('form_request', 'short_form_request');

// Markup for form_request form
function form_request_fields() {
  $frontpage_id = get_option( 'page_on_front' );
  ob_start(); ?>
    <form class="form form--post form-request" action="" method="POST">
      <h5 class="form__title">
        Title of form
      </h5>
      <input 
        class="form__input" 
        type="text" 
        name="user_practice" 
        placeholder="Name" 
        required>
      <input 
        class="form__input" 
        type="email" 
        placeholder="E-mail" 
        name="user_email" 
        required>
      <button class="button form__button form-request__button" type="submit">
        Sent
      </button>
      <input 
        type="hidden" 
        name="id_form_request" 
        value="id-form-request">
      <input 
        type="hidden" 
        name="form_request_nonce" 
        value="<?php echo wp_create_nonce('form-request-nonce'); ?>">
      <input 
        type="hidden" 
        id="g-recaptcha-response-request" 
        name="g-recaptcha-response-request">
    </form>
    <script>
      grecaptcha.ready(function() {
        grecaptcha.execute('6LfK3uAUAAAAADkInJv9kTtSxSlW9VOk-Txt0uVq', {action: 'request'})
          .then(function(token) {
            document.getElementById('g-recaptcha-response-request').value=token;
          });
        });
    </script>
  <?php
  return ob_get_clean();
}

// Handler for form_request form
function handler_form_request() {

  if ( isset($_POST['id_form_request']) && wp_verify_nonce($_POST['form_request_nonce'], 'form-request-nonce') ) {
    $practice   = $_POST["user_practice"];
    $email      = $_POST["user_email"];
    define('SITE_KEY', '6LfK3uAUAAAAADkInJv9kTtSxSlW9VOk-Txt0uVq');
    define('SECRET_KEY', '6LfK3uAUAAAAAGJPSQl6ijQW1icOo_mrw6hzQeWr');

    function getCaptcha2($secretKey) {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LfK3uAUAAAAAGJPSQl6ijQW1icOo_mrw6hzQeWr"."&response={$secretKey}");
      $return = json_decode($response);
      return $return;
    }

    $return = getCaptcha2($_POST['g-recaptcha-response-request']);

    if($return->success == true && $return->score > 0.5) {
      $to = 'email@gmail.com';
      $subject = 'Обратная связь';
      $message = "Тип практики:". $practice ."\r\n\r\n";
      $message .= "Почта:". $email ."\r\n\r\n";
      $response_mail = wp_mail( $to, $subject, $message, $headers = '');
    }

  }

}
add_action('init', 'handler_form_request');
?>