<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

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
                <img class="img-responsive margin-bottom" src="<?php the_field('resource_image_url');?>" width="200px"/>
                <h2>
                    Download This Resource
                </h2>
                <p>
                    Please complete the form and click the button below to gain instant access.
                </p>
                </div>
            </div>
        </div>
    </div><!-- end row -->
</div>

<!--end the loop-->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>