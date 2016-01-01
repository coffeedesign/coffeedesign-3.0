<?php

// Manualy set permalinks to postname
global $wp_rewrite;
$wp_rewrite->set_permalink_structure('/%postname%/');
update_option( "rewrite_rules", FALSE );
$wp_rewrite->flush_rules( true );

// Remove Posts from Admin Menu
// Reduces visual clutter
function post_remove() {
  remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove');
