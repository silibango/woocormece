<?php
/**
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fancy_lab 
 */

function fancy_lab_script(){
	wp_enqeue_style("fancy_lab_style", get_stylesheet_url(),'1.0', 'all' );
}
