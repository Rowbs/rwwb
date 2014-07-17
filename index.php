 <?php  get_header(); ?>


<div class="main">

		
		<article class="content h-card">
		 <p>Hello my name is <a class="p-name u-url" href="http:\\www.rwwb.us">Andrew Rowberry</a>. Welcome to my personal site where i expirement with code, share my creations, and write. I
		 support the <a href="http:\\www.indiewebcamp.com">indie web movement.</a></p>
				<?php
			$args = array(
		'post_type' => 'post',
		'posts_per_page' => 2
		
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
		 	<form action="https://indieauth.com/auth" method="get">
  <label for="indie_auth_url">Web Address:</label>
  <input id="indie_auth_url" type="text" name="me" placeholder="yourdomain.com" />
  <p><button type="submit">Sign In</button></p>
  <input type="hidden" name="client_id" value="http://rwwb.us/" />
  <input type="hidden" name="redirect_uri" value="http://rwwb.us/" />
</form>
		</aside>

	
</div>


<?php get_footer(); ?>

