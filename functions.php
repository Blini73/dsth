<?php
require get_template_directory() . '/inc/customizer.php'
function ds_theme_load_scripts (): void{
    wp_enqueue_style( 'dstheme-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
}

add_action('wp_enqueue_scripts', 'ds_theme_load_scripts');


function dstheme_config(){
    register_nav_menus(
        array(
            'wp_devs_main_menu' => "Main Menu",
            'wp_devs_footer_menu' => "Footer Menu"
        )
        );
       $args = array(
        'height' => 225,
         'width' => 1920
       );
       
        add_theme_support('custom-header', $args);
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo', array(
            'width'=>200,
            'height'=>110,
            'flex-height'=> true,
            'flex-width' => true
        ));
        }


add_action('after_setup_theme', 'dstheme_config', 0);
add_action('widgets_init', 'dstheme_sidebars');

function dstheme_sidebars (){
    register_sidebar(
    array(
        'name' => 'Blog Sidebar',
        'id' => 'sidebar-blog',
        'description' => 'This is the blog sidebar.You can add your widgets here',
        'before_widget' => '<div class = "widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class = "widget-title">'
    )
    );
}
register_sidebar(
    array(
        'name' => 'Service 1',
        'id' => 'service-1',
        'description' => 'First Service Area',
        'before_widget' => '<div class = "widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class = "widget-title">'
        
    )
    );
    register_sidebar(
        array(
            'name' => 'Service 2',
            'id' => 'service-2',
            'description' => 'Second Service Area',
            'before_widget' => '<div class = "widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">'
            
        )
        );
        register_sidebar(
            array(
                'name' => 'Service 3',
                'id' => 'service-3',
                'description' => 'Third Service Area',
                'before_widget' => '<div class = "widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class = "widget-title">'
                
            )
            );
if(! function_exists('wp_body_open')){
    function wp_body_open(){
        do_action('wp_body_open');
    }

}