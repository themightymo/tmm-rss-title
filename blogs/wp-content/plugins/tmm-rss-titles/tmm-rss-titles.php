<?php
/*
Plugin Name: TMM RSS Titles
Plugin URI: https://www.themightymo.com/
Version: 1.0
Author: The Mighty Mo! Design Co. LLC
Description: Adds author name to the RSS post titles
*/

add_filter('the_title_rss', 'tmm_rss_title');

function tmm_rss_title ( $title ) {
	$post_author_id = get_post_field( 'post_author', $post_id );
    $headline = get_the_author_meta( 'display_name' , $post_author_id );

    if (!empty($headline))
        return get_the_title() . ' by ' . $headline;

    return $title;
}