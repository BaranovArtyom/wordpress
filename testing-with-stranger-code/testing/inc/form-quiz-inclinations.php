<?php 

  /**
  * Quiz inclinations form
  */

  // Shortcode for quiz inclinations form
  function shortcode_quiz_inclinations() {
    $current_user = wp_get_current_user();

    if($current_user->c_patronymic) {
      $output = quiz_inclinations_form_fields();
    } else {
      $output = wp_redirect( home_url().'/lichnye-dannye' ); exit;
    }
    return $output;
  }
  add_shortcode('quiz_inclinations', 'shortcode_quiz_inclinations');

  // Markup for quiz inclinations form
  function quiz_inclinations_form_fields() {
  
    ob_start(); ?>
      <?php $current_user = wp_get_current_user(); ?>
      <form class="quiz" action="" method="POST">
        <div class="quiz__wrapper">
          <div class="quiz__items">
            <div class="quiz__item">
              <p class="quiz__question">
                Мне хотелось бы в своей профессиональной деятельности
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_1" value="1" checked />
                    общаться с самыми разными людьми;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_1" value="4" />
                    снимать фильмы, писать книги, рисовать, выступать на сцене и т.д.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_1" value="6" />
                    заниматься расчетами; вести документацию.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                В книге или кинофильме меня больше всего привлекает
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_2" value="2" checked />
                    возможность следить за ходом мыслей автора;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_2" value="4" />
                    художественная форма, мастерство писателя или режиссера;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_2" value="5" />
                    сюжет, действия героев.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Меня больше обрадует Нобелевская премия
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_3" value="1" checked />
                    за общественную деятельность;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_3" value="2" />
                    в области науки;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_3" value="4" />
                    в области искусства.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Я скорее соглашусь стать
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_4" value="3" checked />
                    главным механиком;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_4" value="5" />
                    начальником экспедиции;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_4" value="6" />
                    главным бухгалтером.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Будущее людей определяют
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_5" value="1" checked />
                    взаимопонимание между людьми;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_5" value="2" />
                    научные открытия;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_5" value="3" />
                    развитие производства.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Если я стану руководителем, то в первую очередь займусь
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_6" value="1" checked />
                    созданием дружного, сплоченного коллектива;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_6" value="2" />
                    разработкой новых технологий обучения;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_6" value="6" />
                    работой с документами.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                На технической выставке меня больше привлечет
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_7" value="2" checked />
                    внутреннее устройство экспонатов;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_7" value="3" />
                    их практическое применение.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_7" value="4" />
                    внешний вид экспонатов (цвет, форм);
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                В людях я ценю, прежде всего
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_8" value="1" checked />
                    дружелюбие и отзывчивость
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_8" value="5" />
                    смелость и выносливость;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_8" value="6" />
                    обязательность и аккуратность.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                В свободное время мне хотелось бы
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_9" value="2" checked />
                    ставить различные опыты, эксперименты;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_9" value="4" />
                    писать стихи, сочинять музыку или рисовать;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_9" value="5" />
                    тренироваться.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                В заграничных поездках меня скорее заинтересует
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_10" value="4" checked />
                    возможность знакомства с историей и культурой другой страны;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_10" value="5" />
                    экстремальный туризм (альпинизм, виндсерфинг, горные лыж);
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_10" value="6" />
                    деловое общение;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Мне интереснее беседовать о
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_11" value="1" checked />
                    человеческих взаимоотношениях;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_11" value="2" />
                    новой научной гипотезе;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_11" value="3" />
                    технических характеристиках новой модели машины, компьютера.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              Если бы в моей школе было всего три кружка, я бы выбрал
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_12" value="3" checked />
                    технический;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_12" value="4" />
                    музыкальный;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_12" value="5" />
                    спортивный.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                В школе следует обратить особое внимание на
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_13" value="1" checked />
                    улучшение взаимопонимания между учителями и учениками;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_13" value="5" />
                    поддержание здоровья учащихся, занятия спортом;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_13" value="6" />
                    укрепление дисциплины.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Я с большим удовольствием смотрю
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_14" value="2" checked />
                    научно-популярные фильмы;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_14" value="4" />
                    программы о культуре и искусстве;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_14" value="5" />
                    спортивные программы.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Мне хотелось бы работать
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_15" value="1" checked />
                    с детьми или сверстниками;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_15" value="3" />
                    с машинами, механизмами;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_15" value="5" />
                    с объектами природы.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Школа в первую очередь должна
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_16" value="1" checked />
                    учить общению с другими людьми;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_16" value="3" />
                    давать знания;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_16" value="6" />
                    обучать навыкам работы.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Главное в жизни
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_17" value="4" checked />
                    иметь возможность заниматься творчеством;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_17" value="5" />
                    вести здоровый образ жизни;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_17" value="6" />
                    тщательно планировать свои дела.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Государство должно в первую очередь заботиться о
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_18" value="1" checked />
                    защите интересов и прав граждан;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_18" value="2" />
                    достижениях в области науки и техники;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_18" value="3" />
                    материальном благополучии граждан.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Мне больше всего нравятся уроки
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_19" value="3" checked />
                    труда;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_19" value="5" />
                    физкультуры;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_19" value="6" />
                    математики.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Мне интереснее было бы
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_20" value="1" checked />
                    заниматься сбытом товаров;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_20" value="3" />
                    изготавливать изделия;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_20" value="6" />
                    планировать производство товаров.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Я предпочитаю читать статьи о
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_21" value="2" checked />
                    выдающихся ученых и их открытиях;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_21" value="3" />
                    интересных изобретениях;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_21" value="4" />
                    жизни и творчестве писателей, художников, музыкантов.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Свободное время я люблю
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_22" value="2" checked />
                    читать, думать, рассуждать;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_22" value="3" />
                    что-нибудь мастерить, шить, ухаживать за животными, растениями;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_22" value="4" />
                    ходить на выставки, концерты, в музеи.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Больший интерес у меня вызовет сообщение о
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_23" value="2" checked />
                    научном открытии;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_23" value="4" />
                    художественной выставке;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_23" value="6" />
                    экономической ситуации.
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
                Я предпочту работать
              </p>
              <div class="form__radios quiz__radios">
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_24" value="1" checked />
                    в помещении, где много людей;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_24" value="5" />
                    в необычных условиях;
                    <span class="form__radio-check"></span>
                  </label>
                </div>
                <div class="form__radio">
                  <label class="form__radio-label">
                    <input class="form__radio-input" type="radio" name="q_24" value="6" />
                    в обычном кабинет
                    <span class="form__radio-check"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <input 
            type="hidden" 
            name="quiz_inclinations_nonce" 
            value="<?php echo wp_create_nonce('quiz-inclinations-nonce'); ?>"
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
            value="quiz-inclinations"
          >
            Показать результаты
          </button>
        </div>
      </form>
    <?php
    return ob_get_clean();
  }

  // Get result quiz inclinations
  function get_result_quiz_inclinations() {

    global $current_user;
    $current_user = wp_get_current_user();
    
    if ( 
        'POST' == $_SERVER['REQUEST_METHOD'] 
        && !empty( $_POST['action'] ) 
        && $_POST['action'] == 'quiz-inclinations' 
        && isset($_POST['quiz_inclinations_nonce']) 
        && wp_verify_nonce($_POST['quiz_inclinations_nonce'], 'quiz-inclinations-nonce') 
      ) {

    update_user_meta( $current_user->ID, 'quiz_inclinations', true );

    $arr1 = array();
    $arr2 = array();
    $arr3 = array();
    $arr4 = array();
    $arr5 = array();
    $arr6 = array();

    foreach ($_POST as $k => $v) {
      if($k !== 'quiz_inclinations_nonce' && $k !== 'action') {
        switch ($v) {
          case 1:
            $arr1[] = $v;
            break;
          case 2:
            $arr2[] = $v;
            break;
          case 3:
            $arr3[] = $v;
            break;
          case 4:
            $arr4[] = $v;
            break;
          case 5:
            $arr5[] = $v;
            break;
          case 6:
            $arr6[] = $v;
            break;
        }
      }
    }

    function result($arr1, $arr2, $arr3, $arr4, $arr5, $arr6) {
      $arrs = array(
        $arr1,
        $arr2,
        $arr3,
        $arr4,
        $arr5,
        $arr6
      );
		//var_dump($arrs);
      return max_elements($arrs);
    }

    function max_elements($arr) {
      foreach ($arr as $key => $val)
        $arr[$key] = count($val);
    
      return array_search( max($arr), $arr );
    }

      $errors = custom_errors()->get_error_messages();

function cmt($a) {
  return count($a);
}
    // only create the user in if there are no errors
      if(empty($errors)) {
        $res = result($arr1, $arr2, $arr3, $arr4, $arr5, $arr6);
		do_action('edit_user_profile_update', $current_user->ID);
        switch ($res + 1) {
          case 1:
            $page = get_page_by_path( 'sklonnost-k-rabote-s-ljudmi', 'OBJECT', 'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_inclinations', $page->ID );
            wp_redirect( home_url('/sklonnost-k-rabote-s-ljudmi?q=3&a1='.cmt($arr1).'&a2='.cmt($arr2).'&a3='.cmt($arr3).'&a4='.cmt($arr4).'&a5='.cmt($arr5).'&a6='.cmt($arr6))); 
			//var_dump(count($arr1));
			exit;
            break;
          case 2:
            $page = get_page_by_path( 'sklonnost-k-issledovatelskoj-intellektualnoj-rabote', 'OBJECT', 'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_inclinations', $page->ID );
            wp_redirect( home_url('/sklonnost-k-issledovatelskoj-intellektualnoj-rabote?q=3&a1='.cmt($arr1).'&a2='.cmt($arr2).'&a3='.cmt($arr3).'&a4='.cmt($arr4).'&a5='.cmt($arr5).'&a6='.cmt($arr6))); 
            exit;
            break;
          case 3:
            $page = get_page_by_path( 'sklonnost-k-prakticheskoj-dejatelnosti', 'OBJECT', 'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_inclinations', $page->ID );
            wp_redirect( home_url('/sklonnost-k-prakticheskoj-dejatelnosti?q=3&a1='.cmt($arr1).'&a2='.cmt($arr2).'&a3='.cmt($arr3).'&a4='.cmt($arr4).'&a5='.cmt($arr5).'&a6='.cmt($arr6))); 
            exit;
            break;
          case 4:
            $page = get_page_by_path( 'sklonnost-k-jesteticheskim-vidam-dejatelnosti', 'OBJECT', 'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_inclinations', $page->ID );
            wp_redirect( home_url('/sklonnost-k-jesteticheskim-vidam-dejatelnosti?q=3&a1='.cmt($arr1).'&a2='.cmt($arr2).'&a3='.cmt($arr3).'&a4='.cmt($arr4).'&a5='.cmt($arr5).'&a6='.cmt($arr6))); 
            exit;
            break;
          case 5:
            $page = get_page_by_path( 'sklonnost-k-jekstremalnym-vidam-dejatelnosti', 'OBJECT', 'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_inclinations', $page->ID );
            wp_redirect( home_url('/sklonnost-k-jekstremalnym-vidam-dejatelnosti?q=3&a1='.cmt($arr1).'&a2='.cmt($arr2).'&a3='.cmt($arr3).'&a4='.cmt($arr4).'&a5='.cmt($arr5).'&a6='.cmt($arr6))); 
            exit;
            break;
          case 6:
            $page = get_page_by_path( 'sklonnost-k-planovo-jekonomicheskim-vidam-dejatelnosti', 'OBJECT', 'post-result-quiz' );
            update_user_meta( $current_user->ID, 'result_quiz_inclinations', $page->ID );
            wp_redirect( home_url('/sklonnost-k-planovo-jekonomicheskim-vidam-dejatelnosti?q=3&a1='.cmt($arr1).'&a2='.cmt($arr2).'&a3='.cmt($arr3).'&a4='.cmt($arr4).'&a5='.cmt($arr5).'&a6='.cmt($arr6))); 
            exit;
            break;
        }

        
      }
    }
  }
  add_action('init', 'get_result_quiz_inclinations');