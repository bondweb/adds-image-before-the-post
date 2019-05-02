<?php
/*
Plugin Name:	Adds image before the post
Plugin URI:		https://#
Description:	Questo plug-in aggiunge un'immagine specifica nelle pagine dei post, recuperandola dalla cartella images del tema attivo
Version:		1.0
Author:			Mario Bondici
Author URI:		https://# 
TextDomain:		mbwp
License:		GPLv2
*/


add_filter( 'the_content', 'adds_image_before_the_post', 20 );
/**
 * Add a icon to the beginning of every post page.
 *
 * @uses is_single()
 */
function adds_image_before_the_post( $content ) {

    if ( is_single() )
        // Add image to the beginning of each page
        $content = sprintf(
            '<img class="post-icon" src="%s/images/post_icon.png" alt="Post icon" title=""/>%s',
            get_bloginfo( 'stylesheet_directory' ),
            $content
        );

    // Returns the content.
    return $content;
}