<?php 

  /**
  * Quiz personality form
  */

  // Shortcode for quiz personality form
  function shortcode_quiz_personality() {
    $current_user = wp_get_current_user();

    if($current_user->c_patronymic) {
      $output = quiz_personality_form_fields();
    } else {
      $output = wp_redirect( home_url().'/lichnye-dannye' ); exit;
    }
    return $output;
  }
  add_shortcode('quiz_personality', 'shortcode_quiz_personality');

  // Markup for quiz personality form
  function quiz_personality_form_fields() {
  
    ob_start(); ?>
      <?php $current_user = wp_get_current_user(); ?>
      <form class="quiz" action="" method="POST">
        <div class="quiz__wrapper">
          <div class="quiz__items">
            <div class="quiz__item">
              <p class="quiz__question">
              1. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_1" value="Р" checked />
                    Инженер-технолог
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_1" value="И" />
                    Конструктор
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              2. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_2" value="Р" checked />
                    Вязальщица
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_2" value="С" />
                    Санитарный врач
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              3. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_3" value="Р" checked />
                    Повар
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_3" value="К" />
                    Наборщик
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              4. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_4" value="Р" checked />
                    Фотограф
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_4" value="П" />
                    Заведующий магазином
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              5. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_5" value="Р" checked />
                    Чертёжник
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_5" value="А" />
                    Дизайнер
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              6. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_6" value="И" checked />
                    Философ
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_6" value="С" />
                    Психиатр
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              7. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_7" value="И" checked />
                    Учёный-химик
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_7" value="К" />
                    Бухгалтер
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              8. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_8" value="И" checked />
                    Редактор научного журнала
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_8" value="П" />
                    Адвокат
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              9. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_9" value="И" checked />
                    Лингвист
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_9" value="А" />
                    Переводчик художественной литературы
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              10. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_10" value="С" checked />
                    Педиатр
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_10" value="К" />
                    Статистик (в театре)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              11. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_11" value="С" checked />
                    Завуч по внеклассной работе
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_11" value="П" />
                    Представитель профсоюзного комитета
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              12. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_12" value="С" checked />
                    Спортивный врач
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_12" value="А" />
                    Фельетонист
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              13. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_13" value="К" checked />
                    Нотариус
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_13" value="П" />
                    Снабженец
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              14. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_14" value="К" checked />
                    Перфораторщик
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_14" value="А" />
                    Карикатурист
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              15. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_15" value="П" checked />
                    Политический деятель
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_15" value="А" />
                    Писатель
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              16. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_16" value="Р" checked />
                    Садовник
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_16" value="И" />
                    Метеоролог
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              17. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_17" value="Р" checked />
                    Водитель трамвая
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_17" value="С" />
                    Фельдшер
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              18. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_18" value="Р" checked />
                    Инженер-электронщик
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_18" value="К" />
                    Секретарь-машинистка
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              19. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_19" value="Р" checked />
                    Телеоператор
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_19" value="П" />
                    Режиссер
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              20. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_20" value="Р" checked />
                    Маляр
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_20" value="А" />
                    Художник по металлу
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              21. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_21" value="И" checked />
                    Биолог
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_21" value="С" />
                    Главный врач
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              22. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_22" value="И" checked />
                    Гидролог
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_22" value="К" />
                    Ревизор (налоговый инспектор)
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              23. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_23" value="И" checked />
                    Зоолог
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_23" value="П" />
                    Главный зоотехник
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              24. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_24" value="И" checked />
                    Математик
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_24" value="А" />
                    Архитектор
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              25. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_25" value="С" checked />
                    Работник детской комнаты милиции
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_25" value="К" />
                    Счетовод
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              26. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_26" value="С" checked />
                    Учитель
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_26" value="П" />
                    Командир отряда
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              27. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_27" value="С" checked />
                    Воспитатель
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_27" value="А" />
                    Художник по керамике
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              28. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_28" value="К" checked />
                    Экономист
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_28" value="П" />
                    Заведующий отделом
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              29. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_29" value="К" checked />
                    Корректор
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_29" value="А" />
                    Критик
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              30. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_30" value="П" checked />
                    Заведующий хозяйством
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_30" value="А" />
                    Дирижер
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              31. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_31" value="Р" checked />
                    Радиооператор
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_31" value="И" />
                    Специалист по ядерной физике
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              32. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_32" value="Р" checked />
                    Наладчик
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_32" value="К" />
                    Монтажник
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              33. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_33" value="Р" checked />
                    Агроном-семеновод
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_33" value="П" />
                    Председатель кооператива
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              34. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_34" value="Р" checked />
                    Закройщик
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_34" value="А" />
                    Декоратор
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              35. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_35" value="И" checked />
                    Научный работник музея
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_35" value="С" />
                    Консультант
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              36. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_36" value="И" checked />
                    Археолог
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_36" value="П" />
                    Эксперт
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              37. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_37" value="И" checked />
                    Ученый
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_37" value="А" />
                    Актер
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              38. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_38" value="С" checked />
                    Логопед
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_38" value="К" />
                    Стенографист
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              39. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_39" value="С" checked />
                    Врач
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_39" value="П" />
                    Дипломат
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              40. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_40" value="С" checked />
                    Психолог
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_40" value="А" />
                    Поэт
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              41. В каждой паре профессий постарайтесь отдать предпочтение одной из них
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_41" value="К" checked />
                    Главный бухгалтер
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_41" value="П" />
                    Директор
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <input 
            type="hidden" 
            name="quiz_personality_nonce" 
            value="<?php echo wp_create_nonce('quiz-personality-nonce'); ?>"
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
            value="quiz-personality"
          >
            Показать результаты
          </button>
        </div>
      </form>
    <?php
    return ob_get_clean();
  }

  // Get result quiz personality
  function get_result_quiz_personality() {

    global $current_user;
    $current_user = wp_get_current_user();
    
    if ( 
        'POST' == $_SERVER['REQUEST_METHOD'] 
        && !empty( $_POST['action'] ) 
        && $_POST['action'] == 'quiz-personality' 
        && isset($_POST['quiz_personality_nonce']) 
        && wp_verify_nonce($_POST['quiz_personality_nonce'], 'quiz-personality-nonce') 
      ) {

    update_user_meta( $current_user->ID, 'quiz_personality', true );

    // $arr_r = array();
    // $arr_i = array();
    // $arr_c = array();
    // $arr_k = array();
    // $arr_p = array();
    // $arr_a = array();

    function count_matches() {
      $var_r = 0;
      $var_i = 0;
      $var_c = 0;
      $var_k = 0;
      $var_p = 0;
      $var_a = 0;

      foreach ($_POST as $k => $v) {
        if($k !== 'quiz_personality_nonce' && $k !== 'action') {
          if($v === 'Р') {
            $var_r += 1;
          }
          if($v === 'И') {
            $var_i += 1;
          }
          if($v === 'С') {
            $var_c += 1;
          }
          if($v === 'К') {
            $var_k += 1;
          }
          if($v === 'П') {
            $var_p += 1;
          }
          if($v === 'А') {
            $var_a += 1;
          }
        }
      }

      return array(
        '1' => $var_r,
        '2' => $var_i,
        '3' => $var_c,
        '4' => $var_k,
        '5' => $var_p,
        '6' => $var_a
      );
    }

      $errors = custom_errors()->get_error_messages();

    // only create the user in if there are no errors
      if(empty($errors)) {
        $vars = count_matches();

        $variant = array_keys($vars, max($vars));

        switch ($variant[0]) {
          case '1':
            $page = get_page_by_path( 
              'realistichnyj-tip', 
              'OBJECT', 
              'post-result-quiz' 
            );
            update_user_meta( $current_user->ID, 'result_quiz_personality', $page->ID );
            wp_redirect( home_url('/realistichnyj-tip?q=4&a1='.$vars[1].'&a2='.$vars[2].'&a3='.$vars[3].'&a4='.$vars[4].'&a5='.$vars[5].'&a6='.$vars[6]));
            exit;
            break;
          case '2':
            $page = get_page_by_path( 
              'intellektualnyj-tip', 
              'OBJECT', 
              'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_personality', $page->ID );
            wp_redirect( home_url('/intellektualnyj-tip?q=4&a1='.$vars[1].'&a2='.$vars[2].'&a3='.$vars[3].'&a4='.$vars[4].'&a5='.$vars[5].'&a6='.$vars[6]));
            exit;
            break;
          case '3':
            $page = get_page_by_path( 
              'socialnyj-tip', 
              'OBJECT', 
              'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_personality', $page->ID );
            wp_redirect( home_url('/socialnyj-tip?q=4&a1='.$vars[1].'&a2='.$vars[2].'&a3='.$vars[3].'&a4='.$vars[4].'&a5='.$vars[5].'&a6='.$vars[6]));
            exit;
            break;
          case '4':
            $page = get_page_by_path( 
              'konvencialnyj-tip', 
              'OBJECT', 
              'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_personality', $page->ID );
            wp_redirect( home_url('/konvencialnyj-tip?q=4&a1='.$vars[1].'&a2='.$vars[2].'&a3='.$vars[3].'&a4='.$vars[4].'&a5='.$vars[5].'&a6='.$vars[6]));
            exit;
            break;
          case '5':
            $page = get_page_by_path( 
              'predpriimchivyj-tip', 
              'OBJECT', 
              'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_personality', $page->ID );
            wp_redirect( home_url('/predpriimchivyj-tip?q=4&a1='.$vars[1].'&a2='.$vars[2].'&a3='.$vars[3].'&a4='.$vars[4].'&a5='.$vars[5].'&a6='.$vars[6]));
            exit;
            break;
          case '6':
            $page = get_page_by_path( 
              'artisticheskij-tip', 
              'OBJECT', 
              'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_personality', $page->ID );
            wp_redirect( home_url('/artisticheskij-tip?q=4&a1='.$vars[1].'&a2='.$vars[2].'&a3='.$vars[3].'&a4='.$vars[4].'&a5='.$vars[5].'&a6='.$vars[6]));
            exit;
            break;
        }

        do_action('edit_user_profile_update', $current_user->ID);
      }
    }
  }
  add_action('init', 'get_result_quiz_personality');