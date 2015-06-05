<?php
/*
Template Name: Products
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
<div class="wrapped media-list">
  <?php $postLoopOne = new WP_Query( array( 'post_type' => 'product') ); ?>
    <?php while ( $postLoopOne->have_posts() ) : $postLoopOne->the_post(); ?>
        <div class="row border-bottom">
            <div class="media-object">
                <div class="media-thumb">
                    <img class="img-responsive" src="<?php the_field('product_image');?>" width="200px"/>
                </div>
                <div class="media-body">
                    <h3>
                        <?php the_title();?>
                    </h3>
                    <?php the_excerpt();?>
                    <ul class="link-list">
                        <li>
                            <?php if( get_field('thumbnail_link_one_url') ) { ?>
                                <a href="<?php the_field('thumbnail_link_one_url');?>">
                            <?php } else { ?>
                                <a href="<?php the_permalink();?>">
                            <?php  } ?>
                                <?php the_field('thumbnail_link_one_text');?>
                            </a>
                        </li>
                        <li>
                            <?php if( get_field('thumbnail_link_two_url') ) { ?>
                                <a href="<?php the_field('thumbnail_link_two_url');?>">

                            <?php } else { ?>
                                <a href="<?php the_permalink();?>">
                            <?php  } ?>
                                <?php the_field('thumbnail_link_two_text');?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- end row -->
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>