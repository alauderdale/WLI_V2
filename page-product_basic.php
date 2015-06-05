<?php
/*
Template Name: Product Basic
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
    <div class="row border-bottom">
        <div class="eight-col left">
            <h3>Service Title</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla in neque a tincidunt. Ut iaculis nunc lobortis purus tincidunt sagittis. Donec vehicula est in mi ornare, id imperdiet neque euismod. Praesent pellentesque dignissim accumsan. Duis ut accumsan lectus.
            </p>
        </div>
        <div class="four-col left">
            <div class="btn-stack">
                <a class="button btn-block btn-default half-margin-bottom" href="#">
                    Link One
                </a>
                </br>
                <a class="button btn-block btn-wire btn-default" href="#">
                    Link One
                </a>
            </div>
        </div>
    </div><!-- end row -->
    <div class="row double-padding-to">
        <div class="four-col left">
            <h3>Service Title</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla in neque a tincidunt. Ut iaculis nunc lobortis purus tincidunt sagittis. Donec vehicula est in mi ornare, id imperdiet neque euismod. Praesent pellentesque dignissim accumsan. Duis ut accumsan lectus.
            </p>
        </div>
        <div class="four-col left">
            <h3>Service Title</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla in neque a tincidunt. Ut iaculis nunc lobortis purus tincidunt sagittis. Donec vehicula est in mi ornare, id imperdiet neque euismod. Praesent pellentesque dignissim accumsan. Duis ut accumsan lectus.
            </p>
        </div>
        <div class="four-col left">
            <h3>Service Title</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla in neque a tincidunt. Ut iaculis nunc lobortis purus tincidunt sagittis. Donec vehicula est in mi ornare, id imperdiet neque euismod. Praesent pellentesque dignissim accumsan. Duis ut accumsan lectus.
            </p>
        </div>
    </div><!-- end row -->
</div>

<?php get_footer(); ?>