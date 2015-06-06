<?php

use \ThemeJuice\Theme as Theme;

/**
 * Setup theme
 */
$theme = new Theme( array(

  // Packages to load
  "packages" => array(
    "functions" => array(),
    "shortcodes" => array(
      "button" => true,
      "colors" => true,
      "fonts" => true,
    ),
  ),

  // Assets to enqueue
  "assets" => array(

    // jQuery CDN
    "jquery" => array(
      "type" => "script",
      "location" => "assets/scripts/jquery.min.js",
      "version" => "1.11.2",
      "in_footer" => true,
    ),

    // Theme scripts
    "theme-juice-scripts" => array(
      "type" => "script",
      "location" => "assets/scripts/main.min.js",
      "dependencies" => array( "jquery" ),
      "version" => "0.1.0",
      "in_footer" => true,
    ),

    // Theme stylesheet
    "theme-juice-styles" => array(
      "type" => "style",
      "location" => "assets/css/main.min.css",
      "version" => "0.1.0",
    ),
  ),
));

/**
 * Register menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus
 */
register_nav_menus( array(
  "primary_nav" => __( "Primary Navigation", "theme-juice" ),
  "footer_nav" => __( "Footer Navigation", "theme-juice" ),
));
