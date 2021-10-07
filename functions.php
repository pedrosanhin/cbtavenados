<?php

function init_template(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );
}

add_action('after_setup_theme', 'init_template');

function assets(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css', '', '5.1.1', 'all');
    wp_register_style('oxygen', 'https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap', '', '1.0', 'all');

    wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap','oxygen'), '1.0', 'all');
    wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js','','5.0.2',true);
}

add_action('wp_enqueue_scripts', 'assets');

function sidebar(){
    register_sidebar(
      array(
          'name' => 'Pie de página',
          'id' => 'footer',
          'description' => 'Zona de Widgets para pie de página',
          'before_title' => '<p>',
          'after_title' => '</p>',
          'before_widget' => '<div id="%1$s" class="%2$s">',
          'after_widget' => '</div>'
        )
    );
}

add_action('widgets_init', 'sidebar');

function carreras_type(){

    //Labels utilizadas
    $labels = array(
        'name' => 'Carreras',
        'singular_name' => 'Carrera',
        'menu_name' => 'Carreras'
    );

    //https://developer.wordpress.org/reference/functions/register_post_type/
    $args = array(
        'label' => 'Carreras',
        'description' => 'Carreras que ofrece la institución ',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'public' => true, //false si borrador y true publicadas
        'show_in_menu' => true,
        'menu_positions' => 5,
        'menu_icon' => 'dashicons-book',//Wordpress tiene algunos hash determinados: https://developer.wordpress.org/resource/dashicons
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite' => true,
        'show_in_rest' => true
    );
    //argumentos: nombre, configuraciones
    
    register_post_type('carrera', $args);
}

add_action('init', 'carreras_type');

