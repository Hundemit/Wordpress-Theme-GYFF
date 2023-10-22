<?php
/* 
Plugin Name: Roter Hintergrund
Description: Färbt den Body rot ein
Author: Jonas Hellwig
*/
function tailpress_setup()
{
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'tailpress'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support(
        'custom-logo'
    );
    add_theme_support('post-thumbnails');

    add_theme_support(
        'align-wide'
    );
    add_theme_support('wp-block-styles');

    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');


function add_head_javascript()
{
    get_template_part('js/customJsForHeader');
    get_template_part('js/tailwindJs');
}

function add_footer_javascript()
{
    get_template_part('js/customJsForFooter');
}

add_action('wp_head', 'add_head_javascript');
add_action('wp_footer', 'add_footer_javascript');


function get_first_text_paragraph($post_id)
{
    // Get the post content
    $post = get_post($post_id);
    $content = $post->post_content;

    // Remove shortcodes from the content
    $content = strip_shortcodes($content);


    // Get the first paragraph
    $paragraphs = explode('</p>', $content);
    $first_paragraph = $paragraphs[0];

    // Remove any remaining HTML tags
    $first_paragraph = wp_strip_all_tags($first_paragraph);

    echo $first_paragraph;
}

function get_first_image($post_id)
{
    // Get the post content
    $post = get_post($post_id);
    $content = $post->post_content;

    // Get the first image from the content
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);
    $first_img = $matches[1][0];

    echo $first_img;
}

function get_the_author_custom($post_id) {
    // Ruft den Autor eines Beitrags ab
    $post = get_post($post_id);

    // Ruft die ID des Autors des Beitrags ab
    $author_id = $post->post_author;

    // Ruft den Anzeigenamen des Autors ab
    $author_name = get_the_author_meta('display_name', $author_id);

    // Gibt den Anzeigenamen des Autors zurück
    return $author_name;
}

function get_the_author_img($author_name) {
    // Überprüft, ob der angegebene Autorname "Jan Hundemit" ist
    if ($author_name === 'Julian') {
        // Wenn der Autor "Jan Hundemit" ist, gibt "julian.png" zurück
        return 'julian.png';
    } else {
        // Andernfalls gibt "adrian.png" zurück
        return 'adrian.png';
    }
}



function get_blog_text($post_id)
{
    $post = get_post_without_first_paragraph($post_id);

    $post = delete_first_image($post);

    $post = replace_galleries_with_custom_gallery($post);


    echo $post;
}

function get_post_without_first_paragraph($post_id)
{
    // Get the post content
    $post = get_post($post_id);
    $content = $post->post_content;

    // Delete the first paragraph
    $content = preg_replace('/<p>.*?<\/p>/', '', $content, 1);

    // Remove shortcodes from the content
    $content = strip_shortcodes($content);

    return $content;
}

function delete_first_image($content)
{
    // Delete the first image from the content
    $content = preg_replace('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', '', $content, 1);

    return $content;
}

function replace_galleries_with_custom_gallery($content)
{
    // Suche nach allen Galerien im Inhalt
    preg_match_all('/<!--\s*wp:gallery[^>]*-->.*?<!--\s*\/wp:gallery\s*-->/s', $content, $matches);

    $image_sources_array = array();

    // Iteriere durch alle gefundenen Bildergalerien
    // Iteriere durch alle gefundenen Bildergalerien
    foreach ($matches[0] as $match) {
        // Suche nach allen Bild-Quellen in der Bildergalerie
        preg_match_all('/<img.*?src="(.*?)"/', $match, $image_matches);

        // Speichere alle Bildquellen in einem Array
        $image_sources = $image_matches[1];

        // Füge die Bildquellen dem 2D-Array hinzu
        array_push($image_sources_array, $image_sources);


        // Ersetze die Bildergalerie im Inhalt durch die eigene Galerie
        ob_start();
        include(__DIR__ . '/template_parts/gallery-custom.php');
        $custom_gallery = ob_get_clean();
        $content = str_replace($match, $custom_gallery, $content);
    }

    return $content;

    // return implode("\n", $image_sources_array[0]);
}

function get_the_author_img_custom($post_id) {
    // Ruft den Autor eines Beitrags ab
    $post = get_post($post_id);

    // Ruft die ID des Autors des Beitrags ab
    $author_id = $post->post_author;

    // Ruft die URL des Profilbilds des Autors ab
    $author_img_url = get_avatar_url($author_id, array('size' => 50));

    // Gibt die URL des Profilbilds des Autors zurück
    return $author_img_url;
}