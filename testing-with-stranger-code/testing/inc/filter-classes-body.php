<?php 

  /**
   * Filter classes of body
   */
  add_filter( 'body_class','my_body_classes' );
  function my_body_classes( $classes ) {
    $class = array_pop($classes);
    $classes = array();
    array_push($classes, $class);

    if ( is_user_logged_in() ) {
      $classes[] = 'logged-in';
    }

    if ( is_front_page() ) {
      $classes[] = 'p-home';
    }

    if ( is_page_template('templates/login.php') ) {
      $classes[] = 'p-login';
    }

    if ( is_page_template('templates/registration.php') ) {
      $classes[] = 'p-login p-registration';
    }

    if ( is_page_template('templates/profile.php') ) {
      $classes[] = 'p-profile';
    }

    if ( is_page_template('templates/personal.php') ) {
      $classes[] = 'p-login p-personal';
    }

    if ( get_post_type() === 'post-test' ) {
      $classes[] = 'p-login p-test';
    }

    if ( get_post_type() === 'post-result' ) {
      $classes[] = 'p-login p-resilt';
    }

    if ( is_page('quiz-inclinations') ) {
      $classes[] = 'p-login p-testing';
    }
    
    return $classes;
  }

?>