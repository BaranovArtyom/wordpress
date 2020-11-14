<?php 

  /**
  * Custom user profile form
  */

  // Shortcode for profile form
  function custom_profile_form() {
    if(is_user_logged_in()) {
      $output = custom_profile_form_fields();
    } else {
      $output = '<p class="login-error">Сначала нужно <a href="'. $url_login .'">войти</a></p>';
    }
    return $output;
  }
  add_shortcode('profile_form', 'custom_profile_form');

  // Markup for profile form
  function custom_profile_form_fields() {
  
    ob_start(); ?>
      <?php $current_user = wp_get_current_user(); ?>
      <div class="p-profile__items">
        <div class="p-profile__tabs">
          <div class="p-profile__tab">Тесты</div>
          <div class="p-profile__tab">Контактные данные</div>
        </div>
        <div class="p-profile__item p-profile__tests">
          <h6 class="p-profile__item-title">Тесты</h6>

          <?php if( get_post(144) ) : ?>
            <?php $post = get_post(144); ?>
            <div class="p-profile__tests-item">
              <span class="p-profile__tests-title">
                <?= $post->post_title; ?>
              </span>

              <?php if ( $current_user->quiz_creativity ) : ?>
                <span class="p-profile__tests-status p-profile__tests-status--passed">
                  Пройден
                </span>
              <?php else: ?>
                <a 
                  class="p-profile__tests-status" 
                  href="<?= get_permalink($post); ?>"
                >
                  Пройти
                </a>
              <?php endif; ?>

              <?php if($current_user->quiz_creativity) : ?>
                <a 
                  class="p-profile__tests-download" 
                  href="<?= get_field('pdf', $current_user->result_quiz_creativity); ?>"
                  download
                >
                  <svg class="p-profile__tests-download-icon">
                    <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#pdf"></use>
                  </svg>
                  Скачать pdf
                </a>
              <?php else : ?>
                <span class="p-profile__tests-download p-profile__no-active">
                  <svg class="p-profile__tests-download-icon p-profile__no-active">
                    <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#pdf"></use>
                  </svg>
                  Скачать pdf
                </span>
              <?php endif; ?>

              <form action="" method="POST">
                <input 
                  type="hidden" 
                  name="id_form_request" 
                  value="id-form-request"
                >
                <input 
                  type="hidden" 
                  name="recipient" 
                  value="<?= $current_user->user_email; ?>"
                >
                <input 
                  type="hidden" 
                  name="pdf" 
                  value="<?= get_field('pdf', $current_user->result_quiz_creativity); ?>"
                >
                <?php if ($current_user->result_quiz_creativity) : ?>
                  <button class="p-profile__tests-mail" type="submit">
                    <svg class="p-profile__tests-mail-icon">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                    </svg>
                    Отправить на e-mail
                  </button>
                <?php else : ?>
                  <span class="p-profile__tests-mail p-profile__no-active">
                    <svg class="p-profile__tests-mail-icon p-profile__no-active">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                    </svg>
                    Отправить на e-mail
                  </span>
                <?php endif; ?>
              </form>
            </div>
          <?php endif; ?>

          <?php if( get_post(136) ) : ?>
            <?php  $post = get_post(136); ?>
            <div class="p-profile__tests-item">
              <span class="p-profile__tests-title">
                <?= $post->post_title; ?>
              </span>

              <?php if ( $current_user->quiz_personality ) : ?>
                <span class="p-profile__tests-status p-profile__tests-status--passed">
                  Пройден
                </span>
              <?php else: ?>
                <a 
                  class="p-profile__tests-status" 
                  href="<?= get_permalink($post); ?>"
                >
                  Пройти
                </a>
              <?php endif; ?>

              <?php if($current_user->quiz_personality) : ?>
                <a 
                  class="p-profile__tests-download" 
                  href="<?= get_field('pdf', $current_user->result_quiz_personality); ?>"
                  download
                >
                  <svg class="p-profile__tests-download-icon">
                    <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#pdf"></use>
                  </svg>
                  Скачать pdf
                </a>
              <?php else : ?>
                <span class="p-profile__tests-download p-profile__no-active">
                  <svg class="p-profile__tests-download-icon p-profile__no-active">
                    <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#pdf"></use>
                  </svg>
                  Скачать pdf
                </span>
              <?php endif; ?>

              <form action="" method="POST">
                <input 
                  type="hidden" 
                  name="id_form_request" 
                  value="id-form-request"
                >
                <input 
                  type="hidden" 
                  name="recipient" 
                  value="<?= $current_user->user_email; ?>"
                >
                <input 
                  type="hidden" 
                  name="pdf" 
                  value="<?= get_field('pdf', $current_user->result_quiz_personality); ?>"
                >
                <?php if ($current_user->result_quiz_personality) : ?>
                  <button class="p-profile__tests-mail" type="submit">
                    <svg class="p-profile__tests-mail-icon">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                    </svg>
                    Отправить на e-mail
                  </button>
                <?php else : ?>
                  <span class="p-profile__tests-mail p-profile__no-active">
                    <svg class="p-profile__tests-mail-icon p-profile__no-active">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                    </svg>
                    Отправить на e-mail
                  </span>
                <?php endif; ?>
              </form>
            </div>
          <?php endif; ?>

          <?php if( get_post(58) ) : ?>
            <?php  $post = get_post(58); ?>
            <div class="p-profile__tests-item">
              <span class="p-profile__tests-title">
                <?= $post->post_title; ?>
              </span>

              <?php if ( $current_user->quiz_inclinations ) : ?>
                <span class="p-profile__tests-status p-profile__tests-status--passed">
                  Пройден
                </span>
              <?php else: ?>
                <a 
                  class="p-profile__tests-status" 
                  href="<?= get_permalink($post); ?>"
                >
                  Пройти
                </a>
              <?php endif; ?>

              <?php if($current_user->quiz_inclinations) : ?>
                <a 
                  class="p-profile__tests-download" 
                  href="<?= get_field('pdf', $current_user->result_quiz_inclinations); ?>"
                  download
                >
                  <svg class="p-profile__tests-download-icon">
                    <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#pdf"></use>
                  </svg>
                  Скачать pdf
                </a>
              <?php else : ?>
                <span class="p-profile__tests-download p-profile__no-active">
                  <svg class="p-profile__tests-download-icon p-profile__no-active">
                    <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#pdf"></use>
                  </svg>
                  Скачать pdf
                </span>
              <?php endif; ?>

              <form action="" method="POST">
                <input 
                  type="hidden" 
                  name="id_form_request" 
                  value="id-form-request"
                >
                <input 
                  type="hidden" 
                  name="recipient" 
                  value="<?= $current_user->user_email; ?>"
                >
                <input 
                  type="hidden" 
                  name="pdf" 
                  value="<?= get_field('pdf', $current_user->result_quiz_inclinations); ?>"
                >
                <?php if ($current_user->result_quiz_inclinations) : ?>
                  <button class="p-profile__tests-mail" type="submit">
                    <svg class="p-profile__tests-mail-icon">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                    </svg>
                    Отправить на e-mail
                  </button>
                <?php else : ?>
                  <span class="p-profile__tests-mail p-profile__no-active">
                    <svg class="p-profile__tests-mail-icon p-profile__no-active">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                    </svg>
                    Отправить на e-mail
                  </span>
                <?php endif; ?>
              </form>
            </div>
          <?php endif; ?>

          <?php if( get_post(53) ) : ?>
            <?php  $post = get_post(53); ?>
            <div class="p-profile__tests-item">
              <span class="p-profile__tests-title">
                <?= $post->post_title; ?>
              </span>

              <?php if ( $current_user->quiz_thinking ) : ?>
                <span class="p-profile__tests-status p-profile__tests-status--passed">
                  Пройден
                </span>
              <?php else: ?>
                <a 
                  class="p-profile__tests-status" 
                  href="<?= get_permalink($post); ?>"
                >
                  Пройти
                </a>
              <?php endif; ?>

              <?php if($current_user->result_quiz_thinking) : ?>
                <a 
                  class="p-profile__tests-download" 
                  href="<?= get_field('pdf', $current_user->result_quiz_thinking); ?>"
                  download
                >
                  <svg class="p-profile__tests-download-icon">
                    <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#pdf"></use>
                  </svg>
                  Скачать pdf
                </a>
              <?php else : ?>
                <span class="p-profile__tests-download p-profile__no-active">
                  <svg class="p-profile__tests-download-icon p-profile__no-active">
                    <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#pdf"></use>
                  </svg>
                  Скачать pdf
                </span>
              <?php endif; ?>

              <form action="" method="POST">
                <input 
                  type="hidden" 
                  name="id_form_request" 
                  value="id-form-request"
                >
                <input 
                  type="hidden" 
                  name="recipient" 
                  value="<?= $current_user->user_email; ?>"
                >
                <input 
                  type="hidden" 
                  name="pdf" 
                  value="<?= get_field('pdf', $current_user->result_quiz_thinking); ?>"
                >
                <?php if ($current_user->result_quiz_thinking) : ?>
                  <button class="p-profile__tests-mail" type="submit">
                    <svg class="p-profile__tests-mail-icon">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                    </svg>
                    Отправить на e-mail
                  </button>
                <?php else : ?>
                  <span class="p-profile__tests-mail p-profile__no-active">
                    <svg class="p-profile__tests-mail-icon p-profile__no-active">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                    </svg>
                    Отправить на e-mail
                  </span>
                <?php endif; ?>
              </form>
            </div>
          <?php endif; ?>

          <?php if( get_post(52) ) : ?>
            <?php  $post = get_post(52); ?>
            <div class="p-profile__tests-item">
              <span class="p-profile__tests-title">
                <?= $post->post_title; ?>
              </span>

              <?php if ( $current_user->quiz_guidance ) : ?>
                <span class="p-profile__tests-status p-profile__tests-status--passed">
                  Пройден
                </span>
              <?php else: ?>
                <a 
                  class="p-profile__tests-status" 
                  href="<?= get_permalink($post); ?>"
                >
                  Пройти
                </a>
              <?php endif; ?>

              <?php if($current_user->quiz_guidance) : ?>
                <a 
                  class="p-profile__tests-download" 
                  href="<?= get_field('pdf', $current_user->result_quiz_guidance); ?>"
                  download
                >
                  <svg class="p-profile__tests-download-icon">
                    <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#pdf"></use>
                  </svg>
                  Скачать pdf
                </a>
              <?php else : ?>
                <span class="p-profile__tests-download p-profile__no-active">
                  <svg class="p-profile__tests-download-icon p-profile__no-active">
                    <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#pdf"></use>
                  </svg>
                  Скачать pdf
                </span>
              <?php endif; ?>

              <form action="" method="POST">
                <input 
                  type="hidden" 
                  name="id_form_request" 
                  value="id-form-request"
                >
                <input 
                  type="hidden" 
                  name="recipient" 
                  value="<?= $current_user->user_email; ?>"
                >
                <input 
                  type="hidden" 
                  name="pdf" 
                  value="<?= get_field('pdf', $current_user->result_quiz_guidance); ?>"
                >
                <?php if ($current_user->result_quiz_guidance) : ?>
                  <button class="p-profile__tests-mail" type="submit">
                    <svg class="p-profile__tests-mail-icon">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                    </svg>
                    Отправить на e-mail
                  </button>
                <?php else : ?>
                  <span class="p-profile__tests-mail p-profile__no-active">
                    <svg class="p-profile__tests-mail-icon p-profile__no-active">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                    </svg>
                    Отправить на e-mail
                  </span>
                <?php endif; ?>
              </form>
            </div>
          <?php endif; ?>
          
        </div>
        <div class="p-profile__item p-profile__contacts">
          <h6 class="p-profile__item-title">Контактные данные</h6>
          <div class="p-profile__contacts-wrapper">
            <span class="p-profile__contacts-title">
              <?php 
                $full_name = "{$current_user->last_name} {$current_user->first_name} {$current_user->c_patronymic}";
                echo $full_name;
              ?>
            </span>
            <div class="p-profile__contacts-item">
              <span class="p-profile__contacts-field">Телефон:</span>
              <span class="p-profile__contacts-value">
                <?= $current_user->c_phone; ?>
              </span>
            </div>
            <div class="p-profile__contacts-item">
              <span class="p-profile__contacts-field">E-mail:</span>
              <span class="p-profile__contacts-value">
                <?= $current_user->user_email; ?> 
              </span>
            </div>
            <div class="p-profile__contacts-item">
              <span class="p-profile__contacts-field">Дата рождения:</span>
              <span class="p-profile__contacts-value">
                <?= $current_user->c_dob; ?> 
              </span>
            </div>
            <div class="p-profile__contacts-item">
              <span class="p-profile__contacts-field">Пол:</span>
              <span class="p-profile__contacts-value">
                <?= $current_user->c_gender; ?>
              </span>
            </div>
            <div class="p-profile__contacts-item">
              <span class="p-profile__contacts-field">Целевая группа:</span>
              <span class="p-profile__contacts-value">
                <?= $current_user->c_group; ?>
              </span>
            </div>
            <div class="p-profile__contacts-item">
              <span class="p-profile__contacts-field">Место работы:</span>
              <span class="p-profile__contacts-value">
              <?= $current_user->c_work; ?>
              </span>
            </div>
            <div class="p-profile__contacts-item">
              <span class="p-profile__contacts-field">ИНН организации:</span>
              <span class="p-profile__contacts-value">
                <?= $current_user->c_inn; ?>
              </span>
            </div>

            <?php if( $current_user->c_patronymic ) : ?>
              <button type="button" class="p-profile__contacts-button">
                <svg class="p-profile__contacts-button-icon">
                  <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#edit"></use>
                </svg>
                Редактировать
              </button>
            <?php endif; ?>

          </div>

          <form 
            class="form p-personal__form p-profile__form" 
            action="" 
            method="POST" 
            autocomplete="off"
          >
            <fieldset class="form__fieldset p-personal__fieldset">

              <div class="form__error">
                <?php custom_show_error_messages(); ?>
              </div>

              <label class="form__label">
                <span class="form__label-text">Фамилия:</span>
                <input 
                  class="form__input" 
                  type="text" 
                  name="user_surname" 
                  value="<?= $current_user->last_name; ?>">
              </label>
              <label class="form__label">
                <span class="form__label-text">Имя:</span>
                <input 
                  class="form__input" 
                  type="text" 
                  name="user_name"
                  value="<?= $current_user->first_name; ?>">
              </label>
              <label class="form__label">
                <span class="form__label-text">Отчество:</span>
                <input 
                  class="form__input" 
                  type="text" 
                  name="user_patronymic"
                  value="<?= $current_user->c_patronymic; ?>">
              </label>

              <div class="form__label">
                <span class="form__label-text">Пол:</span>
                <div class="form__radios p-personal__form-radios">
                  <div class="form__radio">
                    <label class="form__radio-label">
                      <input class="form__radio-input" type="radio" name="user_gender" value="man" checked />
                      Мужской
                      <span class="form__radio-check"></span>
                    </label>
                  </div>
                  <div class="form__radio">
                    <label class="form__radio-label">
                      <input class="form__radio-input" type="radio" name="user_gender" value="woman" />
                      Женский
                      <span class="form__radio-check"></span>
                    </label>
                  </div>
                </div>
              </div>
              <label class="form__label">
                <span class="form__label-text">Дата рождения:</span>
                <input 
                  class="form__input" 
                  type="date" 
                  name="user_dob"
                  value="<?= $current_user->c_dob; ?>"
                  placeholder="09.06.1994">
              </label>
              <label class="form__label">
                <span class="form__label-text">Контактный телефон:</span>
                <input 
                  class="form__input" 
                  type="tel" 
                  name="user_phone" 
                  pattern="[0-9]{10,11}" 
                  placeholder="+7 (_ _ _) _ _ _ - _ _ - _ _ "
                  value="<?= $current_user->c_phone; ?>"
                >
              </label>
              <label class="form__label">
                <span class="form__label-text">Целевая группа:</span>
                <select class="form__input" name="user_group" required>
                  <option 
                    value="group_1"
                    <? 
                      if ($current_user->c_group === 'group_1') {
                        echo 'selected="selected"';
                      }
                    ?>
                  >
                    действующие предприниматели
                  </option>
                  <option 
                    value="group_2"
                    <? 
                      if ($current_user->c_group === 'group_2') {
                        echo 'selected="selected"';
                      }
                    ?>
                  >
                    школьники
                  </option>
                  <option 
                    value="group_3"
                    <? 
                      if ($current_user->c_group === 'group_3') {
                        echo 'selected="selected"';
                      }
                    ?>
                  >
                    лица в возрасте до 30 лет, в том числе студенты
                  </option>
                  <option 
                    value="group_4"
                    <? 
                      if ($current_user->c_group === 'group_4') {
                        echo 'selected="selected"';
                      }
                    ?>
                  >
                    инвалиды
                  </option>
                  <option 
                    value="group_5"
                    <? 
                      if ($current_user->c_group === 'group_5') {
                        echo 'selected="selected"';
                      }
                    ?>
                  >
                    выпускники и воспитанники детских домов
                  </option>
                  <option 
                    value="group_6"
                    <? 
                      if ($current_user->c_group === 'group_6') {
                        echo 'selected="selected"';
                      }
                    ?>
                  >
                    женщины
                  </option>
                  <option 
                    value="group_7"
                    <? 
                      if ($current_user->c_group === 'group_7') {
                        echo 'selected="selected"';
                      }
                    ?>
                  >
                    военнослужащие, уволенные в запас
                  </option>
                  <option 
                    value="group_8"
                    <? 
                      if ($current_user->c_group === 'group_8') {
                        echo 'selected="selected"';
                      }
                    ?>
                  >
                    лица старше 45 лет
                  </option>
                  <option 
                    value="group_9"
                    <? 
                      if ($current_user->c_group === 'group_9') {
                        echo 'selected="selected"';
                      }
                    ?>
                  >
                    безработные
                  </option>
                  <option 
                    value="group_10"
                    <? 
                      if ($current_user->c_group === 'group_10') {
                        echo 'selected="selected"';
                      }
                    ?>
                  >
                    иная
                  </option>
                </select>
              </label>
              <label class="form__label">
                <span class="form__label-text">Место работы:</span>
                <input 
                  class="form__input" 
                  type="text" 
                  name="user_work"
                  value="<?= $current_user->c_work; ?>">
              </label>
              <label class="form__label">
                <span class="form__label-text">Укажите ИНН организации:</span>
                <input 
                  class="form__input" 
                  type="text" 
                  name="user_inn"
                  value="<?= $current_user->c_inn; ?>">
              </label>

              <label class="form__label">
                <span class="form__label-text">Почта:</span>
                <input 
                  class="form__input" 
                  type="email" 
                  name="user_mail" 
                  placeholder="<?= $current_user->user_email; ?>">
              </label>
              <label class="form__label">
                <span class="form__label-text">Пароль:</span>
                <input 
                  class="form__input" 
                  type="password" 
                  name="user_password" 
                  autocomplete="new-password"
                  placeholder="*****">
              </label>

              <input 
                type="hidden" 
                name="custom_profile_nonce" 
                value="<?php echo wp_create_nonce('custom-profile-nonce'); ?>"
              >

              <button 
                class="button form__button p-profile__form-button" 
                type="submit" 
                name="action" 
                value="user_update"
              >
                Сохранить
              </button>
            </fieldset>
          </form>
        </div>
      </div>

    <?php
    return ob_get_clean();
  }

  // Update user profile
  function custom_update_user_profile() {

    global $current_user;
    $current_user = wp_get_current_user();
    
    if ( 
        'POST' == $_SERVER['REQUEST_METHOD'] 
        && !empty( $_POST['action'] ) 
        && $_POST['action'] == 'user_update' 
        && isset($_POST['custom_profile_nonce']) 
        && wp_verify_nonce($_POST['custom_profile_nonce'], 'custom-profile-nonce') 
      ) {
      
      // require_once(ABSPATH . WPINC . '/registration.php');

      $user_mail       = esc_attr( trim( $_POST["user_mail"] ) );
      $user_password   = esc_attr( trim( $_POST["user_password"] ) );
      $user_surname    = esc_attr( trim( $_POST["user_surname"] ) );
      $user_name       = esc_attr( trim( $_POST["user_name"] ) );
      $user_patronymic = esc_attr( trim( $_POST["user_patronymic"] ) );
      $user_gender     = $_POST["user_gender"];
      $user_dob        = $_POST["user_dob"];
      $user_phone      = esc_attr( trim( $_POST["user_phone"] ) );
      $user_group      = $_POST["user_group"];
      $user_work       = esc_attr( trim( $_POST["user_work"] ) );
      $user_inn        = esc_attr( trim( $_POST["user_inn"] ) );

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

      if ( !empty($user_mail) ) {
        if(!email_exists( $user_mail )) {
          wp_update_user( 
            array( 
              'ID' => $current_user->ID, 
              'user_email' => $user_mail,
            ) 
          );
        } else {
          custom_errors()->add('email_used', 'Почта уже занята');
        }
      }

      if ( !empty( $user_password ) ) {
        wp_update_user( 
          array( 
            'ID' => $current_user->ID, 
            'user_pass' => $user_password,
          ) 
        );
      }

      $errors = custom_errors()->get_error_messages();


    // only create the user in if there are no errors
      if(empty($errors)) {
        do_action('edit_user_profile_update', $current_user->ID);
        wp_redirect( get_permalink().'?updated=true' ); exit;
      }
    }
  }
  add_action('init', 'custom_update_user_profile');

?>