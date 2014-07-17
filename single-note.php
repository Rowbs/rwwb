<?php get_header(); ?>


<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="blog-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
	 <p class="details">Date: <?php the_time('F j, Y'); ?></p>
	 <p class="details"><?php the_field('notes') ?></p>

	<?php comments_template(); ?>
	
<?php endwhile; else: ?>
<p>There are no posts or pages here</p>
<?php endif; ?>

<?php get_footer(); ?>	