<?php
/*
Plugin Name: Nhom C plugin 2019
Description: Plugin lấy ngẫu nhiên liên kết các bài viết 
Version: 1.0
Author: Nhom C
License: GPL
*/

function nhomC_rand_posts() {
$args = array(
 'post_type' => 'post',
 'orderby' => 'rand',
 'posts_per_page' => 5,
 );
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
  $string .= '<ul>';
   while ( $the_query->have_posts() ) {
          $the_query->the_post();
          $string .= '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
   }
   $string .= '</ul>';
   wp_reset_postdata();
} else {
   $string .= 'no posts found';
}
   return $string;
}
add_shortcode('nhomC_rand_posts','nhomC_rand_posts');