<?php
/*
Template Name Posts: Portfolio Audit
*/
?>


<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="hero product-hero" style="background-image:url(<?php the_field('hero_background_image');?>);">
    <div class="wrapped hero-content">
        <h1>
            <?php the_title();?>
        </h1>
        <h2>
            <?php the_field('hero_subtext');?>
        </h2>
    </div><!-- end hero content -->
</div><!-- end hero -->
<div class="clearfix"></div>
<div class="wrapped media-list">
    <div class="row border-bottom">
        <div class="media-object">
            <div class="media-thumb">
                <img class="img-responsive" src="<?php the_field('product_image');?>" width="300px"/>
            </div>
            <div class="media-body">
                <h3>
                    <?php the_field('product_headline');?>
                </h3>
                <?php the_content();?>
            </div>
        </div>
    </div><!-- end row -->
    <div class="row border-bottom padding-top">
        <div class="six-col left">
            <h3><?php the_field('product_point_one_headline');?></h3>
            <p>
                <?php the_field('product_point_one_text');?>
            </p>
        </div>
        <div class="six-col left">
            <?php echo do_shortcode("[mc4wp_form id='1871']"); ?>
        </div>
    </div><!-- end row -->
</div>

<!--end the loop-->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>