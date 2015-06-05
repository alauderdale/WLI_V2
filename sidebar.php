

<sidebar class="blog-sidebar">

    <div class="sidebar-inner">

        <div class="sidebar-section">

            <h1>Subscribe</h1>

            <ul class="subscribe">

                <li class="side-twitter left">

                    <a href="https://twitter.com/WLILegacy" target="_blank">

                        

                    </a>

                </li>

                <li class="side-rss left">

                    <a href="http://feeds.feedburner.com/wealthlegacyinstitute/CiWV" target="_blank">

                    </a>

                </li>

                <li class="side-mail left">

                    <a href="http://feedburner.google.com/fb/a/mailverify?uri=wealthlegacyinstitute/CiWV&amp;loc=en_US" target="_blank">

                    </a>

                </li>

            </ul>

        </div>

        <div class="clearfix"></div>

        <div class="sidebar-section">

            <h1>Categories</h1>

            <ul>

                <?php 

                        $args = array(

                        'title_li'           => __( '' ),

                        'exclude'            => '1'

                        ); 

                        ?>

                <?php wp_list_categories($args); ?> 

            </ul>

        </div>

        <div class="clearfix"></div>

        <div class="sidebar-section">

            <h1>Archive</h1>

            <ul>

                <?php wp_get_archives('type=monthly&limit=12'); ?>

            </ul>

        </div>

        <div class="clearfix"></div>

    </div>

</sidebar>