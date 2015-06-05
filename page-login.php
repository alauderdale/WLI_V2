<?php
/*
Template Name: Login
 */
?>




<div class='modal-sm modal-default'>
	<div class="text-center">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
        <div class="featured-panel login-panel">
            <a href="<?php the_field('wealthfront_url');?>">
                <span class="title left">
                WEALTHFRONT
                </span>
                <span class="chevron right">
                    〉
                </span>
            </a>
            <div class="clearfix"></div>
            <a href="<?php the_field('solutions_url');?>">
                <span class="title left">
                DIGITAL SOLUTION
                </span>
                <span class="chevron right">
                    〉
                </span>
            </a>
        </div>
	</div>
</div>



<?php wp_footer(); ?>