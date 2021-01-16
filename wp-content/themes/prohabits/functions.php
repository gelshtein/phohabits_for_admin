<?php

function mytheme_setup_theme_supported_features() {
    add_theme_support( 'align-wide' );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

function mythem_enqueue_style() {
   // wp_enqueue_style( 'about', get_template_directory_uri().'/css/about_us.css');

    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
   // wp_enqueue_style( 'home', get_template_directory_uri().'/css/home.css' );
}

//add_action( 'wp_enqueue_scripts', 'mythem_enqueue_style' );
add_action( 'enqueue_block_editor_assets', 'mythem_enqueue_style' );

function my_register_blocks_home() {


    if( function_exists( 'acf_register_block_type' ) ) {

        // Home_first
        acf_register_block_type(array(
            'name'              => 'home_first',
            'title'             => __('Home_first_block'),
            'description'       => __('Make Work...'),
            'render_template'   => 'modules/part-home_first.php',
            'category'          => 'home-block',


        ));

        // Home_second
        acf_register_block_type(array(
            'name'              => 'home_second',
            'title'             => __('Home_second_block'),
            'description'       => __('Create positive momentum...'),
            'render_template'   => 'modules/part-home_second.php',
            'category'          => 'home-block',
        ));
        // Home_three
        acf_register_block_type(array(
            'name'              => 'home_three',
            'title'             => __('Home_three_block'),
            'description'       => __('Behavior is science.'),
            'render_template'   => 'modules/part-home_three.php',
            'category'          => 'home-block',
        ));
        // Home_four
        acf_register_block_type(array(
            'name'              => 'home_four',
            'title'             => __('Home_four_block'),
            'description'       => __('The solution'),
            'render_template'   => 'modules/part-home_four.php',
            'category'          => 'home-block',
        ));
        // Home_five
        acf_register_block_type(array(
            'name'              => 'home_five',
            'title'             => __('Home_five_block'),
            'description'       => __('Featured work'),
            'render_template'   => 'modules/part-home_five.php',
            'category'          => 'home-block',
        ));
        // Home_six
        acf_register_block_type(array(
            'name'              => 'home_six',
            'title'             => __('Home_six_block'),
            'description'       => __('Leadership skills'),
            'render_template'   => 'modules/part-home_six.php',
            'category'          => 'home-block',
        ));
        // Home_seven
        acf_register_block_type(array(
            'name'              => 'home_seven',
            'title'             => __('Home_seven_block'),
            'description'       => __('Fostering inclusion.'),
            'render_template'   => 'modules/part-home_seven.php',
            'category'          => 'home-block',
        ));
        // Home_eight
        acf_register_block_type(array(
            'name'              => 'home_eight',
            'title'             => __('Home_eight_block'),
            'description'       => __('Discover potential'),
            'render_template'   => 'modules/part-home_eight.php',
            'category'          => 'home-block',
        ));
        // Home_nine
        acf_register_block_type(array(
            'name'              => 'home_nine',
            'title'             => __('Home_nine_block'),
            'description'       => __('WE POWER CHANNEL PARTNERS'),
            'render_template'   => 'modules/part-home_nine.php',
            'category'          => 'home-block',
        ));
    }
}
add_action( 'acf/init', 'my_register_blocks_home' );


function my_register_blocks_about() {


    if( function_exists( 'acf_register_block_type' ) ) {

        // Home_first
        acf_register_block_type(array(
            'name'              => 'about_first',
            'title'             => __('About_first_block'),
            'description'       => __('We exist to help...'),
            'render_template'   => 'modules/about_us/part-about_first.php',
            'category'          => 'about-block',
        ));

        // Home_second
        acf_register_block_type(array(
            'name'              => 'about_second',
            'title'             => __('About_second_block'),
            'description'       => __('Seventy percent of transformations fail...'),
            'render_template'   => 'modules/about_us/part-about_second.php',
            'category'          => 'about-block',
        ));
        // Home_three
        acf_register_block_type(array(
            'name'              => 'about_three',
            'title'             => __('About_three_block'),
            'description'       => __('Solutions'),
            'render_template'   => 'modules/about_us/part-about_three.php',
            'category'          => 'about-block',
        ));
        // Home_four
        acf_register_block_type(array(
            'name'              => 'about_four',
            'title'             => __('About_four_block'),
            'description'       => __('It’s time for simple...'),
            'render_template'   => 'modules/about_us/part-about_four.php',
            'category'          => 'about-block',
        ));
        // Home_five
        acf_register_block_type(array(
            'name'              => 'about_five',
            'title'             => __('About_five_block'),
            'description'       => __('Download White Paper'),
            'render_template'   => 'modules/about_us/part-about_five.php',
            'category'          => 'about-block',
        ));

    }
}
add_action( 'acf/init', 'my_register_blocks_about' );

function my_register_blocks_blog() {


    if( function_exists( 'acf_register_block_type' ) ) {

        // Blog_first
        acf_register_block_type(array(
            'name'              => 'blog_first',
            'title'             => __('Blog_first_block'),
            'description'       => __('Prosocial Magazine'),
            'render_template'   => 'modules/blog/part-blog_first.php',
            'category'          => 'blog-block',
        ));

        // Blog_second
        acf_register_block_type(array(
            'name'              => 'blog_second',
            'title'             => __('Blog_second_block'),
            'description'       => __('News block'),
            'render_template'   => 'modules/blog/part-blog_second.php',
            'category'          => 'blog-block',
        ));


    }
}
add_action( 'acf/init', 'my_register_blocks_blog' );

function my_register_blocks_contact() {


    if( function_exists( 'acf_register_block_type' ) ) {

        // Blog_first
        acf_register_block_type(array(
            'name'              => 'contact_first',
            'title'             => __('Blog_contact_block'),
            'description'       => __('contact us'),
            'render_template'   => 'modules/contact/part-contact_first.php',
            'category'          => 'contact-block',
        ));



    }
}
add_action( 'acf/init', 'my_register_blocks_contact' );

function my_register_blocks_ey() {


    if( function_exists( 'acf_register_block_type' ) ) {


        acf_register_block_type(array(
            'name'              => 'ey_first',
            'title'             => __('EY First Block'),
            'description'       => __(''),
            'render_template'   => 'modules/ey/ey_first.php',
            'category'          => 'ey-block',
        ));

        acf_register_block_type(array(
            'name'              => 'ey_second',
            'title'             => __('EY Second Block'),
            'description'       => __(''),
            'render_template'   => 'modules/ey/ey_second.php',
            'category'          => 'ey-block',
        ));

        acf_register_block_type(array(
            'name'              => 'ey_three',
            'title'             => __('EY Three Block'),
            'description'       => __(''),
            'render_template'   => 'modules/ey/ey_three.php',
            'category'          => 'ey-block',
        ));

        acf_register_block_type(array(
            'name'              => 'ey_four',
            'title'             => __('EY Four Block'),
            'description'       => __(''),
            'render_template'   => 'modules/ey/ey_four.php',
            'category'          => 'ey-block',
        ));

        acf_register_block_type(array(
            'name'              => 'ey_five',
            'title'             => __('EY Five Block'),
            'description'       => __(''),
            'render_template'   => 'modules/ey/ey_five.php',
            'category'          => 'ey-block',
        ));

        acf_register_block_type(array(
            'name'              => 'ey_six',
            'title'             => __('EY Six Block'),
            'description'       => __(''),
            'render_template'   => 'modules/ey/ey_six.php',
            'category'          => 'ey-block',
        ));

        acf_register_block_type(array(
            'name'              => 'ey_seven',
            'title'             => __('EY Seven Block'),
            'description'       => __(''),
            'render_template'   => 'modules/ey/ey_seven.php',
            'category'          => 'ey-block',
        ));

        acf_register_block_type(array(
            'name'              => 'ey_eight',
            'title'             => __('EY Eight Block'),
            'description'       => __(''),
            'render_template'   => 'modules/ey/ey_eight.php',
            'category'          => 'ey-block',
        ));





    }
}
add_action( 'acf/init', 'my_register_blocks_ey' );

function my_register_blocks_user() {


    if( function_exists( 'acf_register_block_type' ) ) {

        // Blog_first
        acf_register_block_type(array(
            'name'              => 'user_first',
            'title'             => __('User_block'),
            'description'       => __('User_block'),
            'render_template'   => 'modules/user_login/part-user_first.php',
            'category'          => 'user-block',
        ));



    }
}
add_action( 'acf/init', 'my_register_blocks_user' );

function my_register_blocks_howit() {


    if( function_exists( 'acf_register_block_type' ) ) {


        acf_register_block_type(array(
            'name'              => 'howit_first',
            'title'             => __('How it Works First Block'),
            'description'       => __(''),
            'render_template'   => 'modules/howit/howit_first.php',
            'category'          => 'howit-block',
        ));
        acf_register_block_type(array(
            'name'              => 'howit_second',
            'title'             => __('How it Works Second Block'),
            'description'       => __(''),
            'render_template'   => 'modules/howit/howit_second.php',
            'category'          => 'howit-block',
        ));
        acf_register_block_type(array(
            'name'              => 'howit_three',
            'title'             => __('How it Works Three Block'),
            'description'       => __(''),
            'render_template'   => 'modules/howit/howit_three.php',
            'category'          => 'howit-block',
        ));



    }
}
add_action( 'acf/init', 'my_register_blocks_howit' );

function my_register_blocks_magazine() {


    if( function_exists( 'acf_register_block_type' ) ) {

        // Magazine_first
        acf_register_block_type(array(
            'name'              => 'magazine_first',
            'title'             => __('Magazine_first'),
            'description'       => __('TAKE ACTION TODAY & MEASURE WHAT MATTERS'),
            'render_template'   => 'modules/magazine/part-magazine_first.php',
            'category'          => 'magazine-block',
        ));
        // Magazine_second
        acf_register_block_type(array(
            'name'              => 'magazine_second',
            'title'             => __('Magazine_second'),
            'description'       => __('A science-backed solution...'),
            'render_template'   => 'modules/magazine/part-magazine_second.php',
            'category'          => 'magazine-block',
        ));
        // Magazine_three
        acf_register_block_type(array(
            'name'              => 'magazine_three',
            'title'             => __('Magazine_three'),
            'description'       => __(''),
            'render_template'   => 'modules/magazine/part-magazine_three.php',
            'category'          => 'magazine-block',
        ));
        // Magazine_four
        acf_register_block_type(array(
            'name'              => 'magazine_four',
            'title'             => __('Magazine_four'),
            'description'       => __('Science based...'),
            'render_template'   => 'modules/magazine/part-magazine_four.php',
            'category'          => 'magazine-block',
        ));
        // Magazine_five
        acf_register_block_type(array(
            'name'              => 'magazine_five',
            'title'             => __('Magazine_five'),
            'description'       => __('The most effective way to...'),
            'render_template'   => 'modules/magazine/part-magazine_five.php',
            'category'          => 'magazine-block',
        ));
        // Magazine_six
        acf_register_block_type(array(
            'name'              => 'magazine_six',
            'title'             => __('Magazine_six'),
            'description'       => __('Be the change that you wish to see in the world.'),
            'render_template'   => 'modules/magazine/part-magazine_six.php',
            'category'          => 'magazine-block',
        ));
        // Magazine_seven
        acf_register_block_type(array(
            'name'              => 'magazine_seven',
            'title'             => __('Magazine_seven'),
            'description'       => __('The Benefits'),
            'render_template'   => 'modules/magazine/part-magazine_seven.php',
            'category'          => 'magazine-block',
        ));
        // Magazine_eight
        acf_register_block_type(array(
            'name'              => 'magazine_eight',
            'title'             => __('Magazine_eight'),
            'description'       => __('Create meaningful interactions between'),
            'render_template'   => 'modules/magazine/part-magazine_eight.php',
            'category'          => 'magazine-block',
        ));
        // Magazine_nine
        acf_register_block_type(array(
            'name'              => 'Magazine_nine',
            'title'             => __('magazine_nine'),
            'description'       => __('Be the change that you wish to see in the world.'),
            'render_template'   => 'modules/magazine/part-magazine_nine.php',
            'category'          => 'magazine-block',
        ));
        // Magazine_ten
        acf_register_block_type(array(
            'name'              => 'magazine_ten',
            'title'             => __('Magazine_ten'),
            'description'       => __('Try it now!'),
            'render_template'   => 'modules/magazine/part-magazine_ten.php',
            'category'          => 'magazine-block',
        ));
        // Magazine_eleven
        acf_register_block_type(array(
            'name'              => 'magazine_eleven',
            'title'             => __('Magazine_eleven'),
            'description'       => __('See what else you can do.'),
            'render_template'   => 'modules/magazine/part-magazine_eleven.php',
            'category'          => 'magazine-block',
        ));



    }
}
add_action( 'acf/init', 'my_register_blocks_magazine' );


register_nav_menus( array(
    'header_menu' => 'Header menu',
    'footer_menu_linkedin' => 'Mini menu',
    'blog_menu' => 'Blog menu',
    'footer_menu' => 'Footer menu'
) );


function my_magazine_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'magazine-block',
                'title' => __( 'Magazine', 'magazine-block' ),
            ),
        )
    );
}
function my_home_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'home-block',
                'title' => __( 'Home', 'home-block' ),
            ),
        )
    );
}

function my_about_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'about-block',
                'title' => __( 'About us', 'about-block' ),
            ),
        )
    );
}

function my_blog_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'blog-block',
                'title' => __( 'Blog', 'blog-block' ),
            ),
        )
    );
}

function my_contact_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'contact-block',
                'title' => __( 'Contact', 'contact-block' ),
            ),
        )
    );
}
function my_user_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'user-block',
                'title' => __( 'User Login', 'user-block' ),
            ),
        )
    );
}

function my_ey_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'ey-block',
                'title' => __( 'EY', 'ey-block' ),
            ),
        )
    );
}

function my_howit_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'howit-block',
                'title' => __( 'How It Works', 'howit-block' ),
            ),
        )
    );
}

add_filter( 'block_categories', 'my_home_block_category', 10, 2);
add_filter( 'block_categories', 'my_magazine_block_category', 10, 2);
add_filter( 'block_categories', 'my_about_block_category', 10, 2);
add_filter( 'block_categories', 'my_blog_block_category', 10, 2);
add_filter( 'block_categories', 'my_contact_block_category', 10, 2);
add_filter( 'block_categories', 'my_user_block_category', 10, 2);
add_filter( 'block_categories', 'my_ey_block_category', 10, 2);
add_filter( 'block_categories', 'my_howit_block_category', 10, 2);

// Disable REST API link tag
remove_action('wp_head', 'rest_output_link_wp_head', 10);

// Disable oEmbed Discovery Links
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

// Disable REST API link in HTTP headers
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

/**
 * Disable the emoji's
 */
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

        $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }

    return $urls;
}

# Разрешить загрузку svg
function allow_type($type) {
    $type['svg'] = 'image/svg+xml';
    return $type;
}
add_filter('upload_mimes', 'allow_type');

add_theme_support('post-thumbnails');



?>
