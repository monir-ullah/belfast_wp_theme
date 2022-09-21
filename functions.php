<?php 

// adding option page using acf plugins
include( get_template_directory() . '/inc/belfast-acf-option-page.php' );

function belfast_after_setup_theme() {
    load_theme_textdomain('belfast', get_template_directory() . '/languages');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails', array( 'post','page' ) );
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'belfast_after_setup_theme' );

/**
 * Proper way to enqueue scripts and styles.
 */
function belfast_enqueuing() {

    // enqueue styles
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/assets/css/owl.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'html-template-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'belfat-main-style', get_stylesheet_uri() );



    // enqueue scripts
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'belfast_enqueuing' );


/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Header Search Bar', 'belfast' ),
		'id'            => 'header-search',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


// Styling Comment

function belfast_mycustom_comment_form_title_reply( $defaults ) {  
	$defaults['title_reply'] = __( 'WRITE YOUR COMMENTS' );  
	return $defaults;
}
add_filter( 'comment_form_defaults', 'belfast_mycustom_comment_form_title_reply' );

// Changing Comment placeholder


function belfast_comment_placeholders( $fields )
{
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="'
        /* Replace 'theme_text_domain' with your theme’s text domain.
         * I use _x() here to make your translators life easier. :)
         * See http://codex.wordpress.org/Function_Reference/_x
         */
            . _x(
                'Name *',
                'comment form placeholder',
                'belfast'
                )
            . '"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',
        /* We use a proper type attribute to make use of the browser’s
         * validation, and to get the matching keyboard on smartphones.
         */
        '<input type="email" placeholder="Email *"  id="email" name="email"',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input id="url" name="url" type="text"',
        // Again: a better 'type' attribute value.
        //'<input placeholder="Website" id="url" name="url" type="url"',
		'<input type="url" placeholder="Website"  id="url" name="url"',
        $fields['url']
    );

    return $fields;
}
add_filter( 'comment_form_default_fields', 'belfast_comment_placeholders' );

/**
 * Comment Form Placeholder Comment Field
 */
function belfast_placeholder_comment_form_field($fields) {
    $replace_comment = __('Enter your comments here... *', 'belfast');
     
    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true" required></textarea></p>';
    
    return $fields;
 }
add_filter( 'comment_form_defaults', 'belfast_placeholder_comment_form_field' );

?>


