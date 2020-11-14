<?php

function theme_register_nav_menu() {
  register_nav_menus( array(
    'header_menu' => 'Главное меню',
  ) );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

// Filters for header menu
add_filter( 'wp_nav_menu_args', 'filter_wp_nav_menu_args' );
function filter_wp_nav_menu_args( $args ) {
  if ( $args['theme_location'] === 'header_menu' ) {
    $args['container']  = false;
    $args['menu_class'] = 'menu__list';
    $args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
  }
  return $args;
}

add_filter( 'nav_menu_item_id', 'filter_nav_menu_item_css_id', 10, 4 );
function filter_nav_menu_item_css_id( $menu_id, $item, $args, $depth ) {
  return $args->theme_location === 'header_menu' ? '' : $menu_id;
}

add_filter( 'nav_menu_css_class', 'filter_nav_menu_item_css_class', 10, 4 );
function filter_nav_menu_item_css_class( $classes, $item, $args, $depth ) {
  if ( $args->theme_location === 'header_menu' ) {
    $classes = [
      'menu__item'
    ];
  }
  return $classes;
}

add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
  if ( $args->theme_location === 'header_menu' ) {
    $atts['class'] = 'menu__link';
    if ( $item->current ) {
      // $atts['class'] .= ' menu__link--active';
    }
  }
  return $atts;
}