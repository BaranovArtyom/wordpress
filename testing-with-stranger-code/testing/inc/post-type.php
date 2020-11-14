<?php 
/**
 * Register custom post type
 */

add_action('init', 'theme_post_type_post');
function theme_post_type_post() {
  register_post_type('post-test', array(
    'labels'             => array(
      'name'               => 'Тесты',
      'singular_name'      => 'Тесты',
      'add_new'            => 'Добавить новый тест',
      'add_new_item'       => 'Добавить новый тест',
      'edit_item'          => 'Редактировать запись',
      'new_item'           => 'Новая запись',
      'view_item'          => 'Посмотреть запись',
      'search_items'       => 'Найти запись тесты',
      'not_found'          => 'Записей не найдено',
      'not_found_in_trash' => 'В корзине записей не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Тесты',
      'all_items'          => 'Все записи'
      ),
    'description'        => 'Записи страницы "Тест"',
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-welcome-write-blog',
    'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields'),
    'taxonomies'         => array(),
    'map_meta_cap'       => 'true',
    'can_export'         => 'true'
  ) );

  register_post_type('post-result-quiz', array(
    'labels'               => array(
      'name'               => 'Результат квиза',
      'singular_name'      => 'Результат квиза',
      'add_new'            => 'Добавить новую запись',
      'add_new_item'       => 'Добавить новую запись',
      'edit_item'          => 'Редактировать запись',
      'new_item'           => 'Новая запись',
      'view_item'          => 'Посмотреть запись',
      'search_items'       => 'Найти запись результат квиза',
      'not_found'          => 'Записей не найдено',
      'not_found_in_trash' => 'В корзине записей не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Результат квиза',
      'all_items'          => 'Все записи'
      ),
    'description'        => 'Записи страницы "Результат квиза"',
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 6,
    'menu_icon'          => 'dashicons-welcome-write-blog',
    'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields'),
    'taxonomies'         => array(),
    'map_meta_cap'       => 'true',
    'can_export'         => 'true'
  ) );
}
?>