<footer>

				<section class="social">
				 <?php if(!wp_is_mobile()): ?> 
					 <?php if(dynamic_sidebar( 'social_widget' )): ?> 
										 
										 <?php else: ?>
										 
											<h5>Social widget area</h5>
											
											<?php endif; ?>
											<?php endif; ?>
			</section>

		<p class="details" style="float: left;" >This site is created, written, and maintained by Andrew Rowberry @copyright 2014</p>
		<div class="details" style="float: left; margin-top: 16px;">
		
<?php get_search_form(); ?>
</div>
		</footer>
		<?php wp_footer(); ?>
		
  </body>
</html>