<?php 

  /**
  * Custom user registration form
  */

  // Shortcode for registration form
  function custom_registration_form() {
    $registration_enabled = get_option('users_can_register');

    if(!is_user_logged_in()) {
      $output = custom_registration_form_fields();
    } else {
      $output = '<p class="login-error">Одной регистрации хватит :)</p>';
    }

    // only show the registration form if allowed
    if(!$registration_enabled) {
      $output = '<p class="login-error">Регистрация запрещена</p>';
    } 

    return $output;
  }
  add_shortcode('register_form', 'custom_registration_form');


  // Markup for registration form

  function custom_registration_form_fields() {

    ob_start(); ?>

      <form class="form" action="" method="POST" autocomplete="off">
        <fieldset class="form__fieldset">
          <legend class="form__legend">Регистрация</legend>

          <div class="form__error">
            <?php custom_show_error_messages(); ?>
          </div>

          <label class="form__label">
            <span class="form__label-text">Электронная почта:</span>
            <input 
              class="form__input" 
              type="email" 
              name="user_email" 
              placeholder="alex@gmail.com"
              required>
          </label>
          <label class="form__label">
            <span class="form__label-text">Пароль:</span>
            <input 
              class="form__input" 
              type="password" 
              name="user_password"
              placeholder="*****" 
              required
              autocomplete="new-password"
              >
          </label>
          <label class="form__label">
            <span class="form__label-text">Повторите пароль:</span>
            <input 
              class="form__input" 
              type="password" 
              name="user_password_confirm" 
              placeholder="*****" 
              required>
          </label>
          <p class="form__remark">Поля, обязательные для заполнения</p>

          <input 
            type="hidden" 
            name="custom_register_nonce" 
            value="<?php echo wp_create_nonce('custom-register-nonce'); ?>"
          >

          <div class="form__radio form__agreement">
            <div class="form__radio-label form__agreement-label">
              <!--<input class="form__radio-input" type="radio" name="agreement" value="yes" checked required />-->
              Нажимая кнопку «Зарегистрироваться», я принимаю <a class="confshow" href="#">политику конфиденциальности</a> и даю <a class="useragreement" href="#">согласие на обработку персональных данных</a>
              <!--<span class="form__radio-check"></span>-->
            </div>
          </div>

          <div class="form-login__buttons">
            <button class="button form-login__button" type="submit">Зарегистрироваться</button>
            <a class="button form-login__button" href="<?= home_url('/login'); ?>">Вход</a>
          </div>
        </fieldset>
      </form>
      
    <?php
    return ob_get_clean();
  }

  // Register a new user
  function custom_add_new_member() {
    if (isset( $_POST["user_email"] ) && isset($_POST['custom_register_nonce']) && wp_verify_nonce($_POST['custom_register_nonce'], 'custom-register-nonce')) {
      $user_login		      = $_POST["user_email"];	
      $user_email		      = $_POST["user_email"];
      $user_pass		      = $_POST["user_password"];
      $pass_confirm 	    = $_POST["user_password_confirm"];
      $user_agreement 	  = $_POST["agreement"];

      $uppercase = preg_match('@[A-Z]@', $user_pass);
      $lowercase = preg_match('@[a-z]@', $user_pass);
      $number    = preg_match('@[0-9]@', $user_pass);

      // this is required for username checks
      // require_once(ABSPATH . WPINC . '/registration.php');

      if($user_email == '') {
        // empty username
        custom_errors()->add('username_empty', 'Введите почту');
      }
      if(!is_email($user_email)) {
        //invalid email
        custom_errors()->add('email_invalid', 'Неверная почта');
      }
      if(email_exists($user_email)) {
        //Email address already registered
        custom_errors()->add('email_used', 'Почта уже занята');
      }
      if($user_pass == '') {
        // passwords do not match
        custom_errors()->add('password_empty', 'Введите пароль');
      }

      if( !$lowercase || !$number || strlen($password) > 6 ) {
        // passwords do not match
        custom_errors()->add(
          'password_empty', 
          'Длина пароля должна быть не менее 6. <br> 
          Пароль должен состоять из букв латинского алфавита (A-z), <br> цифр (0-9)'
        );
      }
      if($user_pass != $pass_confirm) {
        // passwords do not match
        custom_errors()->add('password_mismatch', 'Пароли не совпадают');
      }

      /*if(!$user_agreement) {
        custom_errors()->add('no_agreement', 'Нужно согласиться с политикой конфиденциальности');
      }*/

      $errors = custom_errors()->get_error_messages();

    // only create the user in if there are no errors
      if(empty($errors)) {

        $new_user_id = wp_insert_user(array(
            'user_login'		  => $user_login,
            'user_pass'	 		  => $user_pass,
            'user_email'		  => $user_email,
            'user_registered'	=> date('Y-m-d H:i:s'),
            'role'				    => 'subscriber'
          )
        );

        $user = get_user_by('login', $user_login);

        if($new_user_id) {
          wp_new_user_notification($user->ID, 'both');

          nocache_headers();
          wp_clear_auth_cookie();
          wp_set_auth_cookie( $user->ID, true );
          wp_set_current_user($user->ID, sanitize_user($_POST['user_login']));	
          do_action('wp_login', sanitize_user($_POST['user_login']), $user);

          wp_redirect(home_url('/lichnye-dannye')); exit;
        }
      }
    }
  }
  add_action('init', 'custom_add_new_member');

?>