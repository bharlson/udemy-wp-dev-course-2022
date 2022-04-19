<?php

/**
 * Custom Gutenberg Functions
 */

function gutenberg_default_colors() {
    {
        add_theme_support(
            'editor-color-palette', 
            array(
                array(
                    'name' => 'White!',
                    'slug' => 'white',
                    'color' => '#ffffff'
                )
            )   
        );


        add_theme_support(
            'editor-font-sizes', 
            array(
                array(
                    'name' => 'Default',
                    'slug' => 'default',
                    'size' => 16
                    // note wp automatically specifies px for font-size
                ),
                array(
                    'name' => 'Large',
                    'slug' => 'large',
                    'size' => 24
                )
                // this nested arrays contain attributes 
            )  
            // This array contains each custom styles you want to have saved as a 
            // swatch in the specified gutenberg editor area (in this case font sizes)
        );
    }
}
// Sets built in gutenberg color palette editor to only include white 

add_action('init','gutenberg_default_colors');
// Adds function to theme



function bharlson_gutenberg_blocks() {
    wp_register_script(
        'custom-cta-js',
        // custom name 
        get_template_directory_uri() . '/assets/js/gutenberg-cta-block.js', array('wp-blocks')
        // js  file src
    );

    register_block_type(
        'bharlson/custom-cta',
        // name of block type
        // must perfectly match namespace in corresponding block js file
        array(
            'editor_script' => 'custom-cta-js'
        )
    );
}
//end bharlson_gutenberg_blocks

add_action('init','bharlson_gutenberg_blocks');