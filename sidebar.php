<div class="asideMenuButton">
    <header class="asideMenuButtonTitle"><?php echo __('Sidebar', 'wikiwp'); ?></header>
    <div class="asideMenuButtonContent">
        <hr>
        <hr>
        <hr>
    </div>
</div>

<aside>
    <div class="aside-container container-full">
        <div class="customSidebar">
            <?php
            if (is_single() || is_page_template( 'wiki-page.php' )) {
                while (have_posts()) : the_post();
                    // get thumbnail
                    wikiwp_get_thumbnail($post);
            ?>

            <div class="row sidebarContent">
                <div class="col-md-12">
                    <?php
                    // show edit button if user is logged in
                    wikiwp_get_edit_post_link($post);
                    ?>

                    <div class="widget">
                        <h3 class="widgetTitle"><?php the_title(); ?></h3>
                    </div>

                    <div class="widget">

                        <div class="">
                            <?php
                            // categories
                            _e('Категория', 'wikiwp');
                            echo ':&nbsp;';
                            the_category(', ');
                            ?>
                        </div>

                        <?php wikiwp_get_tags($post); ?>
                    </div>

                    <?php wikiwp_get_related_posts($post); ?>
                </div>
            </div>

            <?php
                endwhile;
            } else {
                ?>
                <div class="row sidebarContent">
                    <div class="col-md-12">
                        <?php
                        // show edit button if user is logged in
                        wikiwp_get_edit_post_link($post);
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <div class="dynamicSidebar">
            <div class="row sidebarContent">
                <div class="col-md-12">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif; ?>
                </div>
            </div>
        </div>
    </div>
</aside>