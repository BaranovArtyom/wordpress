<?php
add_theme_support( 'title-tag' );

// Wrapper function for css
function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
  wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
}

// Wrapper function for js
function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = true ) {
  wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
}

/**
 * Register and enqueue styles
 */
function theme_register_css() {
  enqueue_versioned_style('main', '/assets/css/style.css');
  wp_enqueue_style('g-fonts', 'https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');
}
add_action('wp_enqueue_scripts', 'theme_register_css');

/**
 * Register and enqueue scripts
 */
function theme_register_js() {
  enqueue_versioned_script('main', '/assets/js/script.min.js');
}
add_action('wp_enqueue_scripts', 'theme_register_js');

add_theme_support(
  'html5',
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'script',
    'style',
  )
);

add_action( 'after_setup_theme', 'theme_add_thumbnails' );
function theme_add_thumbnails() {
  add_theme_support( 'post-thumbnails' );
  // set_post_thumbnail_size(650, 450, true);
}

function remove_default_image_sizes( $sizes ) {
  
  /* Default WordPress */
  unset( $sizes[ 'thumbnail' ]);       // Remove Thumbnail (150 x 150 hard cropped)
  unset( $sizes[ 'medium' ]);          // Remove Medium resolution (300 x 300 max height 300px)
  unset( $sizes[ 'medium_large' ]);    // Remove Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
  unset( $sizes[ 'large' ]);           // Remove Large resolution (1024 x 1024 max height 1024px)
  
  /* With WooCommerce */
  unset( $sizes[ 'shop_thumbnail' ]);  // Remove Shop thumbnail (180 x 180 hard cropped)
  unset( $sizes[ 'shop_catalog' ]);    // Remove Shop catalog (300 x 300 hard cropped)
  unset( $sizes[ 'shop_single' ]);     // Shop single (600 x 600 hard cropped)
  
  return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'remove_default_image_sizes' );

function aw_custom_add_image_sizes() {
  add_image_size( 'small', 375, 9999 ); // 375px wide unlimited height
  add_image_size( 'medium', 768, 9999 ); // 768px wide unlimited height
  add_image_size( 'medium_large', 1024, 9999 ); // 1024px wide unlimited height
  add_image_size( 'lg', 1200, 9999 ); // 1200px wide unlimited height
  add_image_size( 'xl', 2000, 9999 ); // 2000px wide unlimited height
}
add_action( 'after_setup_theme', 'aw_custom_add_image_sizes' );

/**
 * Filter classes of body
 */
require get_template_directory() . '/inc/filter-classes-body.php';

/**
 * Register nav-menus of theme
 */
require get_template_directory() . '/inc/nav_menu.php';

/**
 * Settings of redirect for page of login
 */
require get_template_directory() . '/inc/redirect-login.php';

/**
 * Settings of redirect for page of registration
 */
require get_template_directory() . '/inc/redirect-registration.php';

/**
 * Settings of redirect for page of profile
 */
require get_template_directory() . '/inc/redirect-profile.php';


/**
 * Custom user login, registration, profile forms
 */

// Custom login
require get_template_directory() . '/inc/form-login.php';

// Custom registration
require get_template_directory() . '/inc/form-registration.php';

// Custom profile
require get_template_directory() . '/inc/form-profile.php';

// Form personal
require get_template_directory() . '/inc/form-personal.php';

add_action('init', 'do_output_buffer');
function do_output_buffer() {
  ob_start();
}

// Quiz inclinations
require get_template_directory() . '/inc/form-quiz-inclinations.php';

// Quiz quidance
require get_template_directory() . '/inc/form-quiz-guidance.php';

// Quiz thinking
require get_template_directory() . '/inc/form-quiz-thinking.php';

// Quiz personality
require get_template_directory() . '/inc/form-quiz-personality.php';

// Quiz creativity
require get_template_directory() . '/inc/form-quiz-creativity.php';

// Used for tracking error messages of custom login/reg/profile pages
function custom_errors(){
  static $wp_error; // Will hold global variable safely
  return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}

// Displays error messages from form submissions
function custom_show_error_messages() {
  if($codes = custom_errors()->get_error_codes()) {
    // Loop error codes and display errors
    foreach($codes as $code) {
      $message = custom_errors()->get_error_message($code);
      echo '<p class="form__error-text">Ошибка: ' . $message . '</p>';
    }
  }	
}



/**
 * Form
 */
// require get_template_directory() . '/inc/form-request.php';

/**
 * Register custom post type
 */
require get_template_directory() . '/inc/post-type.php';

//  Include templates

add_filter('template_include', 'my_template');
function my_template( $template ) {

  // Posts
  if ( get_post_type() === 'post-test' ) {
    $new_template = locate_template( array( 'templates/post-test.php' ) );
    if ( '' != $new_template ) {
        return $new_template;
    }
  }

  if ( get_post_type() === 'post-result-quiz' ) {
    $new_template = locate_template( array( 'templates/post-result-quiz.php' ) );
    if ( '' != $new_template ) {
        return $new_template;
    }
  }

  return $template;
}

// Modifying wp_mail() headers
add_filter( 'wp_mail_from', 'my_mail_from' );
function my_mail_from( $email )
{
	return 'info@'.$_SERVER['SERVER_NAME'];
}

add_filter( 'wp_mail_from_name', 'my_mail_from_name' );
function my_mail_from_name( $name )
{
	return 'Тестирование';
}

add_filter( 'wp_new_user_notification_email', 'filter_function_name_1306', 10, 3 );
function filter_function_name_1306( $wp_new_user_notification_email, $user, $blogname ){
  $url = home_url().'/profile';
  $text = "Страница находится по адресу — ".$url;
  
  $email_data['subject'] = 'Доступ на сайт - ' . wp_specialchars_decode( $blogname );
  $email_data['message'] = $text . $email_data['message'];

	return $wp_new_user_notification_email;
}

add_filter( 'wp_new_user_notification_email', 'custom_wp_new_user_notification_email', 10, 3 );

function custom_wp_new_user_notification_email( $wp_new_user_notification_email, $user, $blogname ) {
    $login = $user->user_login;
    $url = home_url().'/testirovanie';

    $message = "Добро пожаловать на наш проект" . "\r\n\r\n";
    $message .= "Имя пользователя: ". $login ."\r\n\r\n";
    $message .= "Пароль: который указали при регистрации"."\r\n\r\n";
    $message .= "Страница для входа: ". $url ."\r\n\r\n";
    $message .= "Наслайждайтесь!" . "\r\n\r\n";
    $wp_new_user_notification_email['message'] = $message;

    return $wp_new_user_notification_email;
}