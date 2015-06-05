<?php
/*
Template Name: Modal
 */
?>




<div class='modal-sm modal-default'>
	<div class="text-center">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
</div>



<?php wp_footer(); ?>