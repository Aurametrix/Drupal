<?php

/**
 * @file
 * testie - Rick's demo module
 *
 * By Rick Smith of Cryptosmith
 *
 * This thing is too trivial to deserve protection 
 * through "intellectual property rights."
 *
 * This is my first attempt to write Drupal code
 * and I probably don't have the format quite right.
 *
 */

/* the menu hook - adds the path "/testie" to the site. */

function testie_menu(){
 $items['testie'] = array(
 'page callback' => 'testie_my_page',
 'access arguments' => array('access content'),
 );
 return $items;
}

/* this code (noted in the callback above) creates the
 * contents of the "testie" page */
 
function testie_my_page(){
 return "<p>This is my testie demo page.</p>";
}

/* use http://mydomain.com/?q=testie if rewrite_mod not active  */  
