<?php
/*
Template Name: Services
 */
?>

<?php get_header(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/smoothscroll.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
          $('#sticky-container').pageScroller({
                navigation: '#sticky-menu',
                scrollOffset: -190
            });
          $('.service-menu ul li:first-of-type').addClass('active');
        });
    </script>
    <div class="service-hero hero" id="hero" style="margin-bottom:-72px; background-image:url(<?php echo get_post_meta($post->ID, 'upload_image', true); ?>);">
        <div class="wrapped hero-content">
            <h1><?php echo get_post_meta($post->ID, 'hero_title', true); ?></h1>
            <h2><?php echo get_post_meta($post->ID, 'hero_sub', true); ?></h2>
        </div><!-- end hero content -->
    </div><!-- end hero -->
    <div class="clearfix"></div>
    <?php
        $servicesloop = new WP_Query( array( 'post_type' => 'service') );
    ?>
    <div id="sticky-container">
        <div class="service-menu" id="sticky-menu">
            <div class="wrapped">
                <ul>
                    <?php while ( $servicesloop->have_posts() ) : $servicesloop->the_post(); ?>
                        <li>
                            <a href="#<?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>

        <?php while ( $servicesloop->have_posts() ) : $servicesloop->the_post(); ?>
            <section class="service">
                <div class="wrapped section"> 
                    <div class="service-inner">
                        <div class="service-top-info">
                            <div class="left"> 
                                <div class="service-thumb left six-col"> 
                                    <a href="<?php
                                        $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                                        echo $imgsrc[0];
                                        ?>" class="fancybox">
                                        <img src="<?php
                                        echo $imgsrc[0];
                                        ?>" />
                                    </a>
                                </div>
                                <div class="service-content right six-col">
                                    <h1><?php the_title(); ?> </h1>
                                    <div class="service-info">
                                        <?php the_content(); ?> 
                                    </div>
                                    <a href="#" class="more-service">More...</a>
                                    <div class="clearfix"></div>
                                    <h2><?php echo get_post_meta($post->ID, 'title_text', true); ?></h2>
                                    <p>
                                        <?php echo get_post_meta($post->ID, 'bullets', true); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="service-breakdown">
                            <div class="four-col left">
                                <h3><?php echo get_post_meta($post->ID, 'sum_title_1', true); ?></h3>
                                <p><?php echo get_post_meta($post->ID, 'sum_1', true); ?></p>
                            </div>
                            <div class="four-col left">
                                <h3><?php echo get_post_meta($post->ID, 'sum_title_2', true); ?></h3>
                                <p><?php echo get_post_meta($post->ID, 'sum_2', true); ?></p>
                            </div>
                            <div class="four-col left">
                                <h3><?php echo get_post_meta($post->ID, 'sum_title_3', true); ?></h3>
                                <p><?php echo get_post_meta($post->ID, 'sum_3', true); ?></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <a class="service-link" href="index.php?pagename=contact" id="<?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>">
                    <span class="arrow-link"><?php echo get_post_meta($post->ID, 'cta_text', true); ?></span>
                </a>
            </section>
            <div class="clearfix"></div>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>