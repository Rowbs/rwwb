 <?php 


/*

	Template Name: Blog Page

*/


 get_header();

  ?>

<?php

	$args = array(
		'post_type' => 'post'
	);

	$the_query = new WP_Query( $args );

?>


<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<?php get_template_part('content', 'post'); ?>
<?php endwhile; else: ?>
<p>There are no posts or pages here</p>

<?php endif; ?>

<?php get_footer(); ?>