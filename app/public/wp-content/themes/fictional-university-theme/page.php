<?php
    get_header();

    while(have_posts()) {
        // wp fn - keep track of which post currently working with
        the_post(); ?> 

        <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<? echo get_theme_file_uri("images/ocean.jpg")?>);"></div>
            <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><? the_title(); ?></h1>
            <div class="page-banner__intro">
                <p>DONT FORGET TO REPLACE ME</p>
            </div>
            </div>  
        </div>

        <div class="container container--narrow page-section">
            <?
                $parentId = wp_get_post_parent_id(get_the_ID());
                if ($parentId) { ?>
                    <div class="metabox metabox--position-up metabox--with-home-link">
                        <p><a class="metabox__blog-home-link" href="<? echo get_permalink($parentId); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <? echo get_the_title($parentId); ?></a> <span class="metabox__main"><? the_title(); ?></span></p>
                    </div>
                <?}

                $testArray = get_pages(array(
                    "child_of" => get_the_ID()
                ));

                if ($parentId or $testArray) { ?>
            
                    <div class="page-links">
                        <h2 class="page-links__title"><a href="<? echo get_permalink($parentId) ?>"><? echo get_the_title($parentId) ?></a></h2>
                        <ul class="min-list">
                            <?
                                if ($parentId) {
                                    $findChildrenOf = $parentId;
                                } else {
                                    $findChildrenOf = get_the_ID();
                                }

                                wp_list_pages(array(
                                    "title_li" => NULL,
                                    "child_of" => $findChildrenOf
                                    // "sort_column" => "menu_order" - set order in admin page
                                ));
                            ?>
                        </ul>
                    </div>
            <? } ?>

            <div class="generic-content">
                <? the_content(); ?>
            </div>

        </div>
    <?}

    get_footer();
?>

