<?php 

  /**
  * Quiz creativity form
  */

  // Shortcode for quiz creativity form
  function shortcode_quiz_creativity() {
    $current_user = wp_get_current_user();

    if($current_user->c_patronymic) {
      $output = quiz_creativity_form_fields();
    } else {
      $output = wp_redirect( home_url().'/lichnye-dannye' ); exit;
    }
    return $output;
  }
  add_shortcode('quiz_creativity', 'shortcode_quiz_creativity');

  // Markup for quiz creativity form
  function quiz_creativity_form_fields() {
  
    ob_start(); ?>
      <?php $current_user = wp_get_current_user(); ?>
      <form class="quiz" action="" method="POST">
        <div class="quiz__wrapper">
          <div class="quiz__items">
            <div class="quiz__item">
              <p class="quiz__question">
              1. Мне легче что-либо сделать, чем объяснить, почему я так сделал(а).
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_1" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_1" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              2. Я люблю настраивать программы для компьютера.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_2" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_2" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              3. Я люблю читать художественную литературу.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_3" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_3" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              4. Я люблю живопись (скульптуру).
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_4" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_4" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              5. Я не предпочел(а) бы работу, в которой все четко определено.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_5" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_5" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              6. Мне проще усвоить что-либо, если я имею возможность манипулировать предметами.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_6" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_6" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              7. Я люблю шахматы, шашки.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_7" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_7" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              8. Я легко излагаю свои мысли как в устной, так и в письменной форме.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_8" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_8" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              9. Я хотел(а) бы заниматься коллекционированием.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_9" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_9" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              10. Я люблю и понимаю абстрактную живопись.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_10" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_10" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              11. Я скорее хотел(а) бы быть слесарем, чем инженером.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_11" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_11" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              12. Для меня алгебра интереснее, чем геометрия.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_12" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_12" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              13. В художественной литературе для меня важнее не что сказано, а как сказано.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_13" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_13" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              14. Я люблю посещать зрелищные мероприятия.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_14" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_14" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              15. Мне не нравится регламентированная работа.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_15" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_15" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              16. Мне нравится что-либо делать своими руками.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_16" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_16" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              17. В детстве я любил(а) создавать свою систему слов/знаков/шифр для переписки с друзьями.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_17" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_17" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              18. Я придаю большое значение форме выражения мыслей.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_18" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_18" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              19. Мне трудно передать содержание рассказа без его образного представления.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_19" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_19" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              20. Не люблю посещать музеи, так как все они одинаковы.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_20" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_20" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              21. Любую информацию я воспринимаю как руководство к действию.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_21" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_21" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              22. Меня больше привлекает товарный знак фирмы, чем ее название.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_22" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_22" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              23. Меня привлекает работа комментатора радио, телевидения.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_23" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_23" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              24. Знакомые мелодии вызывают у меня в голове определенные картины.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_24" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_24" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              25. Люблю фантазировать.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_25" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_25" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              26. Когда я слушаю музыку, мне хочется танцевать.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_26" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_26" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              27. Мне интересно разбираться в чертежах и схемах.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_27" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_27" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              28. Мне нравятся художественная литература.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_28" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_28" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              29. Знакомый запах вызывает всю картину событий, происшедших много лет назад.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_29" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_29" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              30. Pазнообразные увлечения делают жизнь человека богаче.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_30" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_30" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              31. Истинно только то, что можно потрогать руками.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_31" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_31" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              32. Я предпочитаю точные науки.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_32" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_32" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              33. Я за словом в карман не лезу.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_33" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_33" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              34. Люблю рисовать.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_34" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_34" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              35. Один и тот же спектакль/фильм можно смотреть много раз, главное — игра актеров, новая интерпретация.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_35" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_35" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              36. Мне нравилось в детстве собирать механизмы из деталей конструктора.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_36" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_36" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              37. Мне кажется, что я смог(ла) бы изучить стенографию.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_37" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_37" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              38. Мне нравится читать стихи вслух.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_38" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_38" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              39. Я согласен(а) с утверждением, что красота спасет мир.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_39" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_39" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              40. Я предпочел(а) бы быть закройщиком, а не портным.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_40" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_40" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              41. Лучше сделать табуретку руками, чем заниматься ее проектированием.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_41" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_41" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              42. Мне кажется, что я смог(ла) бы овладеть профессией программиста.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_42" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_42" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              43. Люблю поэзию.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_43" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_43" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              44. Прежде чем изготовить какую-то деталь, сначала я делаю чертеж.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_44" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_44" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              45. Мне больше нравится процесс деятельности, чем ее конечный результат.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_45" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_45" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              46. Для меня лучше поработать в мастерской, нежели изучать чертежи.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_46" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_46" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              47. Мне интересно было бы расшифровать древние тайнописи.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_47" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_47" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              48. Если мне нужно выступить, то я всегда готовлю свою речь, хотя уверен(а), что найду необходимые слова.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_48" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_48" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              49. Больше люблю решать задачи по геометрии, чем по алгебре.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_49" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_49" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              50. Даже в отлаженном деле пытаюсь творчески изменить что-то.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_50" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_50" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              51. Я люблю дома заниматься рукоделием, мастерить.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_51" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_51" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              52. Я смог(ла) бы овладеть языками программирования.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_52" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_52" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              53. Мне нетрудно написать сочинение на заданную тему.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_53" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_53" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              54. Мне легко представить образ несуществующего предмета или явления.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_54" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_54" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              55. Я иногда сомневаюсь даже в том, что для других очевидно.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_55" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_55" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              56. Я предпочел(а) бы сам(а) отремонтировать утюг, нежели нести его в мастерскую.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_56" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_56" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              57. Я легко усваиваю грамматические конструкции языка.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_57" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_57" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              58. Люблю писать письма.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_58" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_58" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              59. Сюжет кинофильма могу представить как ряд образов.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_59" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_59" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              60. Абстрактные картины дают большую пищу для размышлений.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_60" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_60" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              61. В школе мне больше всего нравились уроки труда, домоводства.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_61" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_61" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              62. У меня не вызывает затруднений изучение иностранного языка.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_62" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_62" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              63. Я охотно что-то рассказываю, если меня просят друзья.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_63" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_63" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              64. Я легко могу представить в образах содержание услышанного.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_64" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_64" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              65. Я не хотел(а) бы подчинять свою жизнь определенной системе.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_65" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_65" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              66. Я чаще сначала сделаю, а потом думаю о правильности, решения.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_66" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_66" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              67. Думаю, что смог(ла) бы изучить китайские иероглифы.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_67" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_67" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              68. Не могу не поделиться только что услышанной новостью.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_68" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_68" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              69. Мне кажется, что работа сценариста/писателя интересна.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_69" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_69" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              70. Мне нравится работа дизайнера.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_70" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_70" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              71. При решении какой-то проблемы мне легче идти методом проб и ошибок.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_71" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_71" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              72. Изучение дорожных знаков не составило / не составит мне труда.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_72" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_72" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              73. Я легко нахожу общий язык с незнакомыми людьми.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_73" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_73" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              74. Меня привлекает работа художника-оформителя.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_74" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_74" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              75. Не люблю ходить одним и тем же путем.
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_75" value="yes" checked />
                    Да
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_75" value="no" />
                    Нет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <input 
            type="hidden" 
            name="quiz_creativity_nonce" 
            value="<?php echo wp_create_nonce('quiz-creativity-nonce'); ?>"
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
            value="quiz-creativity"
          >
            Показать результаты
          </button>
        </div>
      </form>
    <?php
    return ob_get_clean();
  }

  // Get result quiz creativity
  function get_result_quiz_creativity() {

    global $current_user;
    $current_user = wp_get_current_user();
    
    if ( 
        'POST' == $_SERVER['REQUEST_METHOD'] 
        && !empty( $_POST['action'] ) 
        && $_POST['action'] == 'quiz-creativity' 
        && isset($_POST['quiz_creativity_nonce']) 
        && wp_verify_nonce($_POST['quiz_creativity_nonce'], 'quiz-creativity-nonce') 
      ) {

    update_user_meta( $current_user->ID, 'quiz_creativity', true );

    function count_matches($arr) {
      $matches = 0;

      foreach ($_POST as $k => $v) {
        if($k !== 'quiz_creativity_nonce' && $k !== 'action') {
          if( array_key_exists($k, $arr) ) {
            if ($arr[$k] === 'yes' && $_POST[$k] === 'yes' ) {
              $matches += 1;
            }
          }
        }
      }

      return $matches;
    }

    $variant = 0;

    $arr_1 = array(
      'q_1'  => 'yes',
      'q_6'  => 'yes',
      'q_11' => 'yes',
      'q_16' => 'yes',
      'q_21' => 'yes',
      'q_26' => 'yes',
      'q_31' => 'yes',
      'q_36' => 'yes',
      'q_41' => 'yes',
      'q_46' => 'yes',
      'q_51' => 'yes',
      'q_56' => 'yes',
      'q_61' => 'yes',
      'q_66' => 'yes',
      'q_71' => 'yes',
    );

    $arr_2 = array(
      'q_2'  => 'yes',
      'q_7'  => 'yes',
      'q_12' => 'yes',
      'q_17' => 'yes',
      'q_22' => 'yes',
      'q_27' => 'yes',
      'q_32' => 'yes',
      'q_37' => 'yes',
      'q_42' => 'yes',
      'q_47' => 'yes',
      'q_52' => 'yes',
      'q_57' => 'yes',
      'q_62' => 'yes',
      'q_67' => 'yes',
      'q_72' => 'yes',
    );

    $arr_3 = array(
      'q_3'  => 'yes',
      'q_8'  => 'yes',
      'q_13' => 'yes',
      'q_18' => 'yes',
      'q_23' => 'yes',
      'q_28' => 'yes',
      'q_33' => 'yes',
      'q_38' => 'yes',
      'q_43' => 'yes',
      'q_48' => 'yes',
      'q_53' => 'yes',
      'q_58' => 'yes',
      'q_63' => 'yes',
      'q_68' => 'yes',
      'q_73' => 'yes',
    );

    $arr_4 = array(
      'q_4'  => 'yes',
      'q_9'  => 'yes',
      'q_14' => 'yes',
      'q_19' => 'yes',
      'q_24' => 'yes',
      'q_29' => 'yes',
      'q_34' => 'yes',
      'q_39' => 'yes',
      'q_44' => 'yes',
      'q_49' => 'yes',
      'q_54' => 'yes',
      'q_59' => 'yes',
      'q_64' => 'yes',
      'q_69' => 'yes',
      'q_74' => 'yes',
    );

    $arr_5 = array(
      'q_5'  => 'yes',
      'q_10' => 'yes',
      'q_15' => 'yes',
      'q_20' => 'yes',
      'q_25' => 'yes',
      'q_30' => 'yes',
      'q_35' => 'yes',
      'q_40' => 'yes',
      'q_45' => 'yes',
      'q_50' => 'yes',
      'q_55' => 'yes',
      'q_60' => 'yes',
      'q_65' => 'yes',
      'q_70' => 'yes',
      'q_75' => 'yes',
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
function cmt($a) {
  return count($a);
}

    // only create the user in if there are no errors
      if(empty($errors)) {
        $variant = array_keys($vars, max($vars));

        switch ($variant[0]) {
          case '1':
            $page = get_page_by_path( 
              'predmetno-dejstvennoe-myshlenie', 
              'OBJECT', 
              'post-result-quiz' 
            );
            update_user_meta( $current_user->ID, 'result_quiz_creativity', $page->ID );
            wp_redirect( home_url('/predmetno-dejstvennoe-myshlenie?q=5&a1='.$var_1.'&a2='.$var_2.'&a3='.$var_3.'&a4='.$var_4.'&a5='.$var_5)); 
            exit;
            break;
          case '2':
            $page = get_page_by_path( 
              'abstraktno-simvolicheskim-myshleniem', 
              'OBJECT', 
              'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_creativity', $page->ID );
            wp_redirect( home_url('/abstraktno-simvolicheskim-myshleniem?q=5&a1='.$var_1.'&a2='.$var_2.'&a3='.$var_3.'&a4='.$var_4.'&a5='.$var_5)); 
            exit;
            break;
          case '3':
            $page = get_page_by_path( 
              'slovesno-logicheskoe-myshlenie', 
              'OBJECT', 
              'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_creativity', $page->ID );
            wp_redirect( home_url('/slovesno-logicheskoe-myshlenie?q=5&a1='.$var_1.'&a2='.$var_2.'&a3='.$var_3.'&a4='.$var_4.'&a5='.$var_5)); 
            exit;
            break;
          case '4':
            $page = get_page_by_path( 
              'nagljadno-obraznym-myshleniem', 
              'OBJECT', 
              'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_creativity', $page->ID );
            wp_redirect( home_url('/nagljadno-obraznym-myshleniem?q=5&a1='.$var_1.'&a2='.$var_2.'&a3='.$var_3.'&a4='.$var_4.'&a5='.$var_5)); 
            exit;
            break;
          case '5':
            $page = get_page_by_path( 
              'kreativnost', 
              'OBJECT', 
              'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_creativity', $page->ID );
            wp_redirect( home_url('/kreativnost?q=5&a1='.$var_1.'&a2='.$var_2.'&a3='.$var_3.'&a4='.$var_4.'&a5='.$var_5)); 
            exit;
            break;
        }

        do_action('edit_user_profile_update', $current_user->ID);
      }
    }
  }
  add_action('init', 'get_result_quiz_creativity');