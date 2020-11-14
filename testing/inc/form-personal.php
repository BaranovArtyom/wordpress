<?php 

  /**
  * Custom user profile form
  */

  // Shortcode for profile form
  function custom_personal_form() {
    if(is_user_logged_in()) {
      $output = custom_personal_form_fields();
    } else {
      $url_login = home_url('/login');
      $output = '<p class="login-error">Сначала нужно <a href="'. $url_login .'">войти</a></p>';
    }
    return $output;
  }
  add_shortcode('personal_form', 'custom_personal_form');

  function _var( $name , $else=null ) {
    return isset($_POST[$name]) ? $_POST[$name] : $else;
  }

  // Markup for profile form
  function custom_personal_form_fields() {
  
    ob_start(); ?>
      <?php $current_user = wp_get_current_user(); ?>
        <form class="form p-personal__form" action="" method="POST" autocomplete="off">
          <fieldset class="form__fieldset p-personal__fieldset">
            <legend class="form__legend p-personal__legend">
              Для прохождения теста заполните личные данные
            </legend>

            <div class="form__error">
              <?php custom_show_error_messages(); ?>
            </div>

            <div class="p-personal__form-header">
              <label class="form__label">
                <span class="form__label-text">Фамилия:</span>
                <input class="form__input" type="text" name="user_surname" value="<?= _var('user_surname'); ?>" required />
              </label>
              <label class="form__label">
                <span class="form__label-text">Имя:</span>
                <input class="form__input" type="text" name="user_name" value="<?= _var('user_name'); ?>" required />
              </label>
              <label class="form__label">
                <span class="form__label-text">Отчество:</span>
                <input class="form__input" type="text" name="user_patronymic" value="<?= _var('user_patronymic'); ?>" required />
              </label>
            </div>

            <div class="form__items p-personal__form-items">
              <div class="form__item p-personal__form-item">
                <div class="form__label">
                  <span class="form__label-text">Пол:</span>
                  <div class="form__radios p-personal__form-radios">
                    <div class="form__radio">
                      <label class="form__radio-label">
                        <input 
                          class="form__radio-input" 
                          type="radio" 
                          name="user_gender" 
                          value="man" 
                          <?php if(isset($_POST['user_gender']) && $_POST['user_gender'] == "man") echo 'checked'; ?>
                        required>
                        Мужской
                        <span class="form__radio-check"></span>
                      </label>
                    </div>
                    <div class="form__radio">
                      <label class="form__radio-label">
                        <input 
                          class="form__radio-input" 
                          type="radio" 
                          name="user_gender" 
                          value="woman"
                          <?php if(isset($_POST['user_gender']) && $_POST['user_gender'] == "woman") echo 'checked'; ?>
                        required>
                        Женский
                        <span class="form__radio-check"></span>
                      </label>
                    </div>
                  </div>
                </div>
                <label class="form__label">
                  <span class="form__label-text">Контактный телефон:</span>
                  <input 
                    class="form__input" 
                    type="tel" 
                    name="user_phone" 
                    pattern="(\+?\d[- .]*){7,13}"
                    value="<?= _var('user_phone'); ?>"
                    placeholder="+7 (_ _ _) _ _ _ - _ _ - _ _ " 
                    required
                  >
                </label>
                <label class="form__label">
                  <span class="form__label-text">Укажите место работы:</span>
                  <input class="form__input" type="text" name="user_work" value="<?= _var('user_work'); ?>" required />
                </label>
                <p class="form__item-remark">
                  Необходимо указать название организации полностью (к примеру: ООО «Ресурс», ИП Соловьева Александра Петровна). Если вы не работаете, укажите «не работаю», «студент», «школьник».
                </p>
              </div>
              <div class="form__item p-personal__form-item">
                <label class="form__label">
                  <span class="form__label-text">Дата рождения:</span>
                  <input 
                    class="form__input" 
                    type="date" 
                    name="user_dob" 
                    value="<?= _var('user_dob'); ?>" 
                    placeholder="дд.мг.гггг" 
                    required />
                </label>
                <label class="form__label">
                  <span class="form__label-text">Целевая группа:</span>
                  <select class="form__input" name="user_group" required>
                    <option 
                      value="group_1"
                      <?php if(isset($_POST['user_group']) && $_POST['user_group'] == "group_1") echo 'selected="selected"'; ?>
                    >
                      действующие предприниматели
                    </option>
                    <option 
                      value="group_2"
                      <?php if(isset($_POST['user_group']) && $_POST['user_group'] == "group_2") echo 'selected="selected"'; ?>
                    >
                      школьники
                    </option>
                    <option 
                      value="group_3"
                      <?php if(isset($_POST['user_group']) && $_POST['user_group'] == "group_3") echo 'selected="selected"'; ?>
                    >
                      лица в возрасте до 30 лет, в том числе студенты
                    </option>
                    <option 
                      value="group_4"
                      <?php if(isset($_POST['user_group']) && $_POST['user_group'] == "group_4") echo 'selected="selected"'; ?>
                    >
                      инвалиды
                    </option>
                    <option 
                      value="group_5"
                      <?php if(isset($_POST['user_group']) && $_POST['user_group'] == "group_5") echo 'selected="selected"'; ?>
                    >
                      выпускники и воспитанники детских домов
                    </option>
                    <option 
                      value="group_6" 
                      <?php if(isset($_POST['user_group']) && $_POST['user_group'] == "group_6") echo 'selected="selected"'; ?>
                    >
                      женщины
                    </option>
                    <option 
                      value="group_7" 
                      <?php if(isset($_POST['user_group']) && $_POST['user_group'] == "group_7") echo 'selected="selected"'; ?>
                    >
                      военнослужащие, уволенные в запас
                    </option>
                    <option 
                      value="group_8" 
                      <?php if(isset($_POST['user_group']) && $_POST['user_group'] == "group_8") echo 'selected="selected"'; ?>
                    >
                      лица старше 45 лет
                    </option>
                    <option 
                      value="group_9" 
                      <?php if(isset($_POST['user_group']) && $_POST['user_group'] == "group_9") echo 'selected="selected"'; ?>
                    >
                      безработные
                    </option>
                    <option 
                      value="group_10" 
                      <?php if(isset($_POST['user_group']) && $_POST['user_group'] == "group_10") echo 'selected="selected"'; ?>
                    >
                      иная
                    </option>
                  </select>
                </label>
                <label class="form__label">
                  <span class="form__label-text">Укажите ИНН организации:</span>
                  <input 
                    class="form__input" 
                    type="text" 
                    name="user_inn" 
                    value="<?= _var('user_inn'); ?>"
                    required />
                </label>
                <p class="form__item-remark">
                  Необходимо указать ИНН организации, в которой вы работаете или являетесь собственником. Если вы не работаете, укажите «прочее»
                </p>
              </div>
            </div>

            <p class="form__remark">Поля, обязательные для заполнения</p>
            <input 
                type="hidden" 
                name="custom_personal_nonce" 
                value="<?php echo wp_create_nonce('custom-personal-nonce'); ?>"
              >

            <div class="form__radio form__agreement">
              <div class="form__radio-label form__agreement-label">
                <!--<input class="form__radio-input" type="radio" name="agreement" value="yes" checked />-->
                Нажимая кнопку «Сохранить», я принимаю <a class="confshow" href="#">политику конфиденциальности</a> и даю <a class="useragreement" href="#">согласие на обработку персональных данных</a>
                <!--<span class="form__radio-check"></span>-->
              </div>
            </div>

            <button 
              class="button form__button" 
              type="submit" 
              name="action" 
              value="user_update"
            >
              Сохранить
            </button>
          </fieldset>
        </form>
    <?php
    return ob_get_clean();
  }

  // Update user profile
  function custom_update_personal_profile() {

    global $current_user;
    $current_user = wp_get_current_user();
    
    if ( 
        'POST' == $_SERVER['REQUEST_METHOD'] 
        && !empty( $_POST['action'] ) 
        && $_POST['action'] == 'user_update' 
        && isset($_POST['custom_personal_nonce']) 
        && wp_verify_nonce($_POST['custom_personal_nonce'], 'custom-personal-nonce') 
      ) {
      
      $user_surname    = esc_attr( trim( $_POST["user_surname"] ) );
      $user_name       = esc_attr( trim( $_POST["user_name"] ) );
      $user_patronymic = esc_attr( trim( $_POST["user_patronymic"] ) );
      $user_gender     = $_POST["user_gender"];
      $user_dob        = $_POST["user_dob"];
      $user_phone      = esc_attr( trim( $_POST["user_phone"] ) );
      $user_group      = $_POST["user_group"];
      $user_work       = esc_attr( trim( $_POST["user_work"] ) );
      $user_inn        = esc_attr( trim( $_POST["user_inn"] ) );
      $user_agreement  = $_POST["agreement"];

      if ( !empty($user_surname) ) {
        wp_update_user([
          'ID' => $current_user->ID,
          'last_name' => $user_surname,
        ]);
      }

      if ( !empty($user_name) ) {
        wp_update_user([
          'ID' => $current_user->ID,
          'first_name' => $user_name,
        ]);
      }

      if ( !empty($user_patronymic) ) {
        update_user_meta( $current_user->ID, 'c_patronymic', $user_patronymic );
      }

      if ( !empty($user_gender) ) {
        $gender = $user_gender === 'man' ? 'Мужской' : 'Женский';
        update_user_meta( $current_user->ID, 'c_gender', $gender );
      }

      if ( !empty($user_dob) ) {
        update_user_meta( $current_user->ID, 'c_dob', $user_dob );
      }

      if ( !empty($user_phone) ) {
        update_user_meta( $current_user->ID, 'c_phone', $user_phone );
      }

      if ( !empty($user_group) ) {
        update_user_meta( $current_user->ID, 'c_group', $user_group );
      }

      if ( !empty($user_work) ) {
        update_user_meta( $current_user->ID, 'c_work', $user_work );
      }

      if ( !empty($user_inn) ) {
        update_user_meta( $current_user->ID, 'c_inn', $user_inn );
      }

      /*if(!$user_agreement) {
        custom_errors()->add('no_agreement', 'Нужно согласиться с политикой конфиденциальности');
      }*/

      $errors = custom_errors()->get_error_messages();


    // only create the user in if there are no errors
      if(empty($errors)) {
        do_action('edit_user_profile_update', $current_user->ID);
        wp_redirect( home_url('/profile') ); exit;
      }
    }
  }
  add_action('init', 'custom_update_personal_profile');
?>