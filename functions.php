<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

function loadCss()
{

    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(),false, 'all');
    wp_enqueue_style('bootstrap');
   // wp_register_style('magnific',get_template_directory_uri() . '/css/magnific-popup.css',array(),false, 'all');
   // wp_enqueue_style('magnific');
    wp_register_style('fontawesome',get_template_directory_uri() . '/css/font-awesome.min',array(),false, 'all');
    wp_enqueue_style('fontawesome');
    wp_register_style('carousel',get_template_directory_uri() . '/css/owl.carousel.min.css',array(),false, 'all');
    wp_enqueue_style('carousel');
    wp_register_style('slicknav',get_template_directory_uri() . '/css/slicknav.min.css',array(),false, 'all');
    wp_enqueue_style('slicknav');
    wp_register_style('style',get_template_directory_uri() . '/css/style.css',array(),false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','loadCss');

function loadJs(){
    wp_register_script('jquerymin',get_template_directory_uri() . '/js/jquery-3.2.1.min.js','jquery',false, true);
    wp_enqueue_script('jquerymin');
    wp_register_script('bootstrap',get_template_directory_uri() . '/js/bootstrap.min.js','jquery',false, true);
    wp_enqueue_script('bootstrap');
    wp_register_script('slicknav',get_template_directory_uri() . '/js/jquery.slicknav.min.js"','jquery',false, true);
    wp_enqueue_script('slicknav');
    wp_register_script('carousel',get_template_directory_uri() . '/js/owl.carousel.min.js','jquery',false, true);
    wp_enqueue_script('carousel');
    wp_register_script('mixitup',get_template_directory_uri() . '/js/mixitup.min.js','jquery',false, true);
    wp_enqueue_script('mixitup');
    wp_register_script('main',get_template_directory_uri() . '/js/main.js','jquery',false, true);
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts','loadJs');


//menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);



//add news  ------------------------------------------------

function news_post_type(){
    $args = array(
            'labels' => array( 'name'=> 'News' , 'singular_name' => 'News'),
            'hierarchical' => true,
            'public' =>true,
            'menu_icon' => 'dashicons-images-alt2',
            'has_archive' => true,
            'supports' => array('title','editor','thumbnail'),
            //'rewrite' => array('slug','mycars')
        );
    register_post_type('news',$args);

}

add_action('init', 'news_post_type');

function news_taxonomy(){
    $args = array(
        'labels' => array('name'=>'Category', 'singular_name'=> 'Category'),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('category',array('news'), $args);
}

add_action('init','news_taxonomy');
//-----------------------------------------------------------


//add playlist  ------------------------------------------------

function playlist_post_type(){
    $args = array(
            'labels' => array( 'name'=> 'Playlists' , 'singular_name' => 'Playlist'),
            'hierarchical' => true,
            'public' =>true,
            'menu_icon' => 'dashicons-images-alt2',
            'has_archive' => true,
            'supports' => array('title','editor','thumbnail'),
            //'rewrite' => array('slug','mycars')
        );
    register_post_type('playlist',$args);

}

add_action('init', 'playlist_post_type');

function playlist_taxonomy(){
    $args = array(
        'labels' => array('name'=>'Groups', 'singular_name'=> 'Group'),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('group',array('playlist'), $args);
    
}

add_action('init','playlist_taxonomy');

function song_taxonomy(){
    $args = array(
        'labels' => array('name'=>'Artists', 'singular_name'=> 'Artist'),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('artist',array('playlist'), $args);
}

add_action('init','song_taxonomy');


function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'playlist');
}

add_action('init', 'tags_support_all');

//-----------------------------------------------------------


//add song and artist  ------------------------------------------------

// function song_post_type(){
//     $args = array(
//             'labels' => array( 'name'=> 'Songs' , 'singular_name' => 'Song'),
//             'hierarchical' => true,
//             'public' =>true,
//             'menu_icon' => 'dashicons-images-alt2',
//             'has_archive' => true,
//             'supports' => array('title','editor','thumbnail','custom-fields'),
//             //'rewrite' => array('slug','mycars')
//         );
//     register_post_type('song',$args);

// }

// add_action('init', 'song_post_type');

// function song_taxonomy(){
//     $args = array(
//         'labels' => array('name'=>'Artists', 'singular_name'=> 'Artist'),
//         'public' => true,
//         'hierarchical' => true,
//     );
//     register_taxonomy('artist',array('song'), $args);
// }

// add_action('init','song_taxonomy');

// function tags_support_all() {
// 	register_taxonomy_for_object_type('post_tag', 'song');
// }

// add_action('init', 'tags_support_all');

//-----------------------------------------------------------

//registerSidebards
function my_sidebars(){
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id'   => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
        );
    register_sidebar(
            array(
                'name' => 'Blog Sidebar',
                'id'   => 'blog-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
            );
        
}
add_action('widgets_init','my_sidebars');

