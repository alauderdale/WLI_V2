<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<style type="text/css">

.mc4wp-success{
    display: none;
}

</style>


<div class="hero resource-hero" style="background: #cab67e url(<?php the_field('hero_background_image');?>);">
    <div class="wrapped hero-content">
        <div class="six-col left">
            <h2 >
                Resource
            </h2>
            <h1>
                <?php the_title();?>
            </h1>
        </div>
    </div><!-- end hero content -->
</div><!-- end hero -->
<div class="clearfix"></div>
<div class="wrapped">
    <div class="row">
        <div class="eight-col left">
            <?php the_content();?>
        </div>
        <div class="four-col left">
            <div class="resource-panel">
                <div class="text-center">
                    <img class="img-responsive margin-bottom" src="<?php the_field('resource_image_url');?>" width="100px"/>
                    <h2>
                        Download This Resource
                    </h2>
                    <p>
                        Please complete the form and click the button below to gain instant access.
                    </p>
                </div>
                <div class="resource-download-form">
                    <?php the_field('resource_form_shortcode');?>
                </div>
            </div>
        </div>
    </div><!-- end row -->
</div>

<div style="display:none;">
    <div id="download-file">
        <div class="text-center" style="padding:10px;">
            <h3 class="half-marign-bottom">Thanks for regestering for:</h3>
            <h2 class="margin-bottom"><?php the_title();?></h2>
            <a target="_blank" href="<?php the_field('resource_file');?>" class="button btn-default margin-bottom">
                Download Now
            </a>
        </div>
    </div>
</div>

<!--end the loop-->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>