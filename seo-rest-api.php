<?php
/**
 * Plugin Name:       SEO REST API
 * Plugin URI:        https://github.com/zyppy/wpseoapi
 * Description:       Adds common SEO plugin fields to the WP REST API.
 * Version:           0.0.2
 * Requires at least: 4.6
 * Author:            Zyppy
 * Author URI:        https://github.com/zyppy/
 * License:           MIT
 * Text Domain:       wpseoapi
 */
\add_action('rest_api_init', function() {
  foreach(['_yoast_wpseo_title', 'rank_math_title', '_aioseo_title'] as $field) {
    foreach(['post', 'term'] as $type) {
      \register_meta($type, $field, [
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
        'auth_callback' => function() {
          // Prevents RankMath and AIO from blocking REST updates
          return true;
        },
      ]);
    }
  }
});