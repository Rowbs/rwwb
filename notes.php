 <?php 


/*

	Template Name: Notes Page

*/


 get_header();

  ?>
<div class="h-entry">
<?php
			$args = array(
		'post_type' => 'note'
	
		
	);
	
	$the_query = new WP_Query($args);
	?>
	<?php if(have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<div class="details"> <p class="details">Date: <?php the_time('F j, Y'); ?></p></div>
							<div class="details notes e-content"><?php the_field('note'); ?></div>
								 
							
			
							<?php endwhile; endif?>

</div>
<?php get_footer(); ?>