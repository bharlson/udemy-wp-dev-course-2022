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