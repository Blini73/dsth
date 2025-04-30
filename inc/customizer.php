<?php 

function dstheme_customizer( $wp_customize ){
  // 1 copyright section
  $wp_customize->add_section(
    'sec_copyright',
    array(
        'title' -> 'Copyright settings',
        'description' -> 'Copyright Settings'
    )
    );

     $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright X - All Rights Reserved',
            'sanitize_callback' => 'sanitize_text_field'
        )
        );
        $wp_customize->add_control(
            'set_copyright',
            array(
                'label' => 'Copyright Information',
                'description' => 'Please, type your copyright informatiom',
                'section' => 'sec_copyright',
                'type' => 'text'
            )
        );
}

add_action('customize_register', 'dstheme_customizer');