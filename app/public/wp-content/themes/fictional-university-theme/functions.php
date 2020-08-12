<?php
    function university_files() {
        wp_enqueue_script("main-university-js", get_theme_file_uri("/js/scripts-bundled.js"), NULL, "1.0", true); // dependencies, version num, where to load script (header or bottom of body)
        // 1. nickname for stylesheet, 2. location to point to file
        wp_enqueue_style("custom-google-fonts", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i"); 
        wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"); 
        wp_enqueue_style("university_main_styles", get_stylesheet_uri()); 

        // wp_enqueue_script()

    }

    add_action("wp_enqueue_scripts", "university_files");
    // 1. which moment when it should be, when you should execute code in header area
    // run custom function (2)

    function university_features() {
        // register_nav_menu("headerMenuLocation", "Header Menu Location");
        // register_nav_menu("footerLocationOne", "Footer Location One");
        // register_nav_menu("footerLocationTwo", "Footer Location Two");
        add_theme_support("title-tag");
    }

    add_action("after_setup_theme", "university_features");

?>