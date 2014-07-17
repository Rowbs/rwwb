 <?php 


/*

	Template Name: Home Page

*/


 get_header();

  ?>


<div class="main">

		
		<article class="content h-card">
		 <p>Hello my name is <a class="p-name u-url" href="http:\\www.rwwb.us">Andrew Rowberry</a>. Welcome to my personal site where i expirement with code, share my creations, and write. I
		 support the <a href="http:\\www.indiewebcamp.com">indie web movement.</a></p>
				<?php
			$args = array(
		'post_type' => 'post',
		'posts_per_page' => 3
		
	);
	
	$the_query = new WP_Query($args);
	?>
	<?php if(have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
					
		<?php get_template_part('content', 'post'); ?>
					
			<?php endwhile; endif?>

			<?php wp_reset_query(); ?>

		
	
		</article>
		<aside class="sidebar">
		 <?php if(dynamic_sidebar( 'widget1' )): ?> 

		 	<?php endif; ?>
		 	<h2 class="details">Recent Notes</h2>
<?php
			$args = array(
		'post_type' => 'note',
		'posts_per_page' => 1
		
	);
	
	$the_query = new WP_Query($args);
	?>
	<?php if(have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
					
		<div class="details"> <p class="details">Date: <?php the_time('F j, Y'); ?></p></div>
							<div class="details notes"><?php the_field('note'); ?></div>
					
			<?php endwhile; endif?>

		</aside>

	
</div>


<?php get_footer(); ?>

