<?php 

  /**
  * Quiz guidance form
  */

  // Shortcode for quiz guidance form
  function shortcode_quiz_guidance() {
    $current_user = wp_get_current_user();

    if($current_user->c_patronymic) {
      $output = quiz_guidance_form_fields();
    } else {
      $output = wp_redirect( home_url().'/lichnye-dannye' ); exit;
    }
    return $output;
  }
  add_shortcode('quiz_guidance', 'shortcode_quiz_guidance');

  // Markup for quiz guidance form
  function quiz_guidance_form_fields() { 
  
    ob_start(); ?>
      <?php $current_user = wp_get_current_user(); ?>
      <form class="quiz" action="" method="POST">
        <div class="quiz__wrapper">
          <div class="quiz__items">
            <div class="quiz__item">
              <p class="quiz__question">
                1. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_1" value="a" checked />
                    Ухаживать за животными
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_1" value="b" />
                    Обслуживать машины, приборы (следить, регулировать)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                2. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_2" value="a" checked />
                    Помогать больным
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_2" value="b" />
                    Составлять таблицы, схемы, программы для вычислительных машин
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                3. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_3" value="a" checked />
                    Следить за качеством книжных иллюстраций, плакатов, художественных открыток, грампластинок
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_3" value="b" />
                    Следить за состоянием, развитием растений
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                4. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_4" value="a" checked />
                    Обрабатывать материалы (дерево, ткань, металл, пластмассу и т.п.)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_4" value="b" />
                    Доводить Товары до потребителя, рекламировать, продавать
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                5. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_5" value="a" checked />
                    Обсуждать научно-популярные книги, статьи
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_5" value="b" />
                    Обсуждать художественные книги (или пьесы, концерты)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                6. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_6" value="a" checked />
                    Выращивать молодняк (животных какой-либо породы)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_6" value="b" />
                    Тренировать товарищей (или младших) в выполнении каких-либо действий (трудовых, учебных, спортивных)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                7. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_7" value="a" checked />
                    Копировать рисунки, изображения (или настраивать музыкальные инструменты)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_7" value="b" />
                    Управлять каким-либо грузовым (подъемным или транспортным) средством – подъемным краном, трактором, тепловозом и др.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                8. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_8" value="a" checked />
                    Сообщать, разъяснять людям нужные им сведения (в справочном бюро, на экскурсии и т.д.)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_8" value="b" />
                    Оформлять выставки, витрины (или участвовать в подготовке пьес, концертов)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                9. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_9" value="a" checked />
                    Ремонтировать вещи, изделия (одежду, технику), жилище
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_9" value="b" />
                    Искать и исправлять ошибки в текстах, таблицах, рисунках
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                10. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_10" value="a" checked />
                    Лечить животных
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_10" value="b" />
                    Выполнять вычисления, расчеты
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                11. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_11" value="a" checked />
                    Выводить новые сорта растений
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_11" value="b" />
                    Конструировать, проектировать новые виды промышленных изделий (машины, одежду, дома, продукты питания и т.п.)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                12. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_12" value="a" checked />
                    Разбирать споры, ссоры между людьми, убеждать, разъяснять, наказывать, поощрять
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_12" value="b" />
                    Разбираться в чертежах, схемах, таблицах (проверять, уточнять, приводить в порядок)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                13. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_13" value="a" checked />
                    Наблюдать, изучать работу кружков художественной самодеятельности
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_13" value="b" />
                    Наблюдать, изучать жизнь микробов
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                14. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_14" value="a" checked />
                    Обслуживать, налаживать медицинские приборы, аппараты
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_14" value="b" />
                    Оказывать людям медицинскую помощь при ранениях, ушибах, ожогах и т.п.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                15. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_15" value="a" checked />
                    Составлять точные описания-отчеты о наблюдаемых явлениях, событиях, измеряемых объектах и др.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_15" value="b" />
                    Художественно описывать, изображать события (наблюдаемые и представляемые)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                16. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_16" value="a" checked />
                    Делать лабораторные анализы в больнице
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_16" value="b" />
                    Принимать, осматривать больных, беседовать с ними, назначать лечение
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                17. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_17" value="a" checked />
                    Красить или расписывать стены помещений, поверхность изделий
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_17" value="b" />
                    Осуществлять монтаж или сборку машин, приборов
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                18. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_18" value="a" checked />
                    Организовать культпоходы сверстников или младших в театры, музеи, экскурсии, туристические походы и т.п.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_18" value="b" />
                    Играть на сцене, принимать участие в концертах
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                19. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_19" value="a" checked />
                    Изготовлять по чертежам детали, изделия (машины, одежду), строить здания
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_19" value="b" />
                    Заниматься черчением, копировать чертежи, карты
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                20. Предположим, что после соответствующего обучения вы сможете выполнить любую работу. Но если бы вам пришлось выбирать только одну из двух возможностей, что бы вы предпочли?
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_20" value="a" checked />
                    Вести борьбу с болезнями растений, с вредителями леса, сада
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_20" value="b" />
                    Работать на клавишных машинах (пишущей машинке, телетайпе, наборной машине и др.)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <input 
            type="hidden" 
            name="quiz_guidance_nonce" 
            value="<?php echo wp_create_nonce('quiz-guidance-nonce'); ?>"
          >
          <div class="quiz__footer">
            <div class="quiz__progress">
              <span class="quiz__progress-made">
                Готово: <span class="quiz__progress-precent">0%</span>
              </span>
              <div class="quiz__progress-bar">
                <span class="quiz__progress-track"></span>
              </div>
            </div>
            <div class="quiz__nav">
              <button class="quiz__button quiz__button--prev" type="button">
                <svg class="quiz__button-icon">
                  <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow-left"></use>
                </svg>
              </button>
              <button class="button quiz__button quiz__button--next" type="button">
                <svg class="quiz__button-icon quiz__button-icon--next">
                  <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow-right"></use>
                </svg>
                Далее
              </button>
            </div>
          </div>
        </div>
        <div class="quiz__thanks">
          <h3 class="quiz__thanks-title">
            Спасибо, что прошли тестированиe
          </h3>
          <button 
            class="button quiz__thanks-button" 
            type="submit" 
            name="action" 
            value="quiz-guidance"
          >
            Показать результаты
          </button>
        </div>
      </form>
    <?php
    return ob_get_clean();
  }

  // Get result quiz guidance
  function get_result_quiz_guidance() {

    global $current_user;
    $current_user = wp_get_current_user();
    
    if ( 
        'POST' == $_SERVER['REQUEST_METHOD'] 
        && !empty( $_POST['action'] ) 
        && $_POST['action'] == 'quiz-guidance' 
        && isset($_POST['quiz_guidance_nonce']) 
        && wp_verify_nonce($_POST['quiz_guidance_nonce'], 'quiz-guidance-nonce') 
      ) {

      update_user_meta( $current_user->ID, 'quiz_guidance', true );

      function count_matches($arr) {
        $matches = 0;
        foreach ($_POST as $k => $v) {
          if($k !== 'quiz_inclinations_nonce' && $k !== 'action') {
            if ( array_key_exists($k, $arr) ) {
              if ($arr[$k] === $_POST[$k] ) {
                $matches += 1;
              }
            }
          }
        }
        return $matches;
      }

      $variant = 0;

      $arr_1 = array(
        'q_1'  => 'a',
        'q_3'  => 'b',
        'q_6'  => 'a',
        'q_10' => 'a',
        'q_11' => 'a',
        'q_13' => 'b',
        'q_16' => 'a',
        'q_20' => 'a'
      );

      $arr_2 = array(
        'q_1'  => 'b',
        'q_4'  => 'a',
        'q_7'  => 'b',
        'q_9'  => 'a',
        'q_11' => 'b',
        'q_14' => 'a',
        'q_17' => 'b',
        'q_19' => 'a'
      );

      $arr_3 = array(
        'q_2'  => 'a',
        'q_4'  => 'b',
        'q_6'  => 'b',
        'q_8'  => 'a',
        'q_12' => 'a',
        'q_14' => 'b',
        'q_16' => 'b',
        'q_18' => 'a'
      );

      $arr_4 = array(
        'q_2' => 'b',
        'q_5' => 'a',
        'q_9' => 'b',
        'q_10' => 'b',
        'q_12' => 'b',
        'q_15' => 'a',
        'q_19' => 'b',
        'q_20' => 'b'
      );

      $arr_5 = array(
        'q_3' => 'a',
        'q_5' => 'b',
        'q_7' => 'a',
        'q_8' => 'b',
        'q_13' => 'a',
        'q_15' => 'b',
        'q_17' => 'a',
        'q_18' => 'b'
      );

      $var_1 = count_matches($arr_1);
      $var_2 = count_matches($arr_2);
      $var_3 = count_matches($arr_3);
      $var_4 = count_matches($arr_4);
      $var_5 = count_matches($arr_5);

      $vars = array(
        '1' => $var_1,
        '2' => $var_2,
        '3' => $var_3,
        '4' => $var_4,
        '5' => $var_5
      );

      $errors = custom_errors()->get_error_messages();


    // only create the user in if there are no errors
      if(empty($errors)) {
        $variant = array_keys($vars, max($vars));
        switch ($variant[0]) {
          case '1':
            $page = get_page_by_path( 'chelovek-priroda', 'OBJECT', 'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_guidance', $page->ID );
            wp_redirect( home_url('/chelovek-priroda'));
            exit;
            break;
          case '2':
            $page = get_page_by_path( 'chelovek-tehnika', 'OBJECT', 'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_guidance', $page->ID );
            wp_redirect( home_url('/chelovek-tehnika'));
            exit;
            break;
          case '3':
            $page = get_page_by_path( 'chelovek-chelovek', 'OBJECT', 'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_guidance', $page->ID );
            wp_redirect( home_url('/chelovek-chelovek'));
            exit;
            break;
          case '4':
            $page = get_page_by_path( 'chelovek-znak', 'OBJECT', 'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_guidance', $page->ID );
            wp_redirect( home_url('/chelovek-znak'));
            exit;
            break;
          case '5':
            $page = get_page_by_path( 'chelovek-hudozhestvennyj-obraz', 'OBJECT', 'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_guidance', $page->ID );
            wp_redirect( home_url('/chelovek-hudozhestvennyj-obraz'));
            exit;
            break;
        }

        do_action('edit_user_profile_update', $current_user->ID);
      }
    }
  }
  add_action('init', 'get_result_quiz_guidance');