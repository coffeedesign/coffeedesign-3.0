<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

// Theme Support
include 'config/themeSupport.php';

// Customization
include 'config/customization.php';

// Register Custom Post Types
include 'config/postTypes/event.php';
include 'config/postTypes/sponsor.php';

// Register Custom taxonomies
include 'config/taxonomies/eventType.php';

// Custom Terms
include 'config/terms/eventTypeTerms.php';

// Register Custom Meta Boxes
include 'config/metaBoxes/location.php';
