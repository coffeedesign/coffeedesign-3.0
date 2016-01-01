<?php


function addEventTypeTerms() {
  wp_insert_term(
    'Workshop',
    'eventType',
    array(
      'slug' => 'workshop'
    )
  );
  wp_insert_term(
    'Design on Tap',
    'eventType',
    array(
      'slug' => 'design-on-tap'
    )
  );
  wp_insert_term(
    'Friday Morning',
    'eventType',
    array(
      'slug' => 'friday-morning'
    )
  );
  wp_insert_term(
    'Miscellaneous',
    'eventType',
    array(
      'slug' => 'misc'
    )
  );
}

add_action( 'init', 'addEventTypeTerms' );
