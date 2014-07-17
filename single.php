<?php get_header(); ?>


<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<?php if(is_single()): ?>
	<div class="post-info h-entry">
	<div class="blog-title"> <a class="p-name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
 	 <p class="details p-category">Categorys:<?php the_category(', ');?></p>
	 <p class="details dt-published">Date: <?php the_time('F j, Y'); ?></p>
</div>
<div class="content-wrapper e-content">
	    <?php the_content(); ?>
	    </div>
	   
		<?php comments_template(); ?>
<?php endif; ?>
<?php endwhile; endif; ?>



<?php get_footer(); ?>