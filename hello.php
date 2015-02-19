<?php
/* $Id$ */

/**
 * @file
 * Very simple DRUPAL module
 */

/**
 * Implementation of hook_help().
 */
function hello_world_help($section) {
  switch ($section) {
    case 'admin/help#hello_world':
      $output = '<p>Hello world help...</p>';
      return $output;
    case 'admin/modules#description':
      return 'Hello world module description...';
  }
}

/**
 * Implementation of hook_menu().
 */
function hello_world_menu($may_cache) {
  $items = array();

  if ($may_cache) {
  }
  else {
    $items[] = array(
      'path' => 'hello', // drupal path example.com/?q=hello
      'title' => 'Hello world page...', // page title
      'callback' => 'hello_world_page', // callback function name
      'access' => TRUE, // every user can look at generated page
      'type' => MENU_CALLBACK // define type of menu item as callback
    );
  }

  return $items;
}


/**
 * Function which generate page (this generate any content - you need only your own code...)
 */
function hello_world_page() {
  return '<p>Hello world!</p>';
}
?>
