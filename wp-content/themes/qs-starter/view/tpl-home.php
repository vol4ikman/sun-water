<?php
/**
 * Template Name: Homepage Template
 *
 * @package WordPress
 */

get_header();

get_template_part('inc/home/main', 'slider');
get_template_part('inc/home/services', 'section');
get_template_part('inc/home/news', 'section');

get_footer();
