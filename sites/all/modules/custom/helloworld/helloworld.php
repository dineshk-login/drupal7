<?php
/**
 * @file
 * Hello World demonstrates the use of SimpleTest for Drupal 7.
 */

/**
 * Implements hook_menu().
 */
function helloworld_menu() {
  $items = array();

  $items['helloworld'] = array(
    'title' => 'Hello World',
    'access callback' => TRUE,
    'page callback' => 'helloworld_hello_page',
    'type' => MENU_NORMAL_ITEM,
    'menu' => 'navigation',
    
  );

  return $items;
}

/**
 * Page callback for /helloworld.
 */
function helloworld_hello_page() {
  return t('Hello World. Welcome to Drupal.');
}