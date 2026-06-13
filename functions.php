<?php
add_action( 'wp_enqueue_scripts', function () {
  $uri = get_template_directory_uri();
  $v   = wp_get_theme()->get('Version');

  // Google Fonts
  wp_enqueue_style(
    'marcasso-fonts',
    'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300;9..144,400;9..144,500;9..144,600&family=Inter+Tight:wght@400;500;600;700&display=swap',
    [],
    null
  );

  // Base styles (variables, reset, typography)
  wp_enqueue_style( 'marcasso-style',   "$uri/style.css",            ['marcasso-fonts'], $v );

  // Page-level layout
  wp_enqueue_style( 'marcasso-page',    "$uri/assets/css/page.css",  ['marcasso-style'],  $v );

  // Article-specific styles (only on single posts)
  if ( is_single() ) {
    wp_enqueue_style( 'marcasso-article', "$uri/assets/css/article.css", ['marcasso-page'], $v );
  } else {
    wp_enqueue_script( 'marcasso-utils',           "$uri/assets/js/utils.js",            [],                                                                    $v, true );
    wp_enqueue_script( 'marcasso-data',            "$uri/assets/js/data.js",             ['marcasso-utils'],                                                    $v, true );
    wp_enqueue_script( 'marcasso-app',             "$uri/assets/js/app.js",              ['marcasso-footer'],                                                   $v, true );
  }

  // Expose theme URL to JS (replaces inline <script> in index.php)
  wp_localize_script( 'marcasso-utils', 'THEME_URI_DATA', [ 'uri' => $uri ] );
} );

add_action( 'wp_enqueue_scripts', function () {
  // Make THEME_URI available as a plain JS variable (mirrors old inline script)
  wp_add_inline_script( 'marcasso-utils', 'var THEME_URI = ' . wp_json_encode( get_template_directory_uri() ) . ';', 'before' );
}, 11 );
