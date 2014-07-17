
	<div class="post-info">
	<div class="blog-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
 	 <p class="details">Categorys:<?php the_category(', ');?></p>
	 <p class="details">Date: <?php the_time('F j, Y'); ?></p>
</div>



	<?php if(is_single()): ?>
		
		<div class="content-wrapper">
	    <?php the_content(); ?>
	    </div>
	   
		<?php comments_template(); ?>

	<?php else: ?>

		
		<div class="content-wrapper">
		<?php the_excerpt(); ?>
		</div>
		<button class="main-btn"><a href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></button>

	<?php endif; ?>
	
