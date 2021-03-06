<!DOCTYPE html>
<html>
<head>
    <title>
        <?php wp_title(''); ?> <?php bloginfo('name'); ?>
    </title>
<!--     googls analytics -->
   <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37857306-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- meta info -->
        <meta name="viewport" content="width=device-width,initial-scale=1">
<!-- stylesheets -->
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/royalslider.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/rs-default.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />

<!-- fonts -->
    <script type="text/javascript" src="//use.typekit.net/suy3bpz.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- jquery -->
 <!--   <script src="http://code.jquery.com/jquery-latest.js"></script>-->
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery-1.8.2.min.js"></script>
<!--     <meta name="viewport" content="width=device-width,initial-scale=1"> -->

<!-- slider -->
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.royalslider.min.js"></script>
<!-- fancybox -->
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.fancybox.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.fancybox.pack.js"></script>

<!-- custom scripts -->
<!-- sticky -->
<script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.stickyscroll.js"></script>
<!-- custom scripts -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/scripts.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header>
    <div class="admin-bar">
        <div class="admin-bar-content right">
            <p>
                Call Us 303.753.7578
            </p>
            <p>
                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Login Select' ) ) ); ?>" class="login-button fancybox fancybox.ajax">
<!--                 <a class="login-button"  href="https://www.junxureclientview.com/12447" target="_blank">   --> 
                    client login
                </a>
            </p>
        </div>
    </div><!-- end adminbar -->
    <div class="main-nav">
        <div class="logo left"><a href="<?php echo get_option('home'); ?>"></a></div>
        <a class="get-started-link uppercase right" href="index.php?pagename=contact">Start a Project</a>
        <div class="clearfix"></div>
        <div class="menu-contain">
            <?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) );   ?>            
        </div><!-- end wrapped -->
    </div><!-- end main nav -->
    </header>
    <div class="top-padding"></div>
    <div class="menu-change"></div>