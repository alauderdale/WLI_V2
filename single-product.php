<?php
/*
Template Name: Product Basic
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
<div class="wrapped">
    <div class="row border-bottom">
        <div class="eight-col left">
            <h3>
                <?php the_field('product_headline');?>
            </h3>
            <?php the_content();?>
        </div>
        <div class="four-col left">
            <div class="btn-stack">
                <a class="button btn-block btn-default" href="<?php the_field('product_button_one_url');?>">
                    <?php the_field('product_button_one_text');?>
                </a>
                </br>
                <a class="button btn-block btn-wire btn-default" href="<?php the_field('product_button_two_url');?>">
                    <?php the_field('product_button_two_text');?>
                </a>
            </div>
        </div>
    </div><!-- end row -->
    <div class="row double-padding-to">
        <div class="four-col left">
            <h3><?php the_field('product_point_one_headline');?></h3>
            <p>
                <?php the_field('product_point_one_text');?>
            </p>
        </div>
        <div class="four-col left">
            <h3><?php the_field('product_point_two_headline');?></h3>
            <p>
                <?php the_field('product_point_two_text');?>
            </p>
        </div>
        <div class="four-col left">
            <h3><?php the_field('product_point_three_headline');?></h3>
            <p>
                <?php the_field('product_point_three_text');?>
            </p>
        </div>
    </div><!-- end row -->
</div>

<!--end the loop-->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>