<?php

/**********************************************************************************************************************
*
* Shortcodes from casino.ru
*
*********************************************************************************************************************/

/* шорткод актуальный год */
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');

/* шорткод актуальный месяц */

function month_shortcode() {
  $month = date_i18n( 'F' );
  return $month;
}
add_shortcode('month', 'month_shortcode');

/* шорткод в тайтле статьи с поддержкой плагина All In One Seo */
function add_shortcode_to_title( $title ){
  return do_shortcode($title);
}
add_filter( 'aioseop_title', 'add_shortcode_to_title' );
add_filter( 'aioseop_description', 'add_shortcode_to_title' );

/* шорткод в заголовке статьи */
function add_shortcode_to_h1( $title ){
  return do_shortcode($title);
}

add_filter( 'the_title', 'add_shortcode_to_h1' );