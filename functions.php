<?php

function theme_styles(){
wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
function theme_js(){
	wp_enqueue_script('respnav', get_template_directory_uri() . '/js/nav.min.js', array('jquery'),'', false);
	}

function mf_responsive_nav(){
echo '<script>
	 var nav = responsiveNav(".nav-collapse", {

        animate: true, // Boolean: Use CSS3 transitions, true or false
		transition: 284, // Integer: Speed of the transition, in milliseconds
		label: "Menu", // String: Label for the navigation toggle
		insert: "before", // String: Insert the toggle before or after the navigation
		customToggle: "", // Selector: Specify the ID of a custom toggle
		closeOnNavClick: false, // Boolean: Close the navigation when one of the links are clicked
		openPos: "relative", // String: Position of the opened nav, relative or static
		navClass: "nav-collapse", // String: Default CSS class. If changed, you need to edit the CSS too!
		navActiveClass: "js-nav-active", // String: Class that is added to  element when nav is active
		jsClass: "js", // String: JS enabled class which is added to  element
		init: function(){}, // Function: Init callback
		open: function(){}, // Function: Open callback
		close: function(){} // Function: Close callback

           });

	</script>';
}

add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_js');
add_action('wp_footer', 'mf_responsive_nav');
//enable custom menus
add_theme_support('menus');
add_theme_support( 'html5', array( 'search-form' ) );

function create_widget($name, $id, $description){
$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>' 
	); 
	register_sidebar($args);
}
create_widget('social_widget', 'social', 'displays in social area');
create_widget('widget1', 'treehouse', 'displays in bottom area');

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
?>
