<?php 
/**
 * Template name: Главная
 */
get_header('home');
?>
<main class="page__main">
  <div class="why-need" id="testing">
    <div class="container why-need__wrapper">
      <h2 class="page-title why-need__title">
        Почему вам нужно пройти тестирование?
      </h2>
      <div class="why-need__items">
        <div class="why-need__item">
          <img 
            class="why-need__item-icon"
            src="<?= get_template_directory_uri(); ?>/assets/img/why-need-item-1.svg" 
            alt="Alt">
          <p class="why-need__item-text">
            <?php the_field('why_test_1'); ?>
          </p>
        </div>
        <div class="why-need__item">
          <img 
            class="why-need__item-icon"
            src="<?= get_template_directory_uri(); ?>/assets/img/why-need-item-4.svg" 
            alt="Alt">
          <p class="why-need__item-text">
            <?php the_field('why_test_2'); ?>
          </p>
        </div>
        <div class="why-need__item">
          <img 
            class="why-need__item-icon"
            src="<?= get_template_directory_uri(); ?>/assets/img/why-need-item-2.svg" 
            alt="Alt">
          <p class="why-need__item-text">
            <?php the_field('why_test_3'); ?>
          </p>
        </div>
        <div class="why-need__item">
          <img 
            class="why-need__item-icon"
            src="<?= get_template_directory_uri(); ?>/assets/img/why-need-item-5.svg" 
            alt="Alt">
          <p class="why-need__item-text">
            <?php the_field('why_test_4'); ?>
          </p>
        </div>
        <div class="why-need__item">
          <img 
            class="why-need__item-icon"
            src="<?= get_template_directory_uri(); ?>/assets/img/why-need-item-3.svg" 
            alt="Alt">
          <p class="why-need__item-text">
            <?php the_field('why_test_5'); ?>
          </p>
        </div>
        <div class="why-need__item why-need__slogan">
          <h3 class="why-need__slogan-title">
          Тогда вам стоит<br>
            <span>пройти тестирование!</span>
          </h3>
        </div>
      </div>
      <div class="why-need__figure">
        <div class="why-need__ask">
          <svg class="why-need__ask-icon">
            <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#ask-hand"></use>
          </svg>
        </div>
        <div class="why-need__rocket">
          <div class="why-need__rocket-wrapper">
            <img class="why-need__rocket-image" src="<?= get_template_directory_uri(); ?>/assets/img/logo-rocket.png" alt="Ракета">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about-project" id="about-project">
    <div class="container">
      <h2 class="page-title about-project__title">
        О проекте
      </h2>
      <div class="about-project__items">
        <div class="about-project__item">
          <h3 class="about-project__item-title">
            <?php the_field('project_title_1'); ?>
          </h3>
          <div class="about-project__item-text">
            <?php the_field('project_txt_1'); ?>
          </div>
          <div class="about-project__item-picture">
            <img class="about-project__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/project-man.png" alt="О проекте">
          </div>
        </div>
        <div class="about-project__item about-project__figure">
          <div class="about-project__figure-picture">
            <?php 
              $image = get_field('project_img');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], '', false, array( 
                  'class' => 'about-project__figure-image',
                ) );
              }
            ?>
          </div>
          <div class="about-project__info">
            <svg class="about-project__info-icon">
              <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#info"></use>
            </svg>
          </div>
        </div>
        <div class="about-project__item">
          <h3 class="about-project__item-title">
            <?php the_field('project_title_2'); ?>
          </h3>
          <div class="about-project__item-text">
            <?php the_field('project_txt_2'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="organizers" id="organizers">
    <div class="container organizers__wrapper">
      <h2 class="page-title organizers__title">Организаторы</h2>
      <div class="organizers__items">
        <a class="organizers__item" href="http://www.stavinvest.ru" target="_blank">
          <img class="organizers__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/org-minek.png" alt="Министерство экономического развития ставропольского края">
        </a>
        <a class="organizers__item" href="<?= home_url('/organizator'); ?>">
          <img class="organizers__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/org-my-businesss.png" alt="Мой бизнес Ставропольский край">
        </a>
        <a class="organizers__item" href="<?= home_url('/organizator'); ?>">
          <img class="organizers__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/org-fppsk.png" alt="ФППСК Активным">
        </a>
        <a class="organizers__item" href="https://futurerussia.gov.ru" target="_blank">
          <img class="organizers__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/org-national.png" alt="Национальные проекты России">
        </a>
      </div>
    </div>
  </div>
  <div class="support" id="contacts">
    <div class="container support__wrapper">
      <div class="support__icon-wrapper">
        <svg class="support__icon">
          <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#contact"></use>
        </svg>
      </div>
      <h2 class="page-title support__title">
        техническая поддержка
      </h2>
      <div class="support__contacts">
        <div class="support__contacts-email">
          <svg class="support__contacts-email-icon">
            <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
          </svg>
          <h6 class="support__contacts-title">E-mail</h6>
          <a 
            class="support__contacts-link" 
            href="mailto:<?php the_field('footer_mail'); ?>"
          >
            <?php the_field('footer_mail'); ?>
          </a>
        </div>
      </div>
      <div class="support__figure">
        <img class="support__figure-image" src="<?= get_template_directory_uri(); ?>/assets/img/logo-rocket.png" alt="Ракета">
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>