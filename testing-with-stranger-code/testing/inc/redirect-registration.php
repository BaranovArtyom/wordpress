<?php 

  /* Main redirection of the default registration page */
	function redirect_registration_page() {
		$login_registration = home_url('/registration');
		$page_viewed = basename($_SERVER['REQUEST_URI']);

		if($page_viewed == "wp-login.php?action=register" && $_SERVER['REQUEST_METHOD'] == 'GET') {
			wp_redirect($login_registration);
			exit;
		}
	}
  add_action('init','redirect_registration_page');

?>