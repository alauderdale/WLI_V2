<?php
/*
Template Name: Portfolio Audit
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
    <div class="row border-bottom">
        <div class="media-object">
            <div class="media-thumb">
                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/service-thumb.png" width="300px"/>
            </div>
            <div class="media-body">
                <h3>Service Title</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla in neque a tincidunt. Ut iaculis nunc lobortis purus tincidunt sagittis. Donec vehicula est in mi ornare, id imperdiet neque euismod. Praesent pellentesque dignissim accumsan. Duis ut accumsan lectus.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla in neque a tincidunt.
                </p>
            </div>
        </div>
    </div><!-- end row -->
    <div class="row border-bottom padding-top">
        <div class="six-col left">
            <h3>A title of things</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla in neque a tincidunt. Ut iaculis nunc lobortis purus tincidunt sagittis. Donec vehicula est in mi ornare, id imperdiet neque euismod. Praesent pellentesque dignissim accumsan. Duis ut accumsan lectus.
            </p>
        </div>
        <div class="six-col left">
            <p>
                Form up in here
            </p>
        </div>
    </div><!-- end row -->
</div>

<?php get_footer(); ?>