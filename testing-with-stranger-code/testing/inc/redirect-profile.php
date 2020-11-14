<?php 

  /* Main redirection of the default profile page */
  function redirect_profile_page() {
    $login_profile = home_url('/profile');
    if ( !current_user_can('administrator') ) {
      if (strpos ($_SERVER ['REQUEST_URI'] , 'wp-admin/profile.php' )) {
        wp_redirect ($login_profile);
          die();
      }
    }
  }
  add_action('init','redirect_profile_page');

?>