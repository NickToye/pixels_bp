<?php

// ******************* Sidebars ****************** //

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Sidebar Widgets',
		'before_widget' => '<section id="%1$s" class="block block--aside">',
		'after_widget' => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => "</h2>\n",
	));
	register_sidebar(array(
		'name' => 'Home Widgets',
		'before_widget' => '<section id="%1$s" class="block">',
		'after_widget' => '</section>',
		'before_title'  => '<header><h2>',
		'after_title'   => "</h2></header>\n",
	));


}

// ******************* Add Custom Menus ****************** //

add_theme_support( 'menus' );

add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'primary', __( 'Primary' ) );
	register_nav_menu( 'secondary', __( 'Secondary' ) );
}

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"sub-menu dropdown__menu\">\n";
  }
}

// ******************* Remove P from IMG ****************** //

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');



// ******************* Pagination ****************** //

function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="center-block"><ul class="pagination">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link('&laquo;') );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		/*
if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
*/
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link('&raquo;') );

	echo '</ul></div>' . "\n";

}

// ***** EM **** //

add_filter('em_event_output_condition', 'em_event_output_condition_filter', 1, 4);

function em_event_output_condition_filter($replacement, $condition, $match, $EM_Event) {
	if (is_object($EM_Event) && preg_match('/^has_(more_information)$/', $condition, $matches)){
		if (array_key_exists($matches[1], $EM_Event->event_attributes) && !empty($EM_Event->event_attributes[$matches[1]])) {
			$replacement = preg_replace("/\{\/?$condition\}/", '', $match);
		} else {
			$replacement = '';
		}
	}
	if (is_object($EM_Event) && preg_match('/^has_(tutor1)$/', $condition, $matches)){
		if (array_key_exists($matches[1], $EM_Event->event_attributes) && !empty($EM_Event->event_attributes[$matches[1]])) {
			$replacement = preg_replace("/\{\/?$condition\}/", '', $match);
		} else {
			$replacement = '';
		}
	}
	if (is_object($EM_Event) && preg_match('/^has_(tutor2)$/', $condition, $matches)){
		if (array_key_exists($matches[1], $EM_Event->event_attributes) && !empty($EM_Event->event_attributes[$matches[1]])) {
			$replacement = preg_replace("/\{\/?$condition\}/", '', $match);
		} else {
			$replacement = '';
		}
	}
	if (is_object($EM_Event) && preg_match('/^has_(tutor3)$/', $condition, $matches)){
		if (array_key_exists($matches[1], $EM_Event->event_attributes) && !empty($EM_Event->event_attributes[$matches[1]])) {
			$replacement = preg_replace("/\{\/?$condition\}/", '', $match);
		} else {
			$replacement = '';
		}
	}
	if (is_object($EM_Event) && preg_match('/^has_(tutor4)$/', $condition, $matches)){
		if (array_key_exists($matches[1], $EM_Event->event_attributes) && !empty($EM_Event->event_attributes[$matches[1]])) {
			$replacement = preg_replace("/\{\/?$condition\}/", '', $match);
		} else {
			$replacement = '';
		}
	}
	if (is_object($EM_Event) && preg_match('/^has_(tutor5)$/', $condition, $matches)){
		if (array_key_exists($matches[1], $EM_Event->event_attributes) && !empty($EM_Event->event_attributes[$matches[1]])) {
			$replacement = preg_replace("/\{\/?$condition\}/", '', $match);
		} else {
			$replacement = '';
		}
	}
	if (is_object($EM_Event) && preg_match('/^has_(attend1)$/', $condition, $matches)){
		if (array_key_exists($matches[1], $EM_Event->event_attributes) && !empty($EM_Event->event_attributes[$matches[1]])) {
			$replacement = preg_replace("/\{\/?$condition\}/", '', $match);
		} else {
			$replacement = '';
		}
	}
	if (is_object($EM_Event) && preg_match('/^has_(attend2)$/', $condition, $matches)){
		if (array_key_exists($matches[1], $EM_Event->event_attributes) && !empty($EM_Event->event_attributes[$matches[1]])) {
			$replacement = preg_replace("/\{\/?$condition\}/", '', $match);
		} else {
			$replacement = '';
		}
	}
	if (is_object($EM_Event) && preg_match('/^has_(attend3)$/', $condition, $matches)){
		if (array_key_exists($matches[1], $EM_Event->event_attributes) && !empty($EM_Event->event_attributes[$matches[1]])) {
			$replacement = preg_replace("/\{\/?$condition\}/", '', $match);
		} else {
			$replacement = '';
		}
	}
	if (is_object($EM_Event) && preg_match('/^has_(attend4)$/', $condition, $matches)){
		if (array_key_exists($matches[1], $EM_Event->event_attributes) && !empty($EM_Event->event_attributes[$matches[1]])) {
			$replacement = preg_replace("/\{\/?$condition\}/", '', $match);
		} else {
			$replacement = '';
		}
	}
	if (is_object($EM_Event) && preg_match('/^has_(extra_ticket_infomation)$/', $condition, $matches)){
		if (array_key_exists($matches[1], $EM_Event->event_attributes) && !empty($EM_Event->event_attributes[$matches[1]])) {
			$replacement = preg_replace("/\{\/?$condition\}/", '', $match);
		} else {
			$replacement = '';
		}
	}

	return $replacement;
}
add_filter('em_event_output_condition', 'em_event_output_condition_filter', 1, 4);

function my_custom_ticket_header($columns){
	$collumns = array( 'type' => __('Ticket Type','dbem'), 'price' => __('Price','dbem'), 'spaces' => __('',''));
	return $collumns;
}
add_filter('em_booking_form_tickets_cols','my_custom_ticket_header',1,1);


// ******************* Add Custom Excerpt Lengths ****************** //

function wpe_excerptlength_index($length) {
    return 160;
}
function wpe_excerptmore($more) {
    return '...<a href="'. get_permalink().'">Read More ></a>';
}

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

// ******************* Posted On ****************** //

if ( ! function_exists( 'sfp_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post—date/time and author.
 *
 * @since Twenty Ten 1.0
 */
function sfp_posted_on() {
	printf( __(  ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date( $d )
		),
		sprintf( '%3$s',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'koi' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

// ******************* Add Post Thumbnails ****************** //

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, true );
add_image_size( 'featured-image', 1200, 9999 );
add_image_size( 'slide', 1000, 9999);
add_image_size( 'blog-thumb', 400,9999 );


// ******************* Contact Form 7 ****************** //
add_filter( 'wpcf7_form_class_attr', 'your_custom_form_class_attr' );

function your_custom_form_class_attr( $class ) {
	$class .= ' form';
	return $class;
}

// ******************* Category single template ****************** //
//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);

// ******************* Add Options to Theme Customizer ****************** //


function themename_customize_register($wp_customize){
    $wp_customize->add_section('themename_section_name', array(
	    'title' => __('Section Title', 'themename'),
	    'priority' => 120,
	));

	$wp_customize->add_setting('themename_theme_options[themename_option_name]', array(
	    'default'        => 'Input description',
	    'capability'     => 'edit_theme_options',
	    'type'           => 'option',
	));

	$wp_customize->add_control('themename_option_name', array(
	    'label'      => __('Name of option', 'themename'),
	    'section'    => 'themename_section_name',
	    'settings'   => 'themename_theme_options[themename_option_name]',
	));
}

add_action('customize_register', 'themename_customize_register');


// ******************* Add Shortcode ****************** //

function secondaryCallout($atts, $content = null) {
	extract(shortcode_atts(array(
	'link'	=> '#',
    'link_title'	=> '',
    'content'	=> '',
    ), $atts));

	$out = '
		<div class="secondaryCallout tertiaryColorBkg">
			'.$content.' <a class="secondaryColorText" title="'.$link_title.'" href="'.$link.'">'.$link_title.' &gt;</a>
		</div>
	';

    return $out;
}

add_shortcode('secondary_callout', 'secondaryCallout');

add_filter('widget_text', 'do_shortcode');

?>