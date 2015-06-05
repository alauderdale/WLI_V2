<?php
/*
Template Name: Resources
 */
?>
<?php get_header(); ?>

<div class="hero" style="background-image:url(<?php echo get_post_meta($post->ID, 'upload_image', true); ?>);">
    <div class="wrapped hero-content">
        <h1><?php echo get_post_meta($post->ID, 'hero_title', true); ?></h1>
        <h2><?php echo get_post_meta($post->ID, 'hero_sub', true); ?></h2>
    </div><!-- end hero content -->
</div><!-- end hero -->
<div class="clearfix"></div>
<div class="wrapped">
    <div class="row double-padding-to">
        <?php $postLoopOne = new WP_Query( array( 'post_type' => 'resource') ); ?>
        <?php while ( $postLoopOne->have_posts() ) : $postLoopOne->the_post(); ?>
            <div class="four-col left">
                <div class="padded double-padding-bottom">
                    <a href="<?php the_permalink();?>">
                        <img class="img-responsive margin-bottom" src="<?php the_field('resource_image_url');?>" width="200px"/>
                    </a>
                    <h3 style="min-height:41px;"><?php the_title();?></h3>
                    <p>
                        <?php the_excerpt();?>
                    </p>
                    <a class="button btn-default" href="<?php the_permalink();?>">Get the Resource</a>
                </div>
            </div><!-- end col -->
        <?php endwhile; // end of the loop. ?>
    </div><!-- end row -->
</div>

<?php get_footer(); ?>