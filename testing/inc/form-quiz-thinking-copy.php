<?php 

  /**
  * Quiz thinking form
  */

  // Shortcode for quiz thinking form
  function shortcode_quiz_thinking() {
    $current_user = wp_get_current_user();

    if($current_user->c_patronymic) {
      $output = quiz_thinking_form_fields();
    } else {
      $output = wp_redirect( home_url().'/lichnye-dannye' ); exit;
    }
    return $output;
  }
  add_shortcode('quiz_thinking', 'shortcode_quiz_thinking');

  // Markup for quiz thinking form
  function quiz_thinking_form_fields() {
  
    ob_start(); ?>
      <?php $current_user = wp_get_current_user(); ?>
      <form class="quiz quiz-think" action="" method="POST">
        <div class="quiz__wrapper">
          <div class="quiz__items">
            <div class="quiz__item">
              <p class="quiz__question">
              А. Когда  между  людьми  имеет  место  конфликт  на  почве  идей,  я  отдаю предпочтение той стороне, которая:
              </p>
              <label class="quiz-think__label">
                <select name="ans[1][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. устанавливает, определяет конфликт и пытается выразить его открыто;
              </label>
              <label class="quiz-think__label">
                <select name="ans[1][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. лучше всех выражает затрагиваемые ценности и идеалы;
              </label>
              <label class="quiz-think__label">
                <select name="ans[1][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. лучше всех отражает мои личные взгляды и опыт;
              </label>
              <label class="quiz-think__label">
                <select name="ans[1][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. подходит к ситуации наиболее логично и последовательно;
              </label>
              <label class="quiz-think__label">
                <select name="ans[1][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. излагает аргументы наиболее кратко и убедительно.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              Б. Когда я начинаю работать над проектом в составе группы, самое важное для меня:
              </p>
              <label class="quiz-think__label">
                <select name="ans[2][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. понять цели и значение этого проекта;
              </label>
              <label class="quiz-think__label">
                <select name="ans[2][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. раскрыть цели и ценности участников рабочей группы;
              </label>
              <label class="quiz-think__label">
                <select name="ans[2][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. определить, как мы собираемся разрабатывать данный проект;
              </label>
              <label class="quiz-think__label">
                <select name="ans[2][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. понять, какую выгоду этот проект может принести для нашей группы;
              </label>
              <label class="quiz-think__label">
                <select name="ans[2][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. чтобы работа над проектом была организована и сдвинулась с места.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              В. Вообще говоря, я усваиваю новые идеи лучше всего, когда могу:
              </p>
              <label class="quiz-think__label">
                <select name="ans[3][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. связывать их с текущими или будущими занятиями;
              </label>
              <label class="quiz-think__label">
                <select name="ans[3][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. применять их к конкретным ситуациям;
              </label>
              <label class="quiz-think__label">
                <select name="ans[3][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. сосредоточиться на них и тщательно их проанализировать;
              </label>
              <label class="quiz-think__label">
                <select name="ans[3][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. понять, насколько они сходны с привычными идеями;
              </label>
              <label class="quiz-think__label">
                <select name="ans[3][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. противопоставить их с другими идеями.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              Г. Для меня графики, схемы, чертежи в книгах или статьях обычно:
              </p>
              <label class="quiz-think__label">
                <select name="ans[4][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. полезнее текста, если они точны;
              </label>
              <label class="quiz-think__label">
                <select name="ans[4][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. полезны, если они ясно показывают важные факты;
              </label>
              <label class="quiz-think__label">
                <select name="ans[4][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. полезны, если они поднимают вопросы по тексту;
              </label>
              <label class="quiz-think__label">
                <select name="ans[4][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. полезны, если они подкрепляются и поясняются текстом;
              </label>
              <label class="quiz-think__label">
                <select name="ans[4][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. не более и не менее полезны, чем другие материалы.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              Д. Если бы мне предложили провести какое-то исследование, я, вероятно, начал бы с...
              </p>
              <label class="quiz-think__label">
                <select name="ans[5][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. попытки определить его место в более широком контексте;
              </label>
              <label class="quiz-think__label">
                <select name="ans[5][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. определения	того,	смогу	ли	я	выполнить	его	в	одиночку	или мне потребуется помощь;
              </label>
              <label class="quiz-think__label">
                <select name="ans[5][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. размышлений и предложений о возможных результатах;
              </label>
              <label class="quiz-think__label">
                <select name="ans[5][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. решения о том, следует ли вообще проводить это исследование;
              </label>
              <label class="quiz-think__label">
                <select name="ans[5][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. попытки сформулировать	проблему как можно полнее	и точнее.
              </label>
            </div>
            <!-- <div class="quiz__item">
              <p class="quiz__question">
              E. Если бы мне пришлось собирать от членов какой-то организации информацию, касающуюся ее насущных проблем, я предпочел бы:
              </p>
              <label class="quiz-think__label">
                <select name="ans[6][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. встретиться с ними индивидуально и задать каждому конкретные вопросы;
              </label>
              <label class="quiz-think__label">
                <select name="ans[6][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. провести общее собрание и попросить их высказать свои мнения;
              </label>
              <label class="quiz-think__label">
                <select name="ans[6][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. опросить их небольшими группами, задавая общие вопросы;
              </label>
              <label class="quiz-think__label">
                <select name="ans[6][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. встретиться неофициально с влиятельными лицами и выяснить их взгляды;
              </label>
              <label class="quiz-think__label">
                <select name="ans[6][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. попросить членов организации предоставить мне (желательно в письменной форме) всю относящуюся к делу информацию, которой они располагают.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              Ж. Вероятно, я буду считать что-то правильным, истинным, если это «что-то»:
              </p>
              <label class="quiz-think__label">
                <select name="ans[7][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. выстояло	против	оппозиций,	выдержало	сопротивление противоположных подходов;
              </label>
              <label class="quiz-think__label">
                <select name="ans[7][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. согласуется с другими вещами, которым я верю;
              </label>
              <label class="quiz-think__label">
                <select name="ans[7][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. было подтверждено на практике;
              </label>
              <label class="quiz-think__label">
                <select name="ans[7][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. поддается логическому и научному доказательству;
              </label>
              <label class="quiz-think__label">
                <select name="ans[7][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. можно проверить лично на доступных наблюдению фактах.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              З. Когда я на досуге читаю журнальную статью, она будет, скорее всего:
              </p>
              <label class="quiz-think__label">
                <select name="ans[8][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. о том, как кому-то удалось решить личную или социальную проблему;
              </label>
              <label class="quiz-think__label">
                <select name="ans[8][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. посвящена дискуссионному или социальному вопросу;
              </label>
              <label class="quiz-think__label">
                <select name="ans[8][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. сообщением о научном или историческом исследовании;
              </label>
              <label class="quiz-think__label">
                <select name="ans[8][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. об интересном, забавном человеке или событии;
              </label>
              <label class="quiz-think__label">
                <select name="ans[8][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. точном,	без	доли	вымысла,	сообщении	о	чьем-то	интересном жизненном опыте.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              И. Когда я читаю отчет о работе, я обращаю внимание на...
              </p>
              <label class="quiz-think__label">
                <select name="ans[9][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. близость выводов к моему личному опыту;
              </label>
              <label class="quiz-think__label">
                <select name="ans[9][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. возможность выполнения данных рекомендаций;
              </label>
              <label class="quiz-think__label">
                <select name="ans[9][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. надежность и обоснованность результатов фактическими данными;
              </label>
              <label class="quiz-think__label">
                <select name="ans[9][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. понимание автором целей и задач работы;
              </label>
              <label class="quiz-think__label">
                <select name="ans[9][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. интерпретацию данных.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              К. Когда передо мной поставлена задача, первое, что я хочу узнать — это:
              </p>
              <label class="quiz-think__label">
                <select name="ans[10][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. каков наилучший метод для решения этой задачи;
              </label>
              <label class="quiz-think__label">
                <select name="ans[10][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. кому и когда нужно, чтобы эта задача была решена;
              </label>
              <label class="quiz-think__label">
                <select name="ans[10][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. почему эту задачу стоит решить;
              </label>
              <label class="quiz-think__label">
                <select name="ans[10][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. какое влияние решение может	иметь	на другие	задачи, которые приходится решать;
              </label>
              <label class="quiz-think__label">
                <select name="ans[10][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. какова прямая, немедленная выгода от решения данной задачи.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              Л. Обычно я узнаю максимум о том, как следует делать что-то новое, благодаря тому что:
              </p>
              <label class="quiz-think__label">
                <select name="ans[11][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. уясняю для себя, как это связано с чем-то другим, что мне хорошо знакомо;
              </label>
              <label class="quiz-think__label">
                <select name="ans[11][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. принимаюсь за дело как можно раньше;
              </label>
              <label class="quiz-think__label">
                <select name="ans[11][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. выслушиваю	различные	точки	зрения	по	поводу	того,	как	это сделать;
              </label>
              <label class="quiz-think__label">
                <select name="ans[11][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. есть кто-то, кто показывает мне, как это сделать;
              </label>
              <label class="quiz-think__label">
                <select name="ans[11][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. тщательно анализирую, как это сделать наилучшим образом.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              М. Если бы мне пришлось проходить испытания или сдавать экзамен, я предпочел бы:
              </p>
              <label class="quiz-think__label">
                <select name="ans[12][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. набор объективных, проблемно-ориентированных	вопросов	по предмету;
              </label>
              <label class="quiz-think__label">
                <select name="ans[12][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. дискуссию с теми, кто также проходит испытания;
              </label>
              <label class="quiz-think__label">
                <select name="ans[12][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. устное изложение и показ того, что я знаю;
              </label>
              <label class="quiz-think__label">
                <select name="ans[12][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. сообщение в свободной форме о том, как я применил то, чему научился;
              </label>
              <label class="quiz-think__label">
                <select name="ans[12][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. письменный отчет, охватывающий историю вопроса, теорию и метод.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              Н. Люди,  особые	качества	которых  я	уважаю  больше	всего,  это	— вероятно...
              </p>
              <label class="quiz-think__label">
                <select name="ans[13][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. выдающиеся философы и ученые;
              </label>
              <label class="quiz-think__label">
                <select name="ans[13][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. писатели и учителя;
              </label>
              <label class="quiz-think__label">
                <select name="ans[13][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. лидеры политических и деловых кругов;
              </label>
              <label class="quiz-think__label">
                <select name="ans[13][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. экономисты и инженеры;
              </label>
              <label class="quiz-think__label">
                <select name="ans[13][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. фермеры и журналисты.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              О. Вообще говоря, я нахожу теорию полезной, если она...
              </p>
              <label class="quiz-think__label">
                <select name="ans[14][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. кажется родственной тем другим теориям и идеям, которые, я уже усвоил;
              </label>
              <label class="quiz-think__label">
                <select name="ans[14][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. объясняет вещи новым для меня образом;
              </label>
              <label class="quiz-think__label">
                <select name="ans[14][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. способна	систематически	объяснить	множество	связанных ситуаций;
              </label>
              <label class="quiz-think__label">
                <select name="ans[14][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. служит прояснению моего личного опыта и наблюдений;
              </label>
              <label class="quiz-think__label">
                <select name="ans[14][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. имеет конкретное практическое приложение.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              П. Когда	я	читаю	книгу	(статью),	выходящую	за	рамки	моей непосредственной деятельности, я делаю это главным образом из-за...
              </p>
              <label class="quiz-think__label">
                <select name="ans[15][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. заинтересованности	в	совершенствовании	своих профессиональных знаний;
              </label>
              <label class="quiz-think__label">
                <select name="ans[15][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. указания со стороны уважаемого мной человека на возможную ее полезность;
              </label>
              <label class="quiz-think__label">
                <select name="ans[15][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. желания расширить свою общую эрудицию;
              </label>
              <label class="quiz-think__label">
                <select name="ans[15][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. желания выйти за	пределы	собственной	деятельности для разнообразия;
              </label>
              <label class="quiz-think__label">
                <select name="ans[15][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. стремления узнать больше об определенном предмете.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              Р. Когда я	читаю	статью по дискуссионному вопросу, то предпочитаю, чтобы в ней:
              </p>
              <label class="quiz-think__label">
                <select name="ans[16][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. показывались	преимущества	для	меня,	в	зависимости	от выбираемой точки зрения;
              </label>
              <label class="quiz-think__label">
                <select name="ans[16][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. излагались все факты в ходе дискуссии;
              </label>
              <label class="quiz-think__label">
                <select name="ans[16][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. логично и последовательно обрисовывались затрагиваемые спорные вопросы;
              </label>
              <label class="quiz-think__label">
                <select name="ans[16][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. определялись ценности, которые использует автор;
              </label>
              <label class="quiz-think__label">
                <select name="ans[16][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. ярко	освещались обе стороны спорного	вопроса	и	сущность конфликта.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              С. Когда я впервые подхожу к какой-то технической проблеме, я, скорее всего, буду:
              </p>
              <label class="quiz-think__label">
                <select name="ans[17][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. пытаться связать ее с более широкой проблемой или теорией;
              </label>
              <label class="quiz-think__label">
                <select name="ans[17][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. искать пути и способы решить эту проблему;
              </label>
              <label class="quiz-think__label">
                <select name="ans[17][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. обдумывать альтернативные способы ее решения;
              </label>
              <label class="quiz-think__label">
                <select name="ans[17][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. искать	способы, которыми	другие,	возможно,	уже	решили эту проблему;
              </label>
              <label class="quiz-think__label">
                <select name="ans[17][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. пытаться найти самую лучшую процедуру для ее решения.
              </label>
            </div>
            <div class="quiz__item">
              <p class="quiz__question">
              Т. Вообще говоря, я более всего склонен к тому, чтобы:
              </p>
              <label class="quiz-think__label">
                <select name="ans[18][1]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                1. находить	уже	существующие	методы,	которые	работают,	и использовать их как можно лучше;
              </label>
              <label class="quiz-think__label">
                <select name="ans[18][2]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                2. ломать	голову	над	тем,	как	разнородные	методы	могли	бы работать вместе;
              </label>
              <label class="quiz-think__label">
                <select name="ans[18][3]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                3. открывать новые и более совершенные методы;
              </label>
              <label class="quiz-think__label">
                <select name="ans[18][4]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                4. находить способы заставить существующие методы работать лучше и по-новому;
              </label>
              <label class="quiz-think__label">
                <select name="ans[18][5]" class="quiz-think__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                5. разбираться в том,	как	и	почему существующие	методы должны работать.
              </label>
            </div> -->
          </div>
          <input 
            type="hidden" 
            name="quiz_thinking_nonce" 
            value="<?php echo wp_create_nonce('quiz-thinking-nonce'); ?>"
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
            value="quiz-thinking"
          >
            Показать результаты
          </button>
        </div>
      </form>
    <?php
    return ob_get_clean();
  }

  // Get result quiz thinking
  function get_result_quiz_thinking() {

    global $current_user;
    $current_user = wp_get_current_user();
    
    if ( 
        'POST' == $_SERVER['REQUEST_METHOD'] 
        && !empty( $_POST['action'] ) 
        && $_POST['action'] == 'quiz-thinking' 
        && isset($_POST['quiz_thinking_nonce']) 
        && wp_verify_nonce($_POST['quiz_thinking_nonce'], 'quiz-thinking-nonce') 
      ) {

    update_user_meta( $current_user->ID, 'quiz_thinking', true );

    $c = 1;
    $i = 2;
    $p = 3;
    $a = 4;
    $r = 5;

    $res_c = 0;
    $res_i = 0;
    $res_p = 0;
    $res_a = 0;
    $res_r = 0;

    $arr = array(
      1 => array(
        1 => 0, 
        2 => 0, 
        3 => 0, 
        4 => 0, 
        5 => 0
        ),
      2 => array(
        2 => 0, 
        1 => 0, 
        4 => 0, 
        3 => 0, 
        5 => 0
        ),
      3 => array(
        3 => 0, 
        5 => 0,
        4 => 0, 
        2 => 0, 
        1 => 0
        ),
      4 => array(
        4 => 0, 
        5 => 0, 
        2 => 0, 
        1 => 0, 
        3 => 0
        ),
      5 => array(
        2 => 0, 
        3 => 0, 
        1 => 0, 
        5 => 0, 
        4 => 0
        ),
      // 6 => array(
      //   5 => 0, 
      //   1 => 0, 
      //   2 => 0, 
      //   3 => 0, 
      //   4 => 0
      //   ),
      // 7 => array(
      //   1 => 0, 
      //   2 => 0, 
      //   3 => 0, 
      //   4 => 0, 
      //   5 => 0
      //   ),
      // 8 => array(
      //   2 => 0, 
      //   1 => 0, 
      //   4 => 0, 
      //   3 => 0, 
      //   5 => 0
      //   ),
      // 9 => array(
      //   3 => 0, 
      //   5 => 0, 
      //   4 => 0, 
      //   2 => 0, 
      //   1 => 0
      //   ),
      // 10 => array(
      //   4 => 0, 
      //   5 => 0, 
      //   2 => 0, 
      //   1 => 0, 
      //   3 => 0
      //   ),
      // 11 => array(
      //   2 => 0, 
      //   3 => 0, 
      //   1 => 0, 
      //   5 => 0, 
      //   4 => 0
      //   ),
      // 12 => array(
      //   5 => 0, 
      //   1 => 0, 
      //   2 => 0, 
      //   3 => 0, 
      //   4 => 0
      //   ),
      // 13 => array(
      //   1 => 0, 
      //   2 => 0, 
      //   3 => 0, 
      //   4 => 0, 
      //   5 => 0
      //   ),
      // 14 => array(
      //   2 => 0, 
      //   1 => 0, 
      //   4 => 0, 
      //   3 => 0, 
      //   5 => 0
      //   ),
      // 15 => array(
      //   3 => 0, 
      //   5 => 0, 
      //   4 => 0, 
      //   2 => 0, 
      //   1 => 0
      //   ),
      // 16 => array(
      //   4 => 0, 
      //   5 => 0, 
      //   2 => 0, 
      //   1 => 0, 
      //   3 => 0
      //   ),
      // 17 => array(
      //   2 => 0, 
      //   3 => 0, 
      //   1 => 0, 
      //   5 => 0, 
      //   4 => 0
      //   ),
      // 18 => array(
      //   5 => 0, 
      //   1 => 0, 
      //   2 => 0, 
      //   3 => 0, 
      //   4 => 0
      //   ),
    );

    // $_POST['ans'][1][1]

    for ($i = 1; $i <= 5; $i++) {
      for ($j = 1; $j <= 5; $j++) {
        $arr[$i][$j] = $_POST['ans'][$i][$j];
      }
    }

    echo '<pre>'; print_r($arr); echo '</pre>';
    echo '<br>';
    echo '----------------------';


    function tt($myArray) {
      $sumArray = array();

      foreach ($myArray as $k => $subArray) {
        foreach ($subArray as $id => $value) {
          $sumArray[$id] += $value;
        }
      }

      return $sumArray;

      // foreach ($arrs as $key => $val) {

      //   echo $key;
      //   echo '<br>';
      //   echo '<pre>'; print_r($val); echo '</pre>';
      //   // foreach ($arr as $item => $value) {
      //   //   if($arr[$item] === $item) {
      //   //     $value += $value;
      //   //   }
      //   // }
      // }
    }

    $test = tt($arr);

    echo '<br>';
    echo '----------------------';
    echo '<pre>'; print_r($test); echo '</pre>';


    // $a1 = array('a' => 5, 'b' => 9, 'c' => 11);
    // $a2 = array('b' => 6, 'e' => 20, 'a' => 1);
    // $sums = array();
    
    // foreach (array_keys($a1 + $a2) as $c) {
    //   $sums[$c] = (isset($a1[$c]) ? $a1[$c] : 0) + (isset($a2) ? $a2[$c] : 0);
    // }

    // var_dump($sums);

    // for ($i = 1; $i <= 5; $i++) {
    //   if ($arr[$i][1]) {
    //     $res_c += $arr[$i][1];
    //   }
    //   if ($arr[$i][2]) {
    //     $res_i += $arr[$i][2];
    //   }
    //   if ($arr[$i][3]) {
    //     $res_p += $arr[$i][3];
    //   }
    //   if ($arr[$i][4]) {
    //     $res_a += $arr[$i][4];
    //   }
    //   if ($arr[$i][5]) {
    //     $res_r += $arr[$i][5];
    //   }
    // }

      $errors = custom_errors()->get_error_messages();

    // only create the user in if there are no errors
      if(empty($errors)) {
        // echo $res_c;
        // echo '<br>----------<br>';
        // echo '<pre>'; print_r($_POST); echo '</pre>';

        // $res = result($arr_1, $arr_2, $arr_3, $arr_4, $arr_5);
        // print_r($res);

        // switch ($res + 1) {
        //   case 1:
        //     $page = get_page_by_path( 'sklonnost-k-rabote-s-ljudmi', 'OBJECT', 'post-result-quiz' );
        //     update_user_meta( $current_user->ID, 'result_quiz_thinking', $page->ID );
        //     wp_redirect( home_url('/sklonnost-k-rabote-s-ljudmi')); 
        //     exit;
        //     break;
        //   case 2:
        //     $page = get_page_by_path( 'sklonnost-k-issledovatelskoj-intellektualnoj-rabote', 'OBJECT', 'post-result-quiz' );
        //     update_user_meta( $current_user->ID, 'result_quiz_thinking', $page->ID );
        //     wp_redirect( home_url('/sklonnost-k-issledovatelskoj-intellektualnoj-rabote'));
        //     exit;
        //     break;
        //   case 3:
        //     $page = get_page_by_path( 'sklonnost-k-prakticheskoj-dejatelnosti', 'OBJECT', 'post-result-quiz' );
        //     update_user_meta( $current_user->ID, 'result_quiz_thinking', $page->ID );
        //     wp_redirect( home_url('/sklonnost-k-prakticheskoj-dejatelnosti'));
        //     exit;
        //     break;
        //   case 4:
        //     $page = get_page_by_path( 'sklonnost-k-jesteticheskim-vidam-dejatelnosti', 'OBJECT', 'post-result-quiz' );
        //     update_user_meta( $current_user->ID, 'result_quiz_thinking', $page->ID );
        //     wp_redirect( home_url('/sklonnost-k-jesteticheskim-vidam-dejatelnosti'));
        //     exit;
        //     break;
        //   case 5:
        //     $page = get_page_by_path( 'sklonnost-k-jekstremalnym-vidam-dejatelnosti', 'OBJECT', 'post-result-quiz' );
        //     update_user_meta( $current_user->ID, 'result_quiz_thinking', $page->ID );
        //     wp_redirect( home_url('/sklonnost-k-jekstremalnym-vidam-dejatelnosti'));
        //     exit;
        //     break;
        //   case 6:
        //     $page = get_page_by_path( 'sklonnost-k-planovo-jekonomicheskim-vidam-dejatelnosti', 'OBJECT', 'post-result-quiz' );
        //     update_user_meta( $current_user->ID, 'result_quiz_thinking', $page->ID );
        //     wp_redirect( home_url('/sklonnost-k-planovo-jekonomicheskim-vidam-dejatelnosti'));
        //     exit;
        //     break;
        // }

        // do_action('edit_user_profile_update', $current_user->ID);
      }
    }
  }
  add_action('init', 'get_result_quiz_thinking');