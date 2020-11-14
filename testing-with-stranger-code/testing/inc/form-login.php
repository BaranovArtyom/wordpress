<?php 

  /**
  * Custom user login form
  */

  // Shortcode for login form
  function custom_login_form() {

    if(!is_user_logged_in()) {
      $output = custom_login_form_fields();
    } else {
      $output = '<p class="login-error">Вы уже вошли :)</p>';
    }
    return $output;
  }
  add_shortcode('login_form', 'custom_login_form');

  // Markup for login form
  function custom_login_form_fields() {

    ob_start(); ?>

      <form class="form form-login" action="" method="POST">
        <fieldset class="form__fieldset">
          <legend class="form__legend">Вход</legend>

          <div class="form__error">
            <?php custom_show_error_messages(); ?>
          </div>

          <label class="form__label">
            <span class="form__label-text">Почта:</span>
            <input 
              class="form__input" 
              type="email" 
              name="user_name" 
              placeholder="elena@gmail.com" 
              required>
          </label>
          <label class="form__label">
            <span class="form__label-text">Пароль:</span>
            <input 
              class="form__input" 
              type="password" 
              name="user_password" 
              placeholder="*****" 
              required>
          </label>

          <?php wp_nonce_field('custom_login_nonce','custom_login_nonce_field'); ?>

          <div class="form__remarks">
            <p class="form__remark">Поля, обязательные для заполнения</p>
            <p class="form__lost-password"> 
              <a href="<?= home_url('/wp-login.php?action=lostpassword'); ?>">Забыли пароль?</a>
            </p>
          </div>
          <div class="form-login__buttons">
            <button class="button form-login__button" type="submit">Войти</button>
            <a class="button form-login__button" href="<?= home_url('/registration'); ?>">Регистрация</a>
          </div>
        </fieldset>
      </form>
    <?php
    return ob_get_clean();
  }

  // Logs a member in after submitting a login form
  function custom_login_member() {
    if(
      isset($_POST['user_name']) 
      && isset($_POST['custom_login_nonce_field']) 
      && wp_verify_nonce( $_POST['custom_login_nonce_field'], 'custom_login_nonce') 
    ) {

      // this returns the user ID and other info from the user name
      $user = get_user_by('login', $_POST['user_name']);

      if(!$user) {
        // if the user name doesn't exist
        custom_errors()->add('empty_username', 'Неверный логин');
      }

      if(!isset($_POST['user_password']) || $_POST['user_password'] == '') {
        // if no password was entered
        custom_errors()->add('empty_password', 'Введите пароль');
      }

      // check the user's login with their password
      if(!wp_check_password($_POST['user_password'], $user->user_pass, $user->ID)) {
        // if the password is incorrect for the specified user
        custom_errors()->add('empty_password', 'Неверный пароль');
      }

      // retrieve all error messages
      $errors = custom_errors()->get_error_messages();

      // only log the user in if there are no errors
      if(empty($errors)) {

        nocache_headers();
        wp_clear_auth_cookie();
        wp_set_auth_cookie( $user->ID, true );
        wp_set_current_user( $user->ID, sanitize_user($_POST['user_name']) );	
        do_action('wp_login', sanitize_user($_POST['user_name']), $user);

        wp_redirect( home_url('/profile') ); exit;
      }
    }
  }
  add_action('init', 'custom_login_member');

?>