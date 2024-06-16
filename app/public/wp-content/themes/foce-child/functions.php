<?php
function enqueue_custom_scripts_and_styles() {

    // Custom animation script
    wp_enqueue_script('custom-animation-script', get_stylesheet_directory_uri() . '/js/custom-animation.js', ['jquery'], false, true);

    // SwiperJS CSS & JS
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/node_modules/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/node_modules/swiper/swiper-bundle.min.js', [], null, true);

    // Styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/style.css', ['parent-style']);

    // Inline CSS
    $custom_css = "
        #oscar-nomination::before {
            content: url('" . get_template_directory_uri() . "/assets/images/Sunflower.png');
            display: block;
            position: absolute;
            z-index: 10;
            left: -1em;
            top: 0;
            width: 155px;
            height: 178px;
        }
        #oscar-nomination::after {
            content: url('" . get_template_directory_uri() . "/assets/images/orchid.png');
            position: absolute;
            z-index: 10;
            right: 1em;
            top: 1.2em;
        }
    ";
    wp_add_inline_style('child-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts_and_styles');

// Synchronize customizer options from parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value;
    }, 10, 2);

    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
