<?php 
/**
 * Template Name: Главная
 */
get_header();
?>
<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
  <div class="promo">
    <?php 
      $image = get_field('promo_img');
      if( $image ) {
        echo wp_get_attachment_image( $image['id'], '', false, array( 
          'class' => 'promo__image',
        ) );
      }
    ?>
    <div class="container">
      <div class="promo__inner">
        <div
          class="promo__title"
          data-san="fade-in-bottom"
          data-san-delay="300"
        >
          <?php the_field('promo_title'); ?>
        </div>
        <div data-san="fade-in-right" data-san-delay="500">
          <?php the_field('promo_txt'); ?>
        </div>
        <div class="promo__buttons">
          <a
            class="button"
            href="tel:<?php the_field('phone_num_nf', $frontpage_id); ?>"
            data-san="fade-in-bottom"
            data-san-delay="700"
          >
            <div class="button__wrapper">
              <span class="button__text">Позвонить</span>
            </div>
          </a>
          <a
            class="button"
            href="<?= home_url('/'); ?>proekty"
            data-san="fade-in-top"
            data-san-delay="900"
          >
            <div class="button__wrapper">
              <span class="button__text">Все проекты</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <main>
    <div class="services">
      <div class="container">
        <div class="services__inner">
          <h2 class="services__title" data-san="fade-in-left">Наши услуги</h2>
          <div data-san="fade-in-bottom" data-san-delay="200">
            <p>
              Разрабатываем проекты домов. Проектируем малоэтажные дома и
              бани. Делаем дизайн-проекты. Занимаемся благоустройством участка
            </p>
          </div>
        </div>
        <div class="services__cards">
          <a
            class="card services__card"
            data-san="fade-in-bottom"
            data-san-delay="100"
            href="#"
          >
            <article class="card__article">
              <figure class="card__figure">
                <img
                  class="card__image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/pic-services-1.jpg"
                  alt="Alt"
                />
              </figure>
              <div class="card__content">
                <h6 class="card__title">Проектирование</h6>
                <p class="card__text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Fugiat, nulla?
                </p>
              </div>
            </article>
          </a>
          <a
            class="card services__card"
            data-san="fade-in-bottom"
            data-san-delay="200"
            href="#"
          >
            <article class="card__article">
              <div class="card__figure">
                <img
                  class="card__image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/pic-services-2.jpg"
                  alt="Alt"
                />
              </div>
              <div class="card__content">
                <h6 class="card__title">Строительство</h6>
                <p class="card__text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Sint doloremque et eaque maiores animi repellat.
                </p>
              </div>
            </article>
          </a>
          <a
            class="card services__card"
            data-san="fade-in-bottom"
            data-san-delay="300"
            href="#"
          >
            <article class="card__article">
              <div class="card__figure">
                <img
                  class="card__image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/pic-services-3.jpg"
                  alt="Alt"
                />
              </div>
              <div class="card__content">
                <h6 class="card__title">Благоустройство</h6>
                <p class="card__text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Nostrum, totam!
                </p>
              </div>
            </article>
          </a>
          <a
            class="card services__card"
            data-san="fade-in-bottom"
            data-san-delay="300"
            href="#"
          >
            <article class="card__article">
              <div class="card__figure">
                <img
                  class="card__image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/pic-services-3.jpg"
                  alt="Alt"
                />
              </div>
              <div class="card__content">
                <h6 class="card__title">Благоустройство</h6>
                <p class="card__text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Nostrum, totam!
                </p>
              </div>
            </article>
          </a>
          <span class="services__cap"></span>
        </div>
      </div>
    </div>

    <div class="houses">
      <div class="container">
        <h2 class="title-section houses__title" data-san="fade-in-left">
          Модульные дома <b>BARN</b>
        </h2>
        <div class="houses__cards">
          <?php
            $args = array(
              'posts_per_page' => 4,
              'category_name' => 'modulnye-doma-barn',
            );
            $loop = new WP_Query( $args );
          ?>
          <?php
            if( $loop->have_posts() ) {
              while( $loop->have_posts() ) {
                $loop->the_post();
                ?>
                  <a
                    class="card houses__card"
                    data-san="fade-in-bottom"
                    data-san-delay="100"
                    href="<?php the_permalink(); ?>"
                  >
                    <article class="card__article">
                      <figure class="card__figure">
                        <?php 
                          $image = get_field('promo_img');
                          if( $image ) {
                            echo wp_get_attachment_image( $image['id'], '', false, array( 
                              'class' => 'card__image',
                            ) );
                          }
                        ?>
                      </figure>
                      <div class="card__content">
                        <h6 class="card__title"><?php the_title(); ?></h6>
                        <!-- <p class="card__text"></p> -->
                      </div>
                    </article>
                  </a>
                <?php
              }
              wp_reset_postdata();
            } 
          ?>
          <span class="houses__cap"></span>
        </div>
        <div class="houses__buttons">
          <a class="button" href="<?= home_url('/'); ?>/proekty/modulnye-doma-barn">
            <div class="button__wrapper button__wrapper--transparent">
              <span class="button__text">Все проекты</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="houses houses--no-clip">
      <div class="container">
        <h2 
          class="title-section houses__title" 
          data-san="fade-in-left">
          Минидома в стиле <b>BARN</b>
        </h2>
        <div class="houses__cards">
          <?php
            $args = array(
              'posts_per_page' => 4,
              'category_name' => 'minidoma-v-stile-barn',
            );
            $loop = new WP_Query( $args );
          ?>
          <?php
            if( $loop->have_posts() ) {
              while( $loop->have_posts() ) {
                $loop->the_post();
                ?>
                  <a
                    class="card houses__card"
                    data-san="fade-in-bottom"
                    data-san-delay="100"
                    href="<?php the_permalink(); ?>"
                  >
                    <article class="card__article">
                      <figure class="card__figure">
                        <?php 
                          $image = get_field('promo_img');
                          if( $image ) {
                            echo wp_get_attachment_image( $image['id'], '', false, array( 
                              'class' => 'card__image',
                            ) );
                          }
                        ?>
                      </figure>
                      <div class="card__content">
                        <h6 class="card__title"><?php the_title(); ?></h6>
                      </div>
                    </article>
                  </a>
                <?php
              }
              wp_reset_postdata();
            } 
          ?>
          <span class="houses__cap"></span>
        </div>
        <div class="houses__buttons">
          <a class="button" href="<?= home_url('/'); ?>/proekty/minidoma-v-stile-barn">
            <div class="button__wrapper button__wrapper--transparent">
              <span class="button__text">Все проекты</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="houses houses--no-clip">
      <div class="container">
        <h2 class="title-section houses__title" data-san="fade-in-left">
          Модульные дома <b>Hi-Tech</b>
        </h2>
        <div class="houses__cards">
          <?php
            $args = array(
              'posts_per_page' => 4,
              'category_name' => 'modulnye-doma-hi-tech',
            );
            $loop = new WP_Query( $args );
          ?>
          <?php
            if( $loop->have_posts() ) {
              while( $loop->have_posts() ) {
                $loop->the_post();
                ?>
                  <a
                    class="card houses__card"
                    data-san="fade-in-bottom"
                    data-san-delay="100"
                    href="<?php the_permalink(); ?>"
                  >
                    <article class="card__article">
                      <figure class="card__figure">
                        <?php 
                          $image = get_field('promo_img');
                          if( $image ) {
                            echo wp_get_attachment_image( $image['id'], '', false, array( 
                              'class' => 'card__image',
                            ) );
                          }
                        ?>
                      </figure>
                      <div class="card__content">
                        <h6 class="card__title"><?php the_title(); ?></h6>
                        <!-- <p class="card__text"></p> -->
                      </div>
                    </article>
                  </a>
                <?php
              }
              wp_reset_postdata();
            } 
          ?>
          <span class="houses__cap"></span>
        </div>
        <div class="houses__buttons">
          <a class="button" href="<?= home_url('/'); ?>/proekty/modulnye-doma-hi-tech">
            <div class="button__wrapper button__wrapper--transparent">
              <span class="button__text">Все проекты</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="page__gallery">
      <h2 class="title-section page__gallery-title" data-san="fade-in-left">
        Housebarn — проектирование и строительство домов в стиле
        <b>Барн</b> и <b>Хай-тек</b>
      </h2>
      <?php get_template_part('template-parts/gallery'); ?>
    </div>

    <div class="houses houses--no-clip houses-domed">
      <div class="container">
        <h2 class="title-section houses__title" data-san="fade-in-left">
          Проекты <b>купольных</b> домов
        </h2>
        <div class="houses__cards">
          <?php
            $args = array(
              'posts_per_page' => 4,
              'category_name' => 'kupolnye-doma',
            );
            $loop = new WP_Query( $args );
          ?>
          <?php
            if( $loop->have_posts() ) {
              while( $loop->have_posts() ) {
                $loop->the_post();
                ?>
                  <a
                    class="card houses__card"
                    data-san="fade-in-bottom"
                    data-san-delay="100"
                    href="<?php the_permalink(); ?>"
                  >
                    <article class="card__article">
                      <figure class="card__figure">
                        <?php 
                          $image = get_field('promo_img');
                          if( $image ) {
                            echo wp_get_attachment_image( $image['id'], '', false, array( 
                              'class' => 'card__image',
                            ) );
                          }
                        ?>
                      </figure>
                      <div class="card__content">
                        <h6 class="card__title"><?php the_title(); ?></h6>
                      </div>
                    </article>
                  </a>
                <?php
              }
              wp_reset_postdata();
            } 
          ?>
        </div>
        <div class="houses__buttons">
          <a class="button" href="<?= home_url('/'); ?>/proekty/kupolnye-doma">
            <div class="button__wrapper button__wrapper--transparent">
              <span class="button__text">Все проекты</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="latest-news">
      <div class="container">
        <h2 class="title-section houses__title" data-san="fade-in-left">
          Последние <b>новости</b>
        </h2>
        <div class="latest-news__cards">
          <?php
            $args = array(
              'posts_per_page' => 4,
              'category_name' => 'news',
            );
            $loop = new WP_Query( $args );
          ?>
          <?php
            if( $loop->have_posts() ) {
              while( $loop->have_posts() ) {
                $loop->the_post();
                ?>
                  <a
                    class="card houses__card"
                    data-san="fade-in-bottom"
                    data-san-delay="100"
                    href="<?php the_permalink(); ?>"
                  >
                    <article class="card__article">
                      <figure class="card__figure latest-news__card-figure">
                        <?php 
                          $image = get_field('promo_img');
                          if( $image ) {
                            echo wp_get_attachment_image( $image['id'], '', false, array( 
                              'class' => 'card__image',
                            ) );
                          }
                        ?>
                      </figure>
                      <div class="card__content">
                        <h6 class="card__title"><?php the_title(); ?></h6>
                      </div>
                    </article>
                  </a>
                <?php
              }
              wp_reset_postdata();
            } 
          ?>
          <span class="latest-news__cap"></span>
        </div>
        <div class="houses__buttons">
          <a class="button" href="<?= home_url('/'); ?>novosti">
            <div class="button__wrapper button__wrapper--transparent">
              <span class="button__text">Все новости</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="talk">
      <div class="container">
        <?= do_shortcode('[contact-form-7 id="1236" title="Основная форма" html_class="form"]'); ?>
      </div>
    </div>
  </main>
<?php get_footer(); ?>